<?php

use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;
use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;

class AntlrErrorListener extends BaseErrorListener {

    public $errors = [];

    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $exception
    ): void {
        $this->errors[] = [
            "line" => $line,
            "column" => $charPositionInLine,
            "message" => $msg
        ];
    }
}