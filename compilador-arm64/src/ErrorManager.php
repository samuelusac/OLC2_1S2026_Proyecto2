<?php

class ErrorManager
{
    private array $errors = [];

    public function add(
        string $type,
        string $message,
        int $line = 0,
        int $column = 0
    ): void {

        $this->errors[] = [
            "type" => $type,
            "message" => $message,
            "line" => $line,
            "column" => $column
        ];
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }
}