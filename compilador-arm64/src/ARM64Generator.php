<?php

class ARM64Generator
{
    private array $lines = [];

    private array $strings = [];

    private int $stringCounter = 0;
    private int $tempOffset = 200;
    private int $labelCounter = 0;

    public function generate(array $program): string
    {
        $this->lines = [];
        $this->strings = [];

        // =====================================
        // TEXT SECTION
        // =====================================

        $this->emit(".section .text");
        $this->emit("");

        // =====================================
        // FUNCTIONS
        // =====================================

        foreach ($program['functions'] as $function) {

            $this->generateFunction(
                $function
            );
        }

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

            // remover comillas externas

            if (
                str_starts_with($value, '"')
                && str_ends_with($value, '"')
            ) {
                $value = substr($value, 1, -1);
            }

            $escaped = addslashes($value);

            $this->emit("$label:");

            $this->emit(
                "    .asciz \"$escaped\""
            );
        }

        return implode("\n", $this->lines) . "\n";
    }

    private function generateFunction(
        array $function
    ): void {

        $name = $function['name'];

        // =====================================
        // SYMBOL
        // =====================================

        $this->emit(".global $name");

        // =====================================
        // LABEL
        // =====================================

        $this->emit("$name:");

        // =====================================
        // PROLOGUE
        // =====================================

        $this->comment("prologue");

        $this->emit(
            "    stp x29, x30, [sp, -16]!"
        );

        $this->emit(
            "    mov x29, sp"
        );

        $this->comment(
            "reservar stack frame"
        );

        $this->emit(
            "    sub sp, sp, #256"
        );

        $this->emit("");

        // =====================================
        // STORE PARAMETERS
        // =====================================

        foreach ($function['params'] as $index => $param) {

            $offset = ($index + 1) * 8;

            $register = "w$index";

            $this->comment(
                "store parameter " . $param['name']
            );

            $this->emit(
                "    str $register, [x29, #-$offset]"
            );
        }

        if (!empty($function['params'])) {

            $this->emit("");
        }

        // =====================================
        // BODY
        // =====================================
        // reset temp allocator

        $this->tempOffset = 200;

        foreach ($function['body'] as $instruction) {

            $this->generateInstruction(
                $instruction
            );
        }

        // =====================================
        // DEFAULT RETURN 0
        // =====================================

        $this->comment("default return 0");

        $this->emit(
            "    mov w0, #0"
        );

        // =====================================
        // EPILOGUE
        // =====================================

        $this->generateEpilogue();
    }

    private function generateEpilogue(): void
    {
        $this->comment(
            "liberar stack frame"
        );

        $this->emit(
            "    add sp, sp, #256"
        );

        $this->comment("epilogue");

        $this->emit(
            "    ldp x29, x30, [sp], 16"
        );

        $this->emit(
            "    ret"
        );

        $this->emit("");
    }

    private function allocTemp(): int
    {
        $offset = $this->tempOffset;

        $this->tempOffset += 8;

        return $offset;
    }

    private function newLabel(string $prefix = "L"): string
    {
        return $prefix . $this->labelCounter++;
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

            case 'LABEL':
                $this->generateLabel($instruction);
                break;

            case 'GOTO':
                $this->generateGoto($instruction);
                break;

            case 'IF_GOTO':
                $this->generateIfGoto($instruction);
                break;
            case 'FUNCTION':
                $this->generateFunction($instruction);
                break;

            case 'RETURN':
                $this->generateReturn($instruction);
                break;

            case 'ARRAY_ASSIGN':
                $this->generateArrayAssign($instruction);
                break;

            // case 'CALL':
            //     $this->generateCall($instruction);
            //     break;
        }
    }

    private function generateExpr(array $expr): void
    {
        // =====================================
        // CONST
        // =====================================

        if ($expr['type'] === 'CONST') {

            $value = $expr['value'];

            // =====================================
            // BOOLEANS
            // =====================================

            if ($value === 'true') {

                $this->comment("const true");

                $this->emit(
                    "    mov w0, #1"
                );

                return;
            }

            if ($value === 'false') {

                $this->comment("const false");

                $this->emit(
                    "    mov w0, #0"
                );

                return;
            }

            // =====================================
            // NIL
            // =====================================

            if ($value === 'nil') {

                $this->comment("const nil");

                $this->emit(
                    "    mov w0, #0"
                );

                return;
            }

            // =====================================
            // INTEGER
            // =====================================

            if (is_numeric($value)) {

                $this->comment("const $value");

                $this->emit(
                    "    mov w0, #$value"
                );

                return;
            }

            // =====================================
            // STRING LITERAL
            // =====================================

            if (
                str_starts_with($value, '"')
                && str_ends_with($value, '"')
            ) {

                $stringValue = substr(
                    $value,
                    1,
                    -1
                );

                $label = $this->newString(
                    $stringValue
                );

                $this->comment(
                    "const string"
                );

                $this->emit(
                    "    ldr x0, =$label"
                );

                return;
            }

            throw new Exception(
                "Unsupported CONST: $value"
            );
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
        // CALL
        // =====================================

        if ($expr['type'] === 'CALL') {

            $functionName = $expr['name'];

            $this->comment(
                "BEGIN CALL $functionName"
            );

            // =====================================
            // EVALUATE ARGUMENTS
            // =====================================

            foreach ($expr['args'] as $index => $arg) {

                $this->comment(
                    "evaluate argument $index"
                );

                // resultado queda en w0
                $this->generateExpr($arg);

                // guardar temporalmente
                $offset = 200 + ($index * 8);

                $this->emit(
                    "    str w0, [x29, #-$offset]"
                );
            }

            // =====================================
            // LOAD ARGUMENTS INTO ABI REGISTERS
            // =====================================

            foreach ($expr['args'] as $index => $arg) {

                $offset = 200 + ($index * 8);

                $this->comment(
                    "load argument $index into w$index"
                );

                $this->emit(
                    "    ldr w$index, [x29, #-$offset]"
                );
            }

            // =====================================
            // CALL
            // =====================================

            $this->comment(
                "call $functionName"
            );

            $this->emit(
                "    bl $functionName"
            );

            $this->comment(
                "END CALL $functionName"
            );

            return;
        }

        // =====================================
        // UNARY
        // =====================================

        if ($expr['type'] === 'UNARY') {

            $op = $expr['op'];

            $this->comment(
                "BEGIN UNARY OPERATION ($op)"
            );

            // evaluar expresión
            $this->generateExpr(
                $expr['expr']
            );

            switch ($op) {

                // =========================
                // NEGATION
                // =========================

                case '-':

                    $this->comment(
                        "w0 = -w0"
                    );

                    $this->emit(
                        "    neg w0, w0"
                    );

                    break;

                // =========================
                // LOGICAL NOT
                // =========================

                case '!':

                    $this->comment(
                        "logical not"
                    );

                    $this->emit(
                        "    cmp w0, #0"
                    );

                    $this->emit(
                        "    cset w0, eq"
                    );

                    break;

                default:

                    throw new Exception(
                        "Unsupported unary op: $op"
                    );
            }

            $this->comment(
                "END UNARY OPERATION ($op)"
            );

            return;
        }

        // =====================================
// SHORT-CIRCUIT BOOLEAN
// =====================================

        if (
            $expr['type'] === 'BINARY'
            && in_array($expr['op'], ['&&', '||'])
        ) {

            $op = $expr['op'];

            $falseLabel = $this->newLabel("bool_false_");
            $trueLabel = $this->newLabel("bool_true_");
            $endLabel = $this->newLabel("bool_end_");

            $this->comment(
                "BEGIN SHORT-CIRCUIT ($op)"
            );

            // =====================================
            // &&
            // =====================================

            if ($op === '&&') {

                // evaluate left
                $this->generateExpr(
                    $expr['left']
                );

                $this->emit(
                    "    cmp w0, #0"
                );

                $this->emit(
                    "    b.eq $falseLabel"
                );

                // evaluate right
                $this->generateExpr(
                    $expr['right']
                );

                $this->emit(
                    "    cmp w0, #0"
                );

                $this->emit(
                    "    b.eq $falseLabel"
                );

                // true
                $this->emit(
                    "    mov w0, #1"
                );

                $this->emit(
                    "    b $endLabel"
                );

                // false
                $this->emit("$falseLabel:");

                $this->emit(
                    "    mov w0, #0"
                );

                $this->emit("$endLabel:");

                $this->comment(
                    "END SHORT-CIRCUIT ($op)"
                );

                return;
            }

            // =====================================
            // ||
            // =====================================

            if ($op === '||') {

                // evaluate left
                $this->generateExpr(
                    $expr['left']
                );

                $this->emit(
                    "    cmp w0, #0"
                );

                $this->emit(
                    "    b.ne $trueLabel"
                );

                // evaluate right
                $this->generateExpr(
                    $expr['right']
                );

                $this->emit(
                    "    cmp w0, #0"
                );

                $this->emit(
                    "    b.ne $trueLabel"
                );

                // false
                $this->emit(
                    "    mov w0, #0"
                );

                $this->emit(
                    "    b $endLabel"
                );

                // true
                $this->emit("$trueLabel:");

                $this->emit(
                    "    mov w0, #1"
                );

                $this->emit("$endLabel:");

                $this->comment(
                    "END SHORT-CIRCUIT ($op)"
                );

                return;
            }
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

            // =====================================
            // STORE TEMP
            // =====================================

            $temp = $this->allocTemp();

            $this->comment(
                "store left operand temp"
            );

            $this->emit(
                "    str w0, [x29, #-$temp]"
            );

            // =========================
            // RIGHT OPERAND
            // =========================

            $this->comment("evaluate right operand");

            $this->generateExpr($expr['right']);

            // =====================================
            // LOAD TEMP
            // =====================================

            $this->comment(
                "load left operand temp"
            );

            $this->emit(
                "    ldr w1, [x29, #-$temp]"
            );

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

                    $this->comment(
                        "w0 = w1 - (w2 * w0)"
                    );

                    $this->emit(
                        "    msub w0, w2, w0, w1"
                    );

                    break;

                case '==':

                    $this->comment("compare w1 == w0");

                    $this->emit(
                        "    cmp w1, w0"
                    );

                    $this->emit(
                        "    cset w0, eq"
                    );

                    break;

                case '!=':

                    $this->comment("compare w1 != w0");

                    $this->emit(
                        "    cmp w1, w0"
                    );

                    $this->emit(
                        "    cset w0, ne"
                    );

                    break;

                case '<':

                    $this->comment("compare w1 < w0");

                    $this->emit(
                        "    cmp w1, w0"
                    );

                    $this->emit(
                        "    cset w0, lt"
                    );

                    break;

                case '<=':

                    $this->comment("compare w1 <= w0");

                    $this->emit(
                        "    cmp w1, w0"
                    );

                    $this->emit(
                        "    cset w0, le"
                    );

                    break;

                case '>':

                    $this->comment("compare w1 > w0");

                    $this->emit(
                        "    cmp w1, w0"
                    );

                    $this->emit(
                        "    cset w0, gt"
                    );

                    break;

                case '>=':

                    $this->comment("compare w1 >= w0");

                    $this->emit(
                        "    cmp w1, w0"
                    );

                    $this->emit(
                        "    cset w0, ge"
                    );

                    break;
            }

            $this->comment(
                "END BINARY OPERATION ($op)"
            );

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
        // DEFAULT INITIALIZATION
        // =====================================

        if ($value === null) {

            $type = $instruction['varType']['name'] ?? 'int32';

            switch ($type) {

                case 'bool':
                    $value = [
                        'type' => 'CONST',
                        'value' => 0
                    ];
                    break;

                case 'string':
                    $value = [
                        'type' => 'CONST',
                        'value' => 0
                    ];
                    break;

                default:
                    $value = [
                        'type' => 'CONST',
                        'value' => 0
                    ];
                    break;
            }
        }

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
        $this->comment("fmt.Println");

        foreach ($instruction['args'] as $arg) {

            // =====================================
            // STRING
            // =====================================

            if (
                $arg['type'] === 'CONST'
                && !is_numeric($arg['value'])
            ) {

                $label = $this->newString(
                    $arg['value']
                );

                $this->emit(
                    "    ldr x0, =$label"
                );

                $this->emit(
                    "    bl puts"
                );

                $this->emit("");

                continue;
            }

            // =====================================
            // INT / VAR / EXPR
            // =====================================

            $this->generateExpr($arg);

            $this->emit(
                "    mov w1, w0"
            );

            $this->emit(
                "    ldr x0, =fmt_int"
            );

            $this->emit(
                "    bl printf"
            );

            $this->emit("");
        }
    }

    private function generateLabel(array $instruction): void
    {
        $this->emit("");

        $this->emit($instruction['name'] . ":");
    }

    private function generateGoto(array $instruction): void
    {
        $this->comment(
            "goto " . $instruction['label']
        );

        $this->emit(
            "    b " . $instruction['label']
        );

        $this->emit("");
    }

    private function generateIfGoto(array $instruction): void
    {
        $label = $instruction['label'];

        $this->comment(
            "if condition goto $label"
        );

        $this->generateConditionBranch(
            $instruction['condition'],
            $label
        );

        $this->emit("");
    }



    private function generateReturn(array $instruction): void
    {
        $this->comment("return");

        // evaluar expresión
        $this->generateExpr(
            $instruction['value']
        );

        // resultado ya quedó en w0

        // epilogue

        $this->emit("    add sp, sp, #256");

        $this->emit("    ldp x29, x30, [sp], 16");

        $this->emit("    ret");

        $this->emit("");
    }

    private function generateArrayAssign(
        array $instruction
    ): void {

        $this->comment(
            "ARRAY ASSIGN {$instruction['name']}"
        );

        $baseOffset = abs(
            $instruction['offset']
        );

        // =====================================
        // INDEX
        // =====================================

        $this->generateExpr(
            $instruction['index']
        );

        // w0 = index

        // multiply index by 4
        $this->emit(
            "    lsl w0, w0, #2"
        );

        // preserve index offset
        $this->emit(
            "    mov x1, x0"
        );

        // =====================================
        // VALUE
        // =====================================

        $this->generateExpr(
            $instruction['value']
        );

        // w0 = value

        // =====================================
        // ADDRESS
        // =====================================

        $this->emit(
            "    sub x2, x29, #$baseOffset"
        );

        $this->emit(
            "    add x2, x2, x1"
        );

        // =====================================
        // STORE
        // =====================================

        $this->emit(
            "    str w0, [x2]"
        );
    }

    private function generateConditionBranch(
        array $condition,
        string $label
    ): void {

        // =====================================
        // SPECIAL CASE:
        // COMPARISON BINARY
        // =====================================

        if (
            $condition['type'] === 'BINARY'
            && in_array(
                $condition['op'],
                ['==', '!=', '<', '<=', '>', '>=']
            )
        ) {

            $op = $condition['op'];

            // evaluate left
            $this->generateExpr(
                $condition['left']
            );

            $temp = $this->allocTemp();

            $this->emit(
                "    str w0, [x29, #-$temp]"
            );

            // evaluate right
            $this->generateExpr(
                $condition['right']
            );

            $this->emit(
                "    ldr w1, [x29, #-$temp]"
            );

            $this->emit(
                "    cmp w1, w0"
            );

            switch ($op) {

                case '==':
                    $branch = "b.eq";
                    break;

                case '!=':
                    $branch = "b.ne";
                    break;

                case '<':
                    $branch = "b.lt";
                    break;

                case '<=':
                    $branch = "b.le";
                    break;

                case '>':
                    $branch = "b.gt";
                    break;

                case '>=':
                    $branch = "b.ge";
                    break;

                default:
                    throw new Exception(
                        "Invalid comparison operator"
                    );
            }

            $this->emit(
                "    $branch $label"
            );

            return;
        }

        // =====================================
        // GENERIC TRUTHY CONDITION
        // =====================================

        $this->generateExpr($condition);

        $this->emit(
            "    cmp w0, #0"
        );

        $this->emit(
            "    b.ne $label"
        );
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