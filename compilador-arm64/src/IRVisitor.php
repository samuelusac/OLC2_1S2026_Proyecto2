<?php

class IRVisitor extends GolampiBaseVisitor
{

    private int $labelCounter = 0;
    private SymbolTable $symbolTable;
    private ?StackFrame $currentFrame = null;
    private ErrorManager $errorManager;
    private array $loopStack = [];

    public function __construct()
    {
        $this->symbolTable = new SymbolTable();
        $this->errorManager = new ErrorManager();
    }

    private function newLabel(): string
    {
        return "L" . $this->labelCounter++;
    }
    public function visitProgram($ctx)
    {

        $functions = [];

        foreach ($ctx->functionDecl() as $fn) {
            $fnData = $this->visit($fn);

            $name = $fnData['name'];

            if (isset($functions[$name])) {
                // throw new Exception("Función duplicada: $name");
                // $this->errorManager->add(
                //     "Semántico",
                //     "Función duplicada: $name"
                // );
                $this->semanticError(
                    $ctx,
                    "Función duplicad: $name"
                );

                // return [
                //     "type" => "ERROR"
                // ];
                continue;
            }

            $functions[$name] = $fnData;
        }

        return [
            "functions" => $functions,
            "entry" => "main"
        ];
    }

    public function visitIfStmt($ctx)
    {
        $trueLabel = $this->newLabel();
        $falseLabel = $this->newLabel();
        $endLabel = $this->newLabel();

        $instructions = [];

        // condición
        $condition = $this->visit($ctx->expr());

        // if cond goto true
        $instructions[] = [
            "op" => "IF_GOTO",
            "condition" => $condition,
            "label" => $trueLabel
        ];

        // else
        $instructions[] = [
            "op" => "GOTO",
            "label" => $falseLabel
        ];

        // TRUE BLOCK
        $instructions[] = [
            "op" => "LABEL",
            "name" => $trueLabel
        ];

        $trueBlock = $this->visit($ctx->block(0));

        $instructions = array_merge($instructions, $trueBlock);

        // salir del if
        $instructions[] = [
            "op" => "GOTO",
            "label" => $endLabel
        ];

        // FALSE BLOCK
        $instructions[] = [
            "op" => "LABEL",
            "name" => $falseLabel
        ];

        // existe else
        if ($ctx->block(1)) {

            $falseBlock = $this->visit($ctx->block(1));

            $instructions = array_merge($instructions, $falseBlock);
        }

        // END
        $instructions[] = [
            "op" => "LABEL",
            "name" => $endLabel
        ];

        return $instructions;
    }

    public function visitFunctionDecl($ctx)
    {
        $name = $ctx->ID()->getText();

        $this->symbolTable->enterScope();

        $this->currentFrame = new StackFrame();

        $params = [];

        if ($ctx->parameterList()) {

            foreach ($ctx->parameterList()->parameter() as $paramCtx) {

                $param = $this->buildParameter($paramCtx);
                $offset = $this->currentFrame->allocate($param['name']);

                $params[] = $param;

                // parámetros son variables locales
                // $this->symbolTable->declare($param['name'], [
                //     "type" => $param['type'],
                //     "kind" => "parameter",
                //     "offset" => $offset
                // ]);

                try {

                    $this->symbolTable->declare($param['name'], [
                        "type" => $param['type'],
                        "kind" => "parameter",
                        "offset" => $offset
                    ]);

                } catch (Exception $e) {

                    $this->semanticError($ctx, $e->getMessage());
                }
            }
        }

        $body = $this->visit($ctx->block());

        $this->symbolTable->exitScope();

        return [
            "type" => "FUNCTION",
            "name" => $name,
            "params" => $params,
            "body" => $body
        ];
    }

    public function visitReturnStmt($ctx)
    {
        $value = null;

        if ($ctx->expr()) {
            $value = $this->visit($ctx->expr());
        }

        return [
            "op" => "RETURN",
            "value" => $value
        ];
    }

    public function visitBreakStmt($ctx)
    {
        $loop = end($this->loopStack);

        return [
            "op" => "GOTO",
            "label" => $loop['break']
        ];
    }

