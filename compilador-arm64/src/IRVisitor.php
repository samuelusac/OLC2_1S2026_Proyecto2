<?php

class IRVisitor extends GolampiBaseVisitor
{

    private int $labelCounter = 0;

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
                throw new Exception("Función duplicada: $name");
            }

            $functions[$name] = $fnData;
        }

        return [
            "functions" => $functions,
            "entry" => "main"
        ];
    }

    public function visitFunctionDecl($ctx)
    {

        $name = $ctx->ID()->getText();

        return [
            "type" => "FUNCTION",
            "name" => $name,
            "body" => $this->visit($ctx->block())
        ];
    }

    public function visitBlock($ctx)
    {
        $instructions = [];

        foreach ($ctx->statement() as $stmt) {

            $result = $this->visit($stmt);

            // Si el resultado es una lista de instrucciones
            if (is_array($result) && isset($result[0])) {

                $instructions = array_merge($instructions, $result);

            } else {

                // instrucción única
                $instructions[] = $result;
            }
        }

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

    public function visitIfStmt($ctx)
    {
        $condition = $this->visit($ctx->expr());

        $trueLabel = $this->newLabel();
        $falseLabel = $this->newLabel();
        $endLabel = $this->newLabel();

        $thenBody = $this->visit($ctx->block(0));

        $hasElse = count($ctx->block()) > 1;

        $instructions = [];

        // if condition goto true
        $instructions[] = [
            "op" => "IF_GOTO",
            "condition" => $condition,
            "label" => $trueLabel
        ];

        // goto false
        $instructions[] = [
            "op" => "GOTO",
            "label" => $falseLabel
        ];

        // TRUE LABEL
        $instructions[] = [
            "op" => "LABEL",
            "name" => $trueLabel
        ];

        $instructions = array_merge($instructions, $thenBody);

        // salir del if
        $instructions[] = [
            "op" => "GOTO",
            "label" => $endLabel
        ];

        // FALSE LABEL
        $instructions[] = [
            "op" => "LABEL",
            "name" => $falseLabel
        ];

        // else body
        if ($hasElse) {
            $elseBody = $this->visit($ctx->block(1));
            $instructions = array_merge($instructions, $elseBody);
        }

        // END LABEL
        $instructions[] = [
            "op" => "LABEL",
            "name" => $endLabel
        ];

        return $instructions;
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

    public function visitVarDecl($ctx)
    {

        $name = $ctx->ID()->getText();
        $type = $ctx->type()->getText();

        $value = null;

        if ($ctx->expr()) {
            $value = $this->visit($ctx->expr());
        }

        return [
            "op" => "DECLARE",
            "name" => $name,
            "varType" => $type,
            "value" => $value
        ];
    }

    public function visitShortVarDecl($ctx)
    {

        $name = $ctx->ID()->getText();
        $value = $this->visit($ctx->expr());

        return [
            "op" => "DECLARE",
            "name" => $name,
            "varType" => "infer",
            "value" => $value
        ];
    }

    public function visitAssignment($ctx)
    {

        $name = $ctx->ID()->getText();
        $value = $this->visit($ctx->expr());

        return [
            "op" => "ASSIGN",
            "name" => $name,
            "value" => $value
        ];
    }

    public function visitIdentifierExpr($ctx)
    {
        return [
            "type" => "VAR",
            "name" => $ctx->getText()
        ];
    }

    public function visitExpr($ctx)
    {
        return $this->visit($ctx->literal());
    }

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
}