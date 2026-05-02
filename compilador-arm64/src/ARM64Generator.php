<?php

class ARM64Generator
{
    private $code = [];
    private $data = [];

    private $offsets = [];
    private $nextOffset = 0;

    private $labelCounter = 0;
    private $loopStack = [];

    private $indentLevel = 0;

    // =========================
    // EMIT
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

    private function comment($text)
    {
        $indent = str_repeat("    ", $this->indentLevel);
        $this->code[] = $indent . "// " . $text;
    }

    private function indent() { $this->indentLevel++; }
    private function dedent() { $this->indentLevel = max(0, $this->indentLevel - 1); }

    // =========================
    // MEMORY
    // =========================
    private function getOffset($var)
    {
        if (!isset($this->offsets[$var])) {
            $this->offsets[$var] = $this->nextOffset;
            $this->nextOffset += 8;
        }
        return $this->offsets[$var];
    }

    // =========================
    // STRING TABLE
    // =========================
    private function addString($value)
    {
        $label = "msg_" . count($this->data);
        $escaped = addslashes(str_replace("\n", "\\n", $value));

        $this->data[] = "$label: .asciz \"$escaped\"";
        return $label;
    }

    // =========================
    // MAIN GENERATOR
    // =========================
    public function generate($irList)
    {
        // HEADER
        $this->emit(".global _start");
        $this->emit(".text");
        $this->emit("_start:");
        $this->indent();

        $this->emit("sub sp, sp, #1024");
        $this->emit("mov x19, sp");

        $this->comment("=== PROGRAM START ===");

        foreach ($irList as $instr) {

            switch (get_class($instr)) {

                // ================= ASSIGN CONST =================
                case AssignConst::class:
                    $this->comment("{$instr->target} = {$instr->value}");

                    $o = $this->getOffset($instr->target);
                    $this->emit("mov x0, #{$instr->value}");
                    $this->emit("str x0, [x19, #$o]");
                    break;

                // ================= ADD =================
                case Add::class:
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

                // ================= PRINT INT =================
                case PrintInt::class:
                    $this->comment("print int {$instr->value}");

                    $offset = $this->getOffset($instr->value);
                    $id = $this->labelCounter++;

                    $loop = "conv_$id";
                    $print = "print_$id";
                    $zero = "zero_$id";

                    $this->emit("ldr x0, [x19, #$offset]");
                    $this->emit("adr x1, int_buffer_end");

                    $this->emit("cmp x0, #0");
                    $this->emit("b.ne $loop");

                    $this->emit("$zero:");
                    $this->emit("mov x3, #48");
                    $this->emit("strb w3, [x1, #-1]!");
                    $this->emit("b $print");

                    $this->emit("$loop:");
                    $this->emit("mov x2, #10");
                    $this->emit("udiv x4, x0, x2");
                    $this->emit("msub x5, x4, x2, x0");
                    $this->emit("add x5, x5, #48");
                    $this->emit("strb w5, [x1, #-1]!");
                    $this->emit("mov x0, x4");
                    $this->emit("cbnz x0, $loop");

                    $this->emit("$print:");
                    $this->emit("mov x0, #1");
                    $this->emit("mov x8, #64");
                    $this->emit("svc #0");

                    // newline
                    $this->emit("mov x0, #1");
                    $this->emit("adr x1, newline");
                    $this->emit("mov x2, #1");
                    $this->emit("mov x8, #64");
                    $this->emit("svc #0");
                    break;

                // ================= LABEL =================
                case Label::class:
                    $this->emit($instr->name . ":");
                    break;

                // ================= GOTO =================
                case GotoInstr::class:
                    $this->emit("b {$instr->label}");
                    break;

                // ================= IF =================
                case IfGoto::class:
                    $this->comment("if {$instr->left} {$instr->op} {$instr->right}");

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

                // ================= BREAK =================
                case BreakInstr::class:
                    $loop = end($this->loopStack);
                    $this->comment("break");
                    $this->emit("b " . $loop["end"]);
                    break;

                // ================= CONTINUE =================
                case ContinueInstr::class:
                    $loop = end($this->loopStack);
                    $this->comment("continue");
                    $this->emit("b " . $loop["start"]);
                    break;

                default:
                    throw new Exception("IR no soportado: " . get_class($instr));
            }
        }

        // EXIT
        $this->emit("mov x0, #0");
        $this->emit("mov x8, #93");
        $this->emit("svc #0");

        return $this->build();
    }

    // =========================
    // OUTPUT
    // =========================
    private function build()
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
        };
    }
}