    public function visitContinueStmt($ctx)
    {
        $loop = end($this->loopStack);

        return [
            "op" => "GOTO",
            "label" => $loop['continue']
        ];
    }

    public function visitForUpdate($ctx)
    {
        if ($ctx->assignment()) {
            return $this->visit($ctx->assignment());
        }

        if ($ctx->unaryUpdate()) {
            return $this->visit($ctx->unaryUpdate());
        }

        return [];
    }

    public function visitForInit($ctx)
    {
        if ($ctx->shortVarDecl()) {
            return $this->visit($ctx->shortVarDecl());
        }

        if ($ctx->assignment()) {
            return $this->visit($ctx->assignment());
        }

        return [];
    }

    public function visitBlock($ctx)
    {
        $this->symbolTable->enterScope();

        $instructions = [];

        foreach ($ctx->statement() as $stmt) {

            $result = $this->visit($stmt);

            // skip null
            if ($result === null) {
                continue;
            }

            // multiple instructions
            if (
                is_array($result)
                && array_is_list($result)
            ) {

                foreach ($result as $inst) {

                    if ($inst !== null) {
                        $instructions[] = $inst;
                    }
                }

                continue;
            }

            // single instruction
            $instructions[] = $result;
        }

        $this->symbolTable->exitScope();

        return $instructions;
    }

    public function visitPrintStmt($ctx)
    {
        $args = [];

        if ($ctx->argumentList()) {
            foreach ($ctx->argumentList()->expr() as $expr) {
                $args[] = $this->visit($expr);
            }
        }

        return [
            "op" => "PRINT",
            "args" => $args
        ];
    }

    public function visitForClassic($ctx)
    {
        $startLabel = $this->newLabel();
        $bodyLabel = $this->newLabel();
        $endLabel = $this->newLabel();
        $updateLabel = $this->newLabel();

        $instructions = [];

        // LOOP CONTEXT
        $this->loopStack[] = [
            "break" => $endLabel,
            "continue" => $updateLabel
        ];

        // INIT
        $init = $this->visit($ctx->forInit());

        if (is_array($init) && isset($init[0])) {
            $instructions = array_merge($instructions, $init);
        } else {
            $instructions[] = $init;
        }

        // START
        $instructions[] = [
            "op" => "LABEL",
            "name" => $startLabel
        ];

        // CONDITION
        $condition = $this->visit($ctx->expr());

        $instructions[] = [
            "op" => "IF_GOTO",
            "condition" => $condition,
            "label" => $bodyLabel
        ];

        $instructions[] = [
            "op" => "GOTO",
            "label" => $endLabel
        ];

        // BODY
        $instructions[] = [
            "op" => "LABEL",
            "name" => $bodyLabel
        ];

        $body = $this->visit($ctx->block());

        $instructions = array_merge($instructions, $body);

        // UPDATE
        // $update = $this->visit($ctx->forUpdate());
        $instructions[] = [
            "op" => "LABEL",
            "name" => $updateLabel
        ];

        $update = $this->visit($ctx->forUpdate());

        if (is_array($update) && isset($update[0])) {
            $instructions = array_merge($instructions, $update);
        } else {
            $instructions[] = $update;
        }

        // LOOP
        $instructions[] = [
            "op" => "GOTO",
            "label" => $startLabel
        ];

        // END
        $instructions[] = [
            "op" => "LABEL",
            "name" => $endLabel
        ];

        array_pop($this->loopStack);

        return $instructions;
    }

    public function visitForConditional($ctx)
    {
        $startLabel = $this->newLabel();
        $bodyLabel = $this->newLabel();
        $endLabel = $this->newLabel();

        $this->loopStack[] = [
            "break" => $endLabel,
            "continue" => $startLabel
        ];

        $instructions = [];

        $instructions[] = [
            "op" => "LABEL",
            "name" => $startLabel
        ];

        $condition = $this->visit($ctx->expr());

        $instructions[] = [
            "op" => "IF_GOTO",
            "condition" => $condition,
            "label" => $bodyLabel
        ];

        $instructions[] = [
            "op" => "GOTO",
            "label" => $endLabel
        ];

        $instructions[] = [
            "op" => "LABEL",
            "name" => $bodyLabel
        ];

        $body = $this->visit($ctx->block());

        $instructions = array_merge($instructions, $body);

        $instructions[] = [
            "op" => "GOTO",
            "label" => $startLabel
        ];

        $instructions[] = [
            "op" => "LABEL",
            "name" => $endLabel
        ];

        array_pop($this->loopStack);

        return $instructions;
    }

