<?php

class IRVisitor extends GolampiBaseVisitor {

    public function visitProgram($ctx) {
        $functions = [];

        foreach ($ctx->functionDecl() as $fn) {
            $functions[] = $this->visit($fn);
        }

        return $functions;
    }

    public function visitFunctionDecl($ctx) {
        return [
            "type" => "FUNCTION",
            "name" => "main",
            "body" => $this->visit($ctx->block())
        ];
    }

    public function visitBlock($ctx) {
        $instructions = [];

        foreach ($ctx->statement() as $stmt) {
            $instructions[] = $this->visit($stmt);
        }

        return $instructions;
    }

    public function visitPrintStmt($ctx) {
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

    public function visitExpr($ctx) {
        return $this->visit($ctx->literal());
    }

    public function visitLiteral($ctx) {
        return [
            "type" => "CONST",
            "value" => $ctx->getText()
        ];
    }
}