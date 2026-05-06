<?php

class IRVisitor extends GolampiBaseVisitor
{

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
            $instructions[] = $this->visit($stmt);
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

    public function visitExpr($ctx)
    {
        return $this->visit($ctx->literal());
    }

    public function visitMulDiv($ctx)
    {
        return [
            "type" => "BINARY",
            "op" => $ctx->getChild(1)->getText(),
            "left" => $this->visit($ctx->expr(0)),
            "right" => $this->visit($ctx->expr(1))
        ];
    }

    public function visitAddSub($ctx)
    {
        return [
            "type" => "BINARY",
            "op" => $ctx->getChild(1)->getText(),
            "left" => $this->visit($ctx->expr(0)),
            "right" => $this->visit($ctx->expr(1))
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