    public function visitForInfinite($ctx)
    {
        $startLabel = $this->newLabel();
        $endLabel = $this->newLabel();

        $this->loopStack[] = [
            "break" => $endLabel,
            "continue" => $startLabel
        ];

        $instructions = [];

        $instructions[] = [
            "op" => "LABEL",
            "name" => $startLabel
        ];

        $body = $this->visit($ctx->block());

        $instructions = array_merge($instructions, $body);

        $instructions[] = [
            "op" => "GOTO",
            "label" => $startLabel
        ];

        $instructions[] = [
            "op" => "LABEL",
            "name" => $endLabel
        ];

        array_pop($this->loopStack);

        return $instructions;
    }

    public function visitArrayType($ctx)
    {
        $dimensions = [];

        foreach ($ctx->INT() as $intToken) {
            $dimensions[] = intval($intToken->getText());
        }

        return [
            "kind" => "array",
            "dimensions" => $dimensions,
            "baseType" => $ctx->primitiveType()->getText()
        ];
    }

    public function visitArrayAccess($ctx)
    {
        $name = $ctx->ID()->getText();

        $symbol = $this->symbolTable->lookup($name);

        if (!$symbol) {

            $this->semanticError(
                $ctx,
                "Arreglo no definido: $name"
            );

            return [
                "type" => "ERROR"
            ];
        }

        $indices = [];

        foreach ($ctx->expr() as $exprCtx) {

            $indices[] = $this->visit(
                $exprCtx
            );
        }

        // =====================================
        // TYPE INFO
        // =====================================

        $arrayType = $symbol['type'] ?? [];

        $dimensions =
            $arrayType['dimensions']
            ?? [];

        $baseType =
            $arrayType['baseType']
            ?? 'int32';

        return [

            "type" => "ARRAY_ACCESS",

            "array" => $name,

            "indices" => $indices,

            "dimensions" => $dimensions,

            "baseType" => $baseType,

            "offset" => $symbol['offset'] ?? null
        ];
    }

    public function visitArrayAssignment($ctx)
    {
        $name = $ctx->ID()->getText();

        $symbol = $this->symbolTable->lookup($name);

        if (!$symbol) {

            $this->semanticError(
                $ctx,
                "Array no definido: $name"
            );

            return [
                "type" => "ERROR"
            ];
        }

        $allExprs = $ctx->expr();

        // =====================================
        // LAST EXPR = VALUE
        // =====================================

        $valueExpr = $this->visit(
            $allExprs[count($allExprs) - 1]
        );

        // =====================================
        // PREVIOUS EXPRS = INDICES
        // =====================================

        $indices = [];

        for (
            $i = 0;
            $i < count($allExprs) - 1;
            $i++
        ) {

            $indices[] = $this->visit(
                $allExprs[$i]
            );
        }

        $arrayType =
            $symbol['type']
            ?? [];

        return [

            "op" => "ARRAY_ASSIGN",

            "name" => $name,

            "offset" => $symbol['offset'] ?? 0,

            "indices" => $indices,

            "dimensions" =>
                $arrayType['dimensions']
                ?? [],

            "baseType" =>
                $arrayType['baseType']
                ?? 'int32',

            "value" => $valueExpr
        ];
    }

    public function visitArrayLiteral($ctx)
    {
        $type = $this->visit(
            $ctx->arrayType()
        );

        $values = [];

        $elementsCtx = $ctx->arrayElements();

        if ($elementsCtx) {

            $this->flattenArrayElements(
                $elementsCtx,
                $values
            );
        }

        return [

            "type" => "ARRAY_LITERAL",

            "arrayType" => $type,

            "values" => $values
        ];
    }

