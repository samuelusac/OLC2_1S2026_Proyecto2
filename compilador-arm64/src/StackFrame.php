<?php

class StackFrame
{
    private int $nextOffset = 0;

    private array $locals = [];

    // =====================================
    // TYPE SIZE
    // =====================================

    private function getTypeSize($type): int
    {
        // =====================================
        // PRIMITIVE TYPES
        // =====================================

        if (is_string($type)) {

            switch ($type) {

                case 'int32':
                    return 4;

                case 'float32':
                    return 4;

                case 'bool':
                    return 1;

                case 'rune':
                    return 4;

                case 'string':
                    return 8;

                default:
                    return 8;
            }
        }

        // =====================================
        // ARRAY
        // =====================================

        if (
            is_array($type)
            && ($type['kind'] ?? '') === 'array'
        ) {

            $dimensions = $type['dimensions'] ?? [];

            $baseType = $type['baseType'] ?? 'int32';

            // total elements
            $count = 1;

            foreach ($dimensions as $dim) {
                $count *= $dim;
            }

            // size of each element
            $elementSize = $this->getTypeSize(
                $baseType
            );

            return $count * $elementSize;
        }

        // =====================================
        // DEFAULT
        // =====================================

        return 8;
    }

    // =====================================
    // ALIGNMENT
    // =====================================

    private function align(
        int $value,
        int $alignment
    ): int {

        return intdiv(
            $value + $alignment - 1,
            $alignment
        ) * $alignment;
    }

    // =====================================
    // ALLOCATE
    // =====================================

    public function allocate(
        string $name,
        $type = 'int32'
    ): int {

        $size = $this->getTypeSize($type);

        // align to 8 bytes
        $size = $this->align($size, 8);

        $this->nextOffset += $size;

        $offset = -$this->nextOffset;

        $this->locals[$name] = [
            'offset' => $offset,
            'size' => $size,
            'type' => $type
        ];

        return $offset;
    }

    // =====================================
    // GET OFFSET
    // =====================================

    public function getOffset(string $name): ?int
    {
        return $this->locals[$name]['offset'] ?? null;
    }

    // =====================================
    // GET LOCAL
    // =====================================

    public function getLocal(string $name): ?array
    {
        return $this->locals[$name] ?? null;
    }

    // =====================================
    // FRAME SIZE
    // =====================================

    public function getFrameSize(): int
    {
        return $this->align(
            $this->nextOffset,
            16
        );
    }

    // =====================================
    // LOCALS
    // =====================================

    public function getLocals(): array
    {
        return $this->locals;
    }
}