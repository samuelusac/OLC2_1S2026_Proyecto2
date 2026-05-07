<?php

class ARM64Generator
{
    private array $lines = [];

    private array $strings = [];

    private int $stringCounter = 0;

    public function generate(array $ir): string
    {
        $this->lines = [];
        $this->strings = [];

        // =====================================
        // TEXT SECTION
        // =====================================

        $this->emit(".section .text");
        $this->emit(".global main");
        $this->emit("");

        // =====================================
        // MAIN
        // =====================================

        $this->emit("main:");

        // =====================================
        // PROLOGUE
        // =====================================

        $this->comment("prologue");

        $this->emit("    stp x29, x30, [sp, -16]!");
        $this->emit("    mov x29, sp");

        $this->comment("reservar stack frame");

        $this->emit("    sub sp, sp, #256");

        $this->emit("");

        // =====================================
        // BODY
        // =====================================

        foreach ($ir as $instruction) {
            $this->generateInstruction($instruction);
        }

        // =====================================
        // RETURN 0
        // =====================================

        $this->comment("return 0");

        $this->emit("    mov w0, #0");

        $this->emit("");

        // =====================================
        // EPILOGUE
        // =====================================

        $this->comment("liberar stack frame");

        $this->emit("    add sp, sp, #256");

        $this->comment("epilogue");

        $this->emit("    ldp x29, x30, [sp], 16");
        $this->emit("    ret");

        $this->emit("");

        // =====================================
        // RODATA
        // =====================================

        $this->emit(".section .rodata");

        // printf int format
        $this->emit("fmt_int:");
        $this->emit('    .asciz "%d\n"');

        $this->emit("");

        // user strings
        foreach ($this->strings as $label => $value) {

            $escaped = addslashes($value);

            $this->emit("$label:");
            $this->emit("    .asciz \"$escaped\"");
        }

        return implode("\n", $this->lines) . "\n";
    }

    private function generateInstruction(array $instruction): void
    {
        switch ($instruction['op']) {

            case 'PRINT':
                $this->generatePrint($instruction);
                break;

            case 'ASSIGN':
                $this->generateAssign($instruction);
                break;
        }
    }

    private function generateExpr(array $expr): void
    {
        // =====================================
        // CONST
        // =====================================

        if ($expr['type'] === 'CONST') {

            $value = $expr['value'];

            $this->comment("const $value");

            $this->emit("    mov w0, #$value");

            return;
        }

        // =====================================
        // VARIABLE
        // =====================================

        if ($expr['type'] === 'VAR') {

            $offset = abs($expr['offset']);

            $this->comment("load " . $expr['name']);

            $this->emit(
                "    ldr w0, [x29, #-$offset]"
            );

            return;
        }

        // =====================================
        // BINARY
        // =====================================

        if ($expr['type'] === 'BINARY') {

            $op = $expr['op'];

            $this->comment("BEGIN BINARY OPERATION ($op)");

            // =========================
            // LEFT OPERAND
            // =========================

            $this->comment("evaluate left operand");

            $this->generateExpr($expr['left']);

            $this->comment("push left operand");

            // guardar left temporal
            $this->emit("    str w0, [sp, #-16]!");


            // =========================
            // RIGHT OPERAND
            // =========================

            $this->comment("evaluate right operand");

            $this->generateExpr($expr['right']);

            // right -> w0

            $this->comment("pop left operand into w1");

            // recuperar left
            $this->emit("    ldr w1, [sp], #16");


            // =========================
            // OPERATIONS
            // =========================

            switch ($op) {

                case '+':

                    $this->comment("w0 = w1 + w0");

                    $this->emit(
                        "    add w0, w1, w0"
                    );

                    break;

                case '-':

                    $this->comment("w0 = w1 - w0");

                    $this->emit(
                        "    sub w0, w1, w0"
                    );

                    break;

                case '*':

                    $this->comment("w0 = w1 * w0");

                    $this->emit(
                        "    mul w0, w1, w0"
                    );

                    break;

                case '/':

                    $this->comment("w0 = w1 / w0");

                    $this->emit(
                        "    sdiv w0, w1, w0"
                    );

                    break;

                case '%':

                    $this->comment("w2 = w1 / w0");

                    $this->emit(
                        "    sdiv w2, w1, w0"
                    );

                    $this->comment("w0 = w1 - (w2 * w0)");

                    $this->emit(
                        "    msub w0, w2, w0, w1"
                    );

                    break;
            }

            $this->comment("END BINARY OPERATION ($op)");

            return;
        }
    }

    private function generateAssign(array $instruction): void
    {
        $offset = abs($instruction['offset']);

        $value = $instruction['value'];

        // =====================================
        // COMMENT
        // =====================================

        $this->comment(
            $instruction['name'] . " := expr"
        );

        // =====================================
        // GENERATE EXPRESSION
        // resultado queda en w0
        // =====================================

        $this->generateExpr($value);

        // =====================================
        // STORE RESULT
        // =====================================

        $this->emit(
            "    str w0, [x29, #-$offset]"
        );

        $this->emit("");
    }

    private function generatePrint(array $instruction): void
    {
        foreach ($instruction['values'] as $value) {

            // =====================================
            // PRINT STRING
            // =====================================

            if ($value['type'] === 'STRING') {

                $this->comment(
                    'fmt.Println("' . $value['value'] . '")'
                );

                $label = $this->newString($value['value']);

                $this->emit("    ldr x0, =$label");
                $this->emit("    bl puts");

                $this->emit("");

                continue;
            }

            // =====================================
            // PRINT VARIABLE
            // =====================================

            if ($value['type'] === 'VAR') {

                $offset = abs($value['offset']);

                $this->comment(
                    "fmt.Println(" . $value['name'] . ")"
                );

                // format string
                $this->emit("    ldr x0, =fmt_int");

                // cargar variable
                $this->emit(
                    "    ldr w1, [x29, #-$offset]"
                );

                // llamar printf
                $this->emit("    bl printf");

                $this->emit("");

                continue;
            }
        }
    }

    private function newString(string $value): string
    {
        $label = "msg" . $this->stringCounter++;

        $this->strings[$label] = $value;

        return $label;
    }

    private function emit(string $line): void
    {
        $this->lines[] = $line;
    }

    private function comment(string $text): void
    {
        $this->lines[] = "    // " . $text;
    }
}