    private function flattenArrayElements(
        $ctx,
        array &$values
    ): void {

        foreach ($ctx->arrayElement() as $element) {

            // nested array
            if ($element->arrayElements()) {

                $this->flattenArrayElements(
                    $element->arrayElements(),
                    $values
                );

                continue;
            }

            // normal expr
            if ($element->expr()) {

                $values[] = $this->visit(
                    $element->expr()
                );
            }
        }
    }

    public function visitWhileStmt($ctx)
    {
        $startLabel = $this->newLabel();
        $bodyLabel = $this->newLabel();
        $endLabel = $this->newLabel();

        $condition = $this->visit($ctx->expr());
        $body = $this->visit($ctx->block());

        $instructions = [];

        // inicio loop
        $instructions[] = [
            "op" => "LABEL",
            "name" => $startLabel
        ];

        // evaluar condición
        $instructions[] = [
            "op" => "IF_GOTO",
            "condition" => $condition,
            "label" => $bodyLabel
        ];

        // salir
        $instructions[] = [
            "op" => "GOTO",
            "label" => $endLabel
        ];

        // cuerpo
        $instructions[] = [
            "op" => "LABEL",
            "name" => $bodyLabel
        ];

        $instructions = array_merge($instructions, $body);

        // regresar al inicio
        $instructions[] = [
            "op" => "GOTO",
            "label" => $startLabel
        ];

        // fin loop
        $instructions[] = [
            "op" => "LABEL",
            "name" => $endLabel
        ];

        return $instructions;
    }

    public function visitFunctionCall($ctx)
    {
        $name = $ctx->ID()->getText();

        $args = [];

        if ($ctx->argumentList()) {
            foreach ($ctx->argumentList()->expr() as $expr) {
                $args[] = $this->visit($expr);
            }
        }

        return [
            "type" => "CALL",
            "name" => $name,
            "args" => $args
        ];
    }

    public function visitVarDecl($ctx)
    {
        $ids = $ctx->idList()->ID();

        $type = $this->visit($ctx->type());


        $values = [];

        if ($ctx->exprList()) {

            foreach ($ctx->exprList()->expr() as $exprCtx) {

                $values[] = $this->visit($exprCtx);
            }
        }

        $instructions = [];

        for ($i = 0; $i < count($ids); $i++) {

            $name = $ids[$i]->getText();

            $value = $values[$i] ?? null;

            // =====================================
            // ALLOCATE IN STACK FRAME
            // =====================================

            $offset = $this->currentFrame->allocate(
                $name,
                $type
            );

            // =====================================
            // DECLARE SYMBOL
            // =====================================

            try {

                $this->symbolTable->declare($name, [

                    "type" => $type,

                    "kind" => "local",

                    "offset" => $offset
                ]);

            } catch (Exception $e) {

                $this->semanticError(
                    $ctx,
                    $e->getMessage()
                );
            }

            // =====================================
            // ARRAYS
            // =====================================

            if (
                is_array($type)
                && ($type['kind'] ?? '') === 'array'
            ) {

                // =====================================
                // ARRAY WITH LITERAL INITIALIZATION
                // =====================================

                if (
                    $value !== null
                    && ($value['type'] ?? '') === 'ARRAY_LITERAL'
                ) {

                    foreach ($value['values'] as $index => $elementValue) {

                        $instructions[] = [

                            "op" => "ARRAY_ASSIGN",

                            "name" => $name,

                            "offset" => $offset,

                            "index" => [

                                "type" => "CONST",

                                "value" => strval($index)
                            ],

                            "value" => $elementValue
                        ];
                    }
                }

                if (
                    is_array($type)
                    && ($type['kind'] ?? '') === 'array'
                ) {

                    // =====================================
                    // ARRAY LITERAL INITIALIZATION
                    // =====================================

                    if (
                        $value !== null
                        && ($value['type'] ?? '') === 'ARRAY_LITERAL'
                    ) {

                        foreach ($value['values'] as $index => $elementValue) {

                            $instructions[] = [

                                "op" => "ARRAY_ASSIGN",

                                "name" => $name,

                                "offset" => $offset,

                                "indices" => [
                                    [
                                        "type" => "CONST",
                                        "value" => strval($index)
                                    ]
                                ],

                                "dimensions" =>
                                    $type['dimensions'] ?? [],

                                "baseType" =>
                                    $type['baseType'] ?? 'int32',

                                "value" => $elementValue
                            ];
                        }

                    } else {

                        // =====================================
                        // ZERO INITIALIZATION
                        // =====================================

                        $count = 1;

                        foreach (
                            $type['dimensions'] as $dim
                        ) {

                            $count *= $dim;
                        }

                        for ($index = 0; $index < $count; $index++) {

                            $instructions[] = [

                                "op" => "ARRAY_ASSIGN",

                                "name" => $name,

                                "offset" => $offset,

                                "indices" => [
                                    [
                                        "type" => "CONST",
                                        "value" => strval($index)
                                    ]
                                ],

                                "dimensions" =>
                                    $type['dimensions'] ?? [],

                                "baseType" =>
                                    $type['baseType'] ?? 'int32',

                                "value" => [
                                    "type" => "CONST",
                                    "value" => "0"
                                ]
                            ];
                        }
                    }

                    continue;
                }
            }

            // =====================================
            // NORMAL VARIABLE
            // =====================================

            $instructions[] = [

                "op" => "ASSIGN",

                "name" => $name,

                "offset" => $offset,

                "varType" => $type,

                "value" => $value
            ];
        }

        // =====================================
        // EMPTY
        // =====================================

        if (empty($instructions)) {
            return null;
        }

        return $instructions;
    }

