<?php

class SymbolTable
{
    private array $allSymbols = [];
    private array $scopes = [];

    public function __construct()
    {
        $this->enterScope(); // global
    }

    public function enterScope(): void
    {
        $this->scopes[] = [];
    }

    public function exitScope(): void
    {
        array_pop($this->scopes);
    }

    public function declare(string $name, array $symbol): void
    {
        $current = count($this->scopes) - 1;

        if (isset($this->scopes[$current][$name])) {
            throw new Exception("Variable ya declarada: $name");
        }

        $this->scopes[$current][$name] = $symbol;
        $this->allSymbols[] = [
            "name" => $name,
            "scope" => $current,
            ...$symbol
        ];
    }

    public function lookup(string $name): ?array
    {
        for ($i = count($this->scopes) - 1; $i >= 0; $i--) {

            if (isset($this->scopes[$i][$name])) {
                return $this->scopes[$i][$name];
            }
        }

        return null;
    }

    public function getScopes(): array
    {
        return $this->scopes;
    }

    public function getAllSymbols(): array
    {
        return $this->allSymbols;
    }
}