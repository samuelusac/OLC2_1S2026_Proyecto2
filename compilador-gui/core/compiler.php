<?php

require_once 'AntlrRunner.php';

class Compiler {

    public function prepare($code) {

        if (trim($code) === '') {
            return [
                'message' => 'No hay código para procesar',
                'errors' => ['Código vacío']
            ];
        }

        // Aquí aún NO compilamos
        $antlr = new AntlrRunner();

        $response = $antlr->run($code);

        return $response;
    }
}