    public function visitShortVarDecl($ctx)
    {
        $ids = $ctx->idList()->ID();

        $values = [];

        foreach ($ctx->exprList()->expr() as $exprCtx) {

            $values[] = $this->visit($exprCtx);
        }

        $instructions = [];

        for ($i = 0; $i < count($ids); $i++) {

            $name = $ids[$i]->getText();

            $value = $values[$i] ?? null;

            // =====================================
            // INFER TYPE
            // =====================================

            $type = $this->inferTypeFromExpr(
                $value
            );

            // =====================================
            // ALLOCATE
            // =====================================

            $offset = $this->currentFrame->allocate(
                $name,
                $type
            );

            // =====================================
            // SYMBOL TABLE
            // =====================================

            try {

                $this->symbolTable->declare($name, [

                    "type" => $type,

                    "kind" => "local",

                    "offset" => $offset
                ]);

            } catch (Exception $e) {

                $this->semanticError(
                    $ctx,
                    $e->getMessage()
                );
            }

            // =====================================
            // IR
            // =====================================

            // =====================================
// ARRAY
// =====================================

            if (
                is_array($type)
                && ($type['kind'] ?? '') === 'array'
            ) {

                // =====================================
                // ARRAY LITERAL INITIALIZATION
                // =====================================

                if (
                    $value !== null
                    && ($value['type'] ?? '') === 'ARRAY_LITERAL'
                ) {

                    foreach ($value['values'] as $index => $elementValue) {

                        $instructions[] = [

                            "op" => "ARRAY_ASSIGN",

                            "name" => $name,

                            "offset" => $offset,

                            "indices" => [
                                [
                                    "type" => "CONST",
                                    "value" => strval($index)
                                ]
                            ],

                            "dimensions" =>
                                $type['dimensions'] ?? [],

                            "baseType" =>
                                $type['baseType'] ?? 'int32',

                            "value" => $elementValue
                        ];
                    }

                } else {

                    // zero init

                    $count = 1;

                    foreach (
                        $type['dimensions'] as $dim
                    ) {

                        $count *= $dim;
                    }

                    for ($index = 0; $index < $count; $index++) {

                        $instructions[] = [

                            "op" => "ARRAY_ASSIGN",

                            "name" => $name,

                            "offset" => $offset,

                            "indices" => [
                                [
                                    "type" => "CONST",
                                    "value" => strval($index)
                                ]
                            ],

                            "dimensions" =>
                                $type['dimensions'] ?? [],

                            "baseType" =>
                                $type['baseType'] ?? 'int32',

                            "value" => [
                                "type" => "CONST",
                                "value" => "0"
                            ]
                        ];
                    }
                }

                continue;
            }

            $instructions[] = [

                "op" => "ASSIGN",

                "name" => $name,

                "varType" => $type,

                "value" => $value,

                "offset" => $offset
            ];
        }

        return $instructions;
    }

