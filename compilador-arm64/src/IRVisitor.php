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

            if (is_array($result) && isset($result[0])) {
                $instructions = array_merge($instructions, $result);
            } else {
                $instructions[] = $result;
            }
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

            // $this->errorManager->add(
            //     "Semántico",
            //     "Arreglo no definido: $name"
            // );
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
            $indices[] = $this->visit($exprCtx);
        }

        return [
            "type" => "ARRAY_ACCESS",
            "array" => $name,
            "indices" => $indices,
            "offset" => $symbol['offset'] ?? null
        ];
    }

    public function visitArrayAssignment($ctx)
    {
        $indices = [];

        $exprs = $ctx->expr();

        for ($i = 0; $i < count($exprs) - 1; $i++) {
            $indices[] = $this->visit($exprs[$i]);
        }

        $value = $this->visit($exprs[count($exprs) - 1]);

        return [
            "op" => "ARRAY_ASSIGN",
            "array" => $ctx->ID()->getText(),
            "indices" => $indices,
            "value" => $value
        ];
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
            "op" => "CALL",
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

            $offset = $this->currentFrame->allocate($name);

            try {

                $this->symbolTable->declare($name, [
                    "type" => $type,
                    "kind" => "local",
                    "offset" => $offset
                ]);

            } catch (Exception $e) {

                $this->semanticError($ctx, $e->getMessage());
            }

            // $this->symbolTable->declare($name, [
            //     "type" => $type,
            //     "kind" => "local",
            //     "offset" => $offset
            // ]);

            $instructions[] = [
                "op" => "DECLARE",
                "name" => $name,
                "varType" => $type,
                "value" => $value
            ];
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

            $offset = $this->currentFrame->allocate($name);

            try {

                $this->symbolTable->declare($name, [
                    "type" => "infer",
                    "kind" => "local",
                    "offset" => $offset
                ]);

            } catch (Exception $e) {

                $this->semanticError($ctx, $e->getMessage());
            }

            // $this->symbolTable->declare($name, [
            //     "type" => "infer",
            //     "kind" => "local",
            //     "offset" => $offset
            // ]);

            $instructions[] = [
                "op" => "DECLARE",
                "name" => $name,
                "varType" => "infer",
                "value" => $value
            ];
        }

        return $instructions;
    }

    public function visitConstDecl($ctx)
    {
        $name = $ctx->ID()->getText();

        $type = $this->visit($ctx->type());

        $value = $this->visit($ctx->expr());

        $offset = $this->currentFrame->allocate($name);

        // $this->symbolTable->declare($name, [
        //     "type" => $type,
        //     "kind" => "const",
        //     "offset" => $offset
        // ]);

        try {

            $this->symbolTable->declare($name, [
                "type" => $type,
                "kind" => "const",
                "offset" => $offset
            ]);

        } catch (Exception $e) {

            $this->semanticError($ctx, $e->getMessage());
        }

        return [
            "op" => "CONST_DECL",
            "name" => $name,
            "constType" => $type,
            "value" => $value
        ];
    }

    public function visitAssignment($ctx)
    {
        $name = $ctx->ID()->getText();

        $op = $ctx->assignOp()->getText();

        $value = $this->visit($ctx->expr());

        // asignación simple
        if ($op === '=') {

            return [
                "op" => "ASSIGN",
                "name" => $name,
                "value" => $value
            ];
        }

        // convertir += a +
        $binaryOp = substr($op, 0, 1);

        return [
            "op" => "ASSIGN",
            "name" => $name,
            "value" => [
                "type" => "BINARY",
                "op" => $binaryOp,

                "left" => [
                    "type" => "VAR",
                    "name" => $name
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

        $op = $ctx->getChild(1)->getText();

        $binaryOp = $op === '++' ? '+' : '-';

        return [
            "op" => "ASSIGN",
            "name" => $name,
            "value" => [
                "type" => "BINARY",
                "op" => $binaryOp,
                "left" => [
                    "type" => "VAR",
                    "name" => $name
                ],
                "right" => [
                    "type" => "CONST",
                    "value" => "1"
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

    public function visitRelational($ctx)
    {
        return $this->buildBinaryExpr($ctx);
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

    public function visitMulDiv($ctx)
    {
        return $this->buildBinaryExpr($ctx);
    }

    public function visitAddSub($ctx)
    {
        return $this->buildBinaryExpr($ctx);
    }

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

