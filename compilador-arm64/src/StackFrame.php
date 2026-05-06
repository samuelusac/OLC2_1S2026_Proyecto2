<?php

class StackFrame
{
    private int $nextOffset = 0;

    private array $locals = [];

    public function allocate(string $name): int
    {
        $this->nextOffset += 8;

        $offset = -$this->nextOffset;

        $this->locals[$name] = $offset;

        return $offset;
    }

    public function getOffset(string $name): ?int
    {
        return $this->locals[$name] ?? null;
    }

    public function getFrameSize(): int
    {
        return $this->nextOffset;
    }

    public function getLocals(): array
    {
        return $this->locals;
    }
}