    private function inferTypeFromExpr($expr)
    {
        // =====================================
        // CONST
        // =====================================

        if ($expr['type'] === 'CONST') {

            $value = $expr['value'];

            // bool

            if (
                $value === 'true'
                || $value === 'false'
            ) {

                return [
                    "kind" => "primitive",
                    "name" => "bool"
                ];
            }

            // rune

            if (
                is_string($value)
                && preg_match("/^'.'$/", $value)
            ) {

                return [
                    "kind" => "primitive",
                    "name" => "rune"
                ];
            }

            // string

            if (
                is_string($value)
                && str_starts_with($value, '"')
                && str_ends_with($value, '"')
            ) {

                return [
                    "kind" => "primitive",
                    "name" => "string"
                ];
            }

            // float

            if (
                is_string($value)
                && preg_match(
                    '/^[0-9]+\.[0-9]+$/',
                    $value
                )
            ) {

                return [
                    "kind" => "primitive",
                    "name" => "float32"
                ];
            }

            // int

            return [
                "kind" => "primitive",
                "name" => "int32"
            ];
        }

        // =====================================
        // VAR
        // =====================================

        if ($expr['type'] === 'VAR') {

            return $expr['varType']
                ?? [
                    "kind" => "primitive",
                    "name" => "int32"
                ];
        }

        // =====================================
// ARRAY LITERAL
// =====================================

        if (
            $expr['type'] === 'ARRAY_LITERAL'
        ) {

            return $expr['arrayType'];
        }

        // =====================================
        // FALLBACK
        // =====================================

        return [
            "kind" => "primitive",
            "name" => "int32"
        ];
    }

    public function visitConstDecl($ctx)
    {
        $name = $ctx->ID()->getText();

        $type = $this->visit(
            $ctx->type()
        );

        $value = $this->visit(
            $ctx->expr()
        );

        // =====================================
        // ALLOCATE
        // =====================================

        $offset = $this->currentFrame->allocate(
            $name,
            $type
        );

        // =====================================
        // SYMBOL TABLE
        // =====================================

        try {

            $this->symbolTable->declare($name, [

                "type" => $type,

                "kind" => "const",

                "offset" => $offset
            ]);

        } catch (Exception $e) {

            $this->semanticError(
                $ctx,
                $e->getMessage()
            );
        }

        // =====================================
        // LOWER AS NORMAL ASSIGN
        // =====================================

        return [

            "op" => "ASSIGN",

            "name" => $name,

            "varType" => $type,

            "value" => $value,

            "offset" => $offset
        ];
    }

    public function visitAssignment($ctx)
    {
        $name = $ctx->ID()->getText();

        $symbol = $this->symbolTable->lookup($name);

        if (!$symbol) {

            $this->semanticError(
                $ctx,
                "Variable no definida: $name"
            );

            return [
                "type" => "ERROR"
            ];
        }

        $offset = $symbol['offset'] ?? 0;

        $op = $ctx->assignOp()->getText();

        $value = $this->visit($ctx->expr());

        // =====================================
        // SIMPLE ASSIGN
        // =====================================

        if ($op === '=') {

            return [
                "op" => "ASSIGN",
                "name" => $name,
                "offset" => $offset,
                "value" => $value
            ];
        }

        // =====================================
        // COMPOUND ASSIGN
        // =====================================

        $binaryOp = substr($op, 0, 1);

        return [
            "op" => "ASSIGN",
            "name" => $name,
            "offset" => $offset,

            "value" => [

                "type" => "BINARY",

                "op" => $binaryOp,

                "left" => [
                    "type" => "VAR",
                    "name" => $name,
                    "offset" => $offset
                ],

                "right" => $value
            ]
        ];
    }

