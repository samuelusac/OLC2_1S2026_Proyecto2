<?php

class ARM64Generator
{
    private $code = [];
    private $data = [];

    private $offsets = [];
    private $nextOffset = 0;

    private $indentLevel = 0;
    private $stringCounter = 0;
    private $labelCounter = 0;

    // =========================
    // EMIT (con indent correcto)
    // =========================
    private function emit($line)
    {
        $trim = trim($line);

        if (str_ends_with($trim, ":")) {
            $this->code[] = $trim;
            return;
        }

        $indent = str_repeat("    ", $this->indentLevel);
        $this->code[] = $indent . $trim;
    }

    // =========================
    // COMMENT (alineado)
    // =========================
    private function comment($text)
    {
        $indent = str_repeat("    ", $this->indentLevel);
        $this->code[] = $indent . "// " . $text;
    }

    // =========================
    // INDENT CONTROL (IMPORTANTE)
    // =========================
    private function indent()
    {
        $this->indentLevel++;
    }

    private function dedent()
    {
        $this->indentLevel = max(0, $this->indentLevel - 1);
    }

    // =========================
    // MEMORY OFFSET
    // =========================
    private function getOffset($temp)
    {
        if (!isset($this->offsets[$temp])) {
            $this->offsets[$temp] = $this->nextOffset;
            $this->nextOffset += 8;
        }
        return $this->offsets[$temp];
    }

    // =========================
    // STRINGS
    // =========================
    private function addString($value)
    {
        $value = addslashes(str_replace("\n", "\\n", $value));
        $label = "msg_" . $this->stringCounter++;
        $this->data[] = "$label: .asciz \"$value\"";
        return $label;
    }

    // =========================
    // GENERATE
    // =========================
    public function generate($irList)
    {
        $this->emit(".global _start");
        $this->emit(".text");
        $this->emit("_start:");
        $this->indent();

        $this->emit("sub sp, sp, #1024");
        $this->emit("mov x19, sp");

        $this->comment("===== PROGRAM START =====");

        foreach ($irList as $instr) {

            switch (true) {

                // ================= PRINT STRING =================
                case $instr instanceof PrintStr:
                    $this->comment("print string");

                    $label = $this->addString($instr->value);
                    $len = strlen($instr->value);

                    $this->emit("mov x0, #1");
                    $this->emit("adr x1, $label");
                    $this->emit("mov x2, #$len");
                    $this->emit("mov x8, #64");
                    $this->emit("svc #0");
                    break;

                // ================= PRINT INT =================
                case $instr instanceof PrintInt:

                    $this->comment("print int");

                    $offset = $this->getOffset($instr->value);
                    $id = $this->labelCounter++;

                    $loop = "loop_$id";
                    $print = "print_$id";
                    $zero = "zero_$id";

                    $this->emit("ldr x0, [x19, #$offset]");
                    $this->emit("adr x1, int_buffer_end");

                    $this->emit("cmp x0, #0");
                    $this->emit("b.ne $loop");

                    $this->emit("$zero:");
                    $this->indent();
                    $this->emit("mov x3, #48");
                    $this->emit("strb w3, [x1, #-1]!");
                    $this->emit("b $print");
                    $this->dedent();

                    $this->emit("$loop:");
                    $this->indent();
                    $this->emit("mov x3, #10");
                    $this->emit("udiv x4, x0, x3");
                    $this->emit("msub x5, x4, x3, x0");
                    $this->emit("add x5, x5, #48");
                    $this->emit("strb w5, [x1, #-1]!");
                    $this->emit("mov x0, x4");
                    $this->emit("cbnz x0, $loop");
                    $this->dedent();

                    $this->emit("$print:");
                    $this->indent();
                    $this->emit("mov x0, #1");
                    $this->emit("mov x8, #64");
                    $this->emit("svc #0");

                    $this->emit("mov x0, #1");
                    $this->emit("adr x1, newline");
                    $this->emit("mov x2, #1");
                    $this->emit("mov x8, #64");
                    $this->emit("svc #0");
                    $this->dedent();

                    break;

                // ================= ASSIGN CONST =================
                case $instr instanceof AssignConst:

                    $this->comment("{$instr->target} = {$instr->value}");

                    $off = $this->getOffset($instr->target);

                    $this->emit("mov x0, #{$instr->value}");
                    $this->emit("str x0, [x19, #$off]");
                    break;

                // ================= ADD =================
                case $instr instanceof Add:

                    $this->comment("{$instr->result} = {$instr->left} + {$instr->right}");

                    $o1 = $this->getOffset($instr->left);
                    $o3 = $this->getOffset($instr->result);

                    $this->emit("ldr x0, [x19, #$o1]");

                    if (is_numeric($instr->right)) {
                        $this->emit("mov x1, #{$instr->right}");
                    } else {
                        $o2 = $this->getOffset($instr->right);
                        $this->emit("ldr x1, [x19, #$o2]");
                    }

                    $this->emit("add x2, x0, x1");
                    $this->emit("str x2, [x19, #$o3]");
                    break;

                // ================= LABEL =================
                case $instr instanceof Label:
                    $this->dedent();
                    $this->emit($instr->name . ":");
                    $this->indent();
                    break;

                // ================= GOTO =================
                case $instr instanceof GotoInstr:
                    $this->emit("b {$instr->label}");
                    break;

                // ================= IF =================
                case $instr instanceof IfGoto:

                    $this->comment("if {$instr->left} {$instr->op}");

                    $o1 = $this->getOffset($instr->left);
                    $this->emit("ldr x0, [x19, #$o1]");

                    if (is_numeric($instr->right)) {
                        $this->emit("mov x1, #{$instr->right}");
                    } else {
                        $o2 = $this->getOffset($instr->right);
                        $this->emit("ldr x1, [x19, #$o2]");
                    }

                    $this->emit("cmp x0, x1");
                    $this->emit($this->mapOp($instr->op) . " {$instr->label}");
                    break;
            }
        }

        // EXIT
        $this->dedent();
        $this->emit("mov x0, #0");
        $this->emit("mov x8, #93");
        $this->emit("svc #0");

        return $this->buildFinal();
    }

    // =========================
    // FINAL BUILD
    // =========================
    private function buildFinal()
    {
        $out = [];

        $out[] = ".data";
        $out[] = "int_buffer: .space 32";
        $out[] = "int_buffer_end:";
        $out[] = "newline: .ascii \"\\n\"";

        foreach ($this->data as $d) {
            $out[] = $d;
        }

        $out[] = ".text";

        foreach ($this->code as $c) {
            $out[] = $c;
        }

        return implode("\n", $out);
    }

    private function mapOp($op)
    {
        return match ($op) {
            "<" => "b.lt",
            ">" => "b.gt",
            "==" => "b.eq",
            "!=" => "b.ne",
            "<=" => "b.le",
            ">=" => "b.ge",
            default => throw new Exception("Operador no soportado")
        };
    }
}