<?php

class ARM64Generator
{
    private array $lines = [];

    private array $strings = [];

    private int $stringCounter = 0;
    private int $tempOffset = 2048;
    private int $labelCounter = 0;

    // private function allocateTemp(): int
    // {
    //     $temp = $this->tempOffset;

    //     $this->tempOffset += 8;

    //     return $temp;
    // }

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

        // =====================================
        // PRINT FORMATS
        // =====================================

        $this->emit("empty_str:");
        $this->emit('    .asciz ""');
        $this->emit("");

        $this->emit("fmt_int:");
        $this->emit('    .asciz "%d "');
        $this->emit("");

        $this->emit("fmt_string:");
        $this->emit('    .asciz "%s "');
        $this->emit("");

        $this->emit("fmt_bool:");
        $this->emit('    .asciz "%s "');
        $this->emit("");

        $this->emit("fmt_char:");
        $this->emit('    .asciz "%c "');
        $this->emit("");

        $this->emit("newline:");
        $this->emit('    .asciz "\\n"');
        $this->emit("");

        // =====================================
        // BOOL STRINGS
        // =====================================

        $this->emit("true_str:");
        $this->emit('    .asciz "true"');
        $this->emit("");

        $this->emit("false_str:");
        $this->emit('    .asciz "false"');
        $this->emit("");

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
        $this->tempOffset = 200;
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
            "    sub sp, sp, #16384"
        );

        $this->emit("");

        // =====================================
        // STORE PARAMETERS
        // =====================================

        foreach ($function['params'] as $index => $param) {

            $offset = ($index + 1) * 8;

            $this->comment(
                "store parameter " . $param['name']
            );

            // =====================================
            // ARRAY PARAMETER = POINTER
            // =====================================

            if (
                is_array($param['type'])
                && (($param['type']['kind'] ?? '') === 'array')
            ) {

                $register = "x$index";

                $this->emit(
                    "    str $register, [x29, #-$offset]"
                );

            } else {

                $register = "w$index";

                $this->emit(
                    "    str $register, [x29, #-$offset]"
                );
            }
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
            "    add sp, sp, #16384"
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
        // EMPTY STRING
        // =====================================

        if ($expr['type'] === 'EMPTY_STRING') {

            $this->emit(
                "    ldr x0, =empty_str"
            );

            return;
        }
        // =====================================
        // RUNE
        // =====================================

        if (
            is_string($expr['value'])
            && preg_match(
                "/^'.'$/",
                $expr['value']
            )
        ) {

            // extract char
            $char = substr(
                $expr['value'],
                1,
                1
            );

            $ascii = ord($char);

            $this->comment(
                "rune '$char'"
            );

            $this->emit(
                "    mov w0, #$ascii"
            );

            return;
        }

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
            // FLOAT CONST (fake support)
            // =====================================

            if (
                is_string($expr['value'])
                && preg_match(
                    '/^[0-9]+\.[0-9]+$/',
                    $expr['value']
                )
            ) {

                $label = $this->newString(
                    $expr['value']
                );

                $this->emit(
                    "    ldr x0, =$label"
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
        // ARRAY ACCESS
        // =====================================

        if ($expr['type'] === 'ARRAY_ACCESS') {

            $arrayName = $expr['array'];

            $baseOffset = abs(
                $expr['offset']
            );

            $dimensions =
                $expr['dimensions']
                ?? [];

            $indices =
                $expr['indices']
                ?? [];

            $this->comment(
                "ARRAY ACCESS $arrayName"
            );

            // =====================================
            // LINEARIZED INDEX
            // =====================================

            // first index
            $this->generateExpr(
                $indices[0]
            );

            // result in w0

            // multidimensional
            if (count($indices) > 1) {

                for (
                    $i = 1;
                    $i < count($indices);
                    $i++
                ) {

                    // stride
                    $stride = 1;

                    for (
                        $j = $i;
                        $j < count($dimensions);
                        $j++
                    ) {

                        $stride *=
                            $dimensions[$j];
                    }

                    // w0 *= stride
                    $this->emit(
                        "    mov w1, #$stride"
                    );

                    $this->emit(
                        "    mul w0, w0, w1"
                    );

                    // evaluate next index
                    $this->generateExpr(
                        $indices[$i]
                    );

                    // preserve next index
                    $this->emit(
                        "    mov w2, w0"
                    );

                    // restore previous linear part
                    // (temporary stack spill)

                    $temp = $this->allocTemp();

                    $this->emitStoreW(
                        "w2",
                        $temp
                    );

                    // recompute previous
                    $this->generateExpr(
                        $indices[0]
                    );

                    $this->emit(
                        "    mov w1, #$stride"
                    );

                    $this->emit(
                        "    mul w0, w0, w1"
                    );

                    $this->emitLoadW(
                        "w2",
                        $temp
                    );

                    // add next dimension
                    $this->emit(
                        "    add w0, w0, w2"
                    );
                }
            }

            // =====================================
            // SCALE BY ELEMENT SIZE
            // =====================================

            $this->emit(
                "    lsl w0, w0, #2"
            );

            // preserve scaled index
            $this->emit(
                "    mov x1, x0"
            );

            // =====================================
            // BASE ADDRESS
            // =====================================

            // array parameter = pointer
            if ($expr['isParam'] ?? false) {

                if ($baseOffset <= 255) {

                    $this->emit(
                        "    ldr x2, [x29, #-$baseOffset]"
                    );

                } else {

                    $this->emit(
                        "    mov x9, #$baseOffset"
                    );

                    $this->emit(
                        "    sub x9, x29, x9"
                    );

                    $this->emit(
                        "    ldr x2, [x9]"
                    );
                }

            } else {

                // local array

                if ($baseOffset <= 255) {

                    $this->emit(
                        "    sub x2, x29, #$baseOffset"
                    );

                } else {

                    $this->emit(
                        "    mov x2, #$baseOffset"
                    );

                    $this->emit(
                        "    sub x2, x29, x2"
                    );
                }
            }

            // =====================================
            // LOAD
            // =====================================
            // =====================================
            // FINAL ADDRESS
            // =====================================

            $this->emit(
                "    add x2, x2, x1"
            );



            $this->emit(
                "    ldr w0, [x2]"
            );

            return;
        }

        // =====================================
        // VARIABLE
        // =====================================

        if ($expr['type'] === 'VAR') {

            $offset = abs($expr['offset']);

            $this->comment("load " . $expr['name']);

            $this->emitLoadW(
                "w0",
                $offset
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

                // =====================================
                // ARRAY ARGUMENT
                // =====================================

                if (
                    ($arg['type'] ?? '') === 'VAR'
                    && is_array($arg['varType'] ?? null)
                    && (($arg['varType']['kind'] ?? '') === 'array')
                ) {

                    $baseOffset = abs(
                        $arg['offset']
                    );

                    // x0 = &array

                    if ($baseOffset <= 255) {

                        $this->emit(
                            "    sub x0, x29, #$baseOffset"
                        );

                    } else {

                        $this->emit(
                            "    mov x9, #$baseOffset"
                        );

                        $this->emit(
                            "    sub x0, x29, x9"
                        );
                    }

                    // store pointer temp
                    $offset = 200 + ($index * 8);

                    $this->emitStoreX(
                        "x0",
                        $offset
                    );

                    continue;
                }

                // =====================================
                // NORMAL ARGUMENT
                // =====================================

                $this->generateExpr($arg);

                $offset = 200 + ($index * 8);

                $this->emitStoreW(
                    "w0",
                    $offset
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

                if (
                    ($arg['type'] ?? '') === 'VAR'
                    && is_array($arg['varType'] ?? null)
                    && (($arg['varType']['kind'] ?? '') === 'array')
                ) {

                    $this->emitLoadX(
                        "x$index",
                        $offset
                    );

                } else {

                    $this->emitLoadW(
                        "w$index",
                        $offset
                    );
                }
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

            $this->emitStoreW(
                "w0",
                $temp
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

            $this->emitLoadW(
                "w1",
                $temp
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
                        'type' => 'EMPTY_STRING'
                    ];

                    break;

                case 'float32':

                    $value = [
                        'type' => 'CONST',
                        'value' => "0.0"
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

        $type = $instruction['varType'] ?? null;

        // primitive object
        if (
            is_array($type)
            && ($type['kind'] ?? '') === 'primitive'
        ) {

            $type = $type['name'];
        }

        // =====================================
        // STRING POINTER
        // =====================================

        if (
            $type === 'string'
            || $type === 'float32'
        ) {

            $this->emitStoreX(
                "x0",
                $offset
            );

        } else {

            $this->emitStoreW(
                "w0",
                $offset
            );
        }

        $this->emit("");

        $this->emit("");
    }

    private function generatePrint(array $instruction): void
    {
        $this->comment("fmt.Println");

        foreach ($instruction['args'] as $arg) {
            // =====================================
            // RUNE CONSTANT
            // =====================================

            if (
                $arg['type'] === 'CONST'
                && is_string($arg['value'])
                && strlen($arg['value']) === 1
            ) {

                $ascii = ord($arg['value']);

                $this->emit(
                    "    mov w1, #$ascii"
                );

                $this->emit(
                    "    ldr x0, =fmt_char"
                );

                $this->emit(
                    "    bl printf"
                );

                continue;
            }

            // =====================================
            // STRING CONSTANT
            // =====================================

            if (
                $arg['type'] === 'CONST'
                && is_string($arg['value'])
                && !$this->isBoolLiteral($arg['value'])
                && strlen($arg['value']) > 1
            ) {

                $label = $this->newString(
                    $arg['value']
                );

                $this->emit(
                    "    ldr x1, =$label"
                );

                $this->emit(
                    "    ldr x0, =fmt_string"
                );

                $this->emit(
                    "    bl printf"
                );

                continue;
            }

            // =====================================
            // BOOL CONSTANT
            // =====================================

            if (
                $arg['type'] === 'CONST'
                && $this->isBoolLiteral(
                    $arg['value']
                )
            ) {

                $boolLabel =
                    $arg['value'] === 'true'
                    ? 'true_str'
                    : 'false_str';

                $this->emit(
                    "    ldr x1, =$boolLabel"
                );

                $this->emit(
                    "    ldr x0, =fmt_bool"
                );

                $this->emit(
                    "    bl printf"
                );

                continue;
            }

            // =====================================
            // STRING VARIABLE
            // =====================================

            if (
                $arg['type'] === 'VAR'
                && is_array($arg['varType'] ?? null)
                && ($arg['varType']['name'] ?? '') === 'string'
            ) {

                // load string pointer

                $offset = abs(
                    $arg['offset']
                );

                $this->emitLoadX(
                    "x1",
                    $offset
                );

                $this->emit(
                    "    ldr x0, =fmt_string"
                );

                $this->emit(
                    "    bl printf"
                );

                continue;
            }

            // =====================================
            // BOOL VARIABLE
            // =====================================

            if (
                $arg['type'] === 'VAR'
                && is_array($arg['varType'] ?? null)
                && ($arg['varType']['name'] ?? '') === 'bool'
            ) {

                $offset = abs(
                    $arg['offset']
                );

                // load bool value
                $this->emitLoadW(
                    "w1",
                    $offset
                );

                // compare with 0
                $this->emit(
                    "    cmp w1, #0"
                );

                // true
                $this->emit(
                    "    ldr x1, =true_str"
                );

                // false if equal
                $this->emit(
                    "    ldr x2, =false_str"
                );

                $this->emit(
                    "    csel x1, x2, x1, eq"
                );

                $this->emit(
                    "    ldr x0, =fmt_bool"
                );

                $this->emit(
                    "    bl printf"
                );

                continue;
            }

            // =====================================
            // RUNE VARIABLE
            // =====================================

            if (
                $arg['type'] === 'VAR'
                && is_array($arg['varType'] ?? null)
                && ($arg['varType']['name'] ?? '') === 'rune'
            ) {

                $offset = abs(
                    $arg['offset']
                );

                $this->emit(
                    "    ldr w1, [x29, #-$offset]"
                );

                $this->emit(
                    "    ldr x0, =fmt_char"
                );

                $this->emit(
                    "    bl printf"
                );

                continue;
            }

            // =====================================
// FLOAT VARIABLE (fake support)
// =====================================

            if (
                $arg['type'] === 'VAR'
                && is_array($arg['varType'] ?? null)
                && ($arg['varType']['name'] ?? '') === 'float32'
            ) {

                $offset = abs(
                    $arg['offset']
                );

                $this->emitLoadX(
                    "x1",
                    $offset
                );

                $this->emit(
                    "    ldr x0, =fmt_string"
                );

                $this->emit(
                    "    bl printf"
                );

                continue;
            }

            // =====================================
            // NORMAL EXPR
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
        }

        // =====================================
        // NEWLINE
        // =====================================

        $this->emit(
            "    ldr x0, =newline"
        );

        $this->emit(
            "    bl printf"
        );

        $this->emit("");
    }

    private function isBoolLiteral($value): bool
    {
        return $value === 'true'
            || $value === 'false';
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

        $this->emit("    add sp, sp, #16384");

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

        $dimensions =
            $instruction['dimensions']
            ?? [];

        $indices =
            $instruction['indices']
            ?? [];

        // =====================================
        // LINEARIZED INDEX
        // =====================================

        // first index
        $this->generateExpr(
            $indices[0]
        );

        // multidimensional
        if (count($indices) > 1) {

            for (
                $i = 1;
                $i < count($indices);
                $i++
            ) {

                // stride
                $stride = 1;

                for (
                    $j = $i;
                    $j < count($dimensions);
                    $j++
                ) {

                    $stride *=
                        $dimensions[$j];
                }

                // preserve previous result
                $temp = $this->allocTemp();

                $this->emitStoreW(
                    "w0",
                    $temp
                );

                // load previous
                $this->emitLoadW(
                    "w1",
                    $temp
                );

                // multiply by stride
                $this->emit(
                    "    mov w2, #$stride"
                );

                $this->emit(
                    "    mul w1, w1, w2"
                );

                // evaluate next index
                $this->generateExpr(
                    $indices[$i]
                );

                // add
                $this->emit(
                    "    add w0, w1, w0"
                );
            }
        }

        // =====================================
        // SCALE BY ELEMENT SIZE
        // =====================================

        $this->emit(
            "    lsl w0, w0, #2"
        );

        // preserve byte offset
        $this->emit(
            "    mov x1, x0"
        );

        // =====================================
        // VALUE
        // =====================================

        $this->generateExpr(
            $instruction['value']
        );

        // preserve value
        $this->emit(
            "    mov w3, w0"
        );

        // =====================================
        // BASE ADDRESS
        // =====================================

        if ($baseOffset <= 255) {

            $this->emit(
                "    sub x2, x29, #$baseOffset"
            );

        } else {

            $this->emit(
                "    mov x2, #$baseOffset"
            );

            $this->emit(
                "    sub x2, x29, x2"
            );
        }

        $this->emit(
            "    add x2, x2, x1"
        );

        // =====================================
        // STORE
        // =====================================

        $this->emit(
            "    str w3, [x2]"
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

            $this->emitStoreW(
                "w0",
                $temp
            );

            // evaluate right
            $this->generateExpr(
                $condition['right']
            );

            $this->emitLoadW(
                "w1",
                $temp
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

    private function emitLoadW(
        string $target,
        int $offset
    ): void {

        $abs = abs($offset);

        if ($abs <= 255) {

            $this->emit(
                "    ldr $target, [x29, #-$abs]"
            );

            return;
        }

        $this->emit(
            "    mov x9, #$abs"
        );

        $this->emit(
            "    sub x9, x29, x9"
        );

        $this->emit(
            "    ldr $target, [x9]"
        );
    }

    private function emitStoreW(
        string $source,
        int $offset
    ): void {

        $abs = abs($offset);

        if ($abs <= 255) {

            $this->emit(
                "    str $source, [x29, #-$abs]"
            );

            return;
        }

        $this->emit(
            "    mov x9, #$abs"
        );

        $this->emit(
            "    sub x9, x29, x9"
        );

        $this->emit(
            "    str $source, [x9]"
        );
    }

    private function emitLoadX(
        string $target,
        int $offset
    ): void {

        $abs = abs($offset);

        if ($abs <= 255) {

            $this->emit(
                "    ldr $target, [x29, #-$abs]"
            );

            return;
        }

        $this->emit(
            "    mov x9, #$abs"
        );

        $this->emit(
            "    sub x9, x29, x9"
        );

        $this->emit(
            "    ldr $target, [x9]"
        );
    }

    private function emitStoreX(
        string $source,
        int $offset
    ): void {

        $abs = abs($offset);

        if ($abs <= 255) {

            $this->emit(
                "    str $source, [x29, #-$abs]"
            );

            return;
        }

        $this->emit(
            "    mov x9, #$abs"
        );

        $this->emit(
            "    sub x9, x29, x9"
        );

        $this->emit(
            "    str $source, [x9]"
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