    public function visitSwitchStmt($ctx)
    {
        $switchExpr = $this->visit($ctx->expr());

        $endLabel = $this->newLabel();

        $instructions = [];

        $caseLabels = [];

        // labels por case
        foreach ($ctx->switchCase() as $caseCtx) {
            $caseLabels[] = $this->newLabel();
        }

        $defaultLabel = $ctx->defaultCase()
            ? $this->newLabel()
            : $endLabel;

        // comparaciones
        foreach ($ctx->switchCase() as $i => $caseCtx) {

            $caseExpr = $this->visit($caseCtx->expr());

            $instructions[] = [
                "op" => "IF_GOTO",
                "condition" => [
                    "type" => "BINARY",
                    "op" => "==",
                    "left" => $switchExpr,
                    "right" => $caseExpr
                ],
                "label" => $caseLabels[$i]
            ];
        }

        // default
        $instructions[] = [
            "op" => "GOTO",
            "label" => $defaultLabel
        ];

        // cuerpos case
        foreach ($ctx->switchCase() as $i => $caseCtx) {

            $instructions[] = [
                "op" => "LABEL",
                "name" => $caseLabels[$i]
            ];

            foreach ($caseCtx->statement() as $stmt) {

                $result = $this->visit($stmt);

                if (is_array($result) && isset($result[0])) {
                    $instructions = array_merge($instructions, $result);
                } else {
                    $instructions[] = $result;
                }
            }

            $instructions[] = [
                "op" => "GOTO",
                "label" => $endLabel
            ];
        }

        // default body
        if ($ctx->defaultCase()) {

            $instructions[] = [
                "op" => "LABEL",
                "name" => $defaultLabel
            ];

            foreach ($ctx->defaultCase()->statement() as $stmt) {

                $result = $this->visit($stmt);

                if (is_array($result) && isset($result[0])) {
                    $instructions = array_merge($instructions, $result);
                } else {
                    $instructions[] = $result;
                }
            }
        }

        // fin switch
        $instructions[] = [
            "op" => "LABEL",
            "name" => $endLabel
        ];

        return $instructions;
    }

    public function visitUnaryUpdate($ctx)
    {
        $name = $ctx->ID()->getText();

        $symbol = $this->symbolTable->lookup($name);

        if (!$symbol) {

            $this->semanticError(
                $ctx,
                "Variable no definida: $name"
            );

            return [
                "type" => "ERROR"
            ];
        }

        $offset = $symbol['offset'] ?? 0;

        $op = $ctx->getChild(1)->getText();

        $binaryOp = $op === '++' ? '+' : '-';

        return [

            "op" => "ASSIGN",

            "name" => $name,

            "offset" => $offset,

            "value" => [

                "type" => "BINARY",

                "op" => $binaryOp,

                "left" => [
                    "type" => "VAR",
                    "name" => $name,
                    "offset" => $offset
                ],

                "right" => [
                    "type" => "CONST",
                    "value" => 1
                ]
            ]
        ];
    }



    public function visitIdentifierExpr($ctx)
    {
        $name = $ctx->getText();

        $symbol = $this->symbolTable->lookup($name);

        if (!$symbol) {
            // $this->errorManager->add(
            //     "Semántico",
            //     "Variable no definida: $name"
            // );
            $this->semanticError(
                $ctx,
                "Variable no definida: $name"
            );

            return [
                "type" => "ERROR"
            ];
        }

        return [
            "type" => "VAR",
            "name" => $name,
            "offset" => $symbol['offset'] ?? null
        ];
    }

    // public function visitExpr($ctx)
    // {
    //     return $this->visit($ctx->literal());
    // }

    public function visitLogicalOr($ctx)
    {
        return $this->buildBinaryExpr($ctx);
    }

    public function visitLogicalAnd($ctx)
    {
        return $this->buildBinaryExpr($ctx);
    }

    public function visitEquality($ctx)
    {
        return $this->buildBinaryExpr($ctx);
    }

    // public function visitRelational($ctx)
    // {
    //     return $this->buildBinaryExpr($ctx);
    // }

    private function buildLeftAssociativeBinary($ctx)
    {
        $result = $this->visit($ctx->getChild(0));

        for ($i = 1; $i < $ctx->getChildCount(); $i += 2) {

            $op = $ctx->getChild($i)->getText();

            $right = $this->visit($ctx->getChild($i + 1));

            $result = [
                "type" => "BINARY",
                "op" => $op,
                "left" => $result,
                "right" => $right
            ];
        }

        return $result;
    }

    public function visitLogicalOrExpr($ctx)
    {
        return $this->buildLeftAssociativeBinary($ctx);
    }

