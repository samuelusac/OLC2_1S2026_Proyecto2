<?php

class AntlrRunner {

    public function run($code) {

        // DEBUG REAL AQUÍ
        // var_dump($code); exit;

        // Simulación de punto ANTLR
        // Aquí luego harás:
        // - pasar texto a lexer ANTLR
        // - crear tokens
        // - parser

        return [
            'message' => "Código listo para ANTLR (" . strlen($code) . " caracteres)",
            'errors' => []
        ];
    }
}