    public function visitLogicalAndExpr($ctx)
    {
        return $this->buildLeftAssociativeBinary($ctx);
    }

    public function visitEqualityExpr($ctx)
    {
        return $this->buildLeftAssociativeBinary($ctx);
    }

    public function visitRelationalExpr($ctx)
    {
        return $this->buildLeftAssociativeBinary($ctx);
    }

    public function visitAdditiveExpr($ctx)
    {
        return $this->buildLeftAssociativeBinary($ctx);
    }

    public function visitMultiplicativeExpr($ctx)
    {
        return $this->buildLeftAssociativeBinary($ctx);
    }

    public function visitUnaryExpr($ctx)
    {
        if ($ctx->getChildCount() == 2) {

            return [
                "type" => "UNARY",
                "op" => $ctx->getChild(0)->getText(),
                "expr" => $this->visit($ctx->getChild(1))
            ];
        }

        return $this->visitChildren($ctx);
    }

    public function visitPrimaryExpr($ctx)
    {
        // =====================================
        // FUNCTION CALL
        // =====================================

        if ($ctx->functionCall()) {

            return $this->visit(
                $ctx->functionCall()
            );
        }

        // =====================================
        // ARRAY ACCESS
        // =====================================

        if ($ctx->arrayAccess()) {

            return $this->visit(
                $ctx->arrayAccess()
            );
        }

        // =====================================
        // PARENTHESIZED EXPR
        // =====================================

        if ($ctx->expr()) {

            return $this->visit(
                $ctx->expr()
            );
        }

        // =====================================
        // LITERAL
        // =====================================

        if ($ctx->literal()) {

            return $this->visit(
                $ctx->literal()
            );
        }

        // =====================================
        // VARIABLE
        // =====================================

        if ($ctx->ID()) {

            $name = $ctx->ID()->getText();

            $symbol = $this->symbolTable->lookup($name);

            if (!$symbol) {

                $this->semanticError(
                    $ctx,
                    "Variable no definida: $name"
                );

                return [
                    "type" => "ERROR"
                ];
            }

            return [

                "type" => "VAR",

                "name" => $name,

                "offset" => $symbol["offset"] ?? 0,

                "varType" => $symbol["type"] ?? "int32"
            ];
        }

        // =====================================
        // FALLBACK
        // =====================================

        return $this->visitChildren($ctx);
    }
    private function buildBinaryExpr($ctx)
    {
        return [
            "type" => "BINARY",
            "op" => $ctx->getChild(1)->getText(),
            "left" => $this->visit($ctx->expr(0)),
            "right" => $this->visit($ctx->expr(1))
        ];
    }

    // public function visitMulDiv($ctx)
    // {
    //     return $this->buildBinaryExpr($ctx);
    // }

    // public function visitAddSub($ctx)
    // {
    //     return $this->buildBinaryExpr($ctx);
    // }

    public function visitLogicalNot($ctx)
    {
        return [
            "type" => "UNARY",
            "op" => "!",
            "expr" => $this->visit($ctx->expr())
        ];
    }

    public function visitParens($ctx)
    {
        return $this->visit($ctx->expr());
    }

    public function visitLiteral($ctx)
    {
        // =====================================
        // ARRAY LITERAL
        // =====================================

        if ($ctx->arrayLiteral()) {

            return $this->visit(
                $ctx->arrayLiteral()
            );
        }

        // =====================================
        // NORMAL CONST
        // =====================================

        return [

            "type" => "CONST",

            "value" => $ctx->getText()
        ];
    }

    public function visitPrimitiveType($ctx)
    {
        return [
            "kind" => "primitive",
            "name" => $ctx->getText()
        ];
    }

    private function buildParameter($ctx)
    {
        return [
            "name" => $ctx->ID()->getText(),
            "type" => $this->visit($ctx->type())
        ];
    }

    public function getSymbolTable(): array
    {
        return $this->symbolTable->getAllSymbols();
    }

    public function getErrors(): array
    {
        return $this->errorManager->getErrors();
    }

    private function semanticError($ctx, string $message): void
    {
        $this->errorManager->add(
            "Semántico",
            $message,
            $ctx->start->getLine(),
            $ctx->start->getCharPositionInLine()
        );
    }
}

