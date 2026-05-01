<?php

class ARM64Generator
{

    private $code = [];
    private $offsets = [];
    private $nextOffset = 0;
    private $data = [];
    private $stringCounter = 0;
    private $inFunction = false;
    private $currentFunction = null;

    private function addString($value)
    {
        // // $label = "msg_" . $this->stringCounter++;
        // // $this->data[] = "$label: .asciz \"$value\"";
        // // return $label;
        // Escapar caracteres especiales
        $escaped = addslashes($value);

        // Convertir saltos de línea reales a \n
        $escaped = str_replace("\n", "\\n", $escaped);

        $label = "msg_" . $this->stringCounter++;
        $this->data[] = "$label: .asciz \"$escaped\"";

        return $label;
    }

    private function emit($line)
    {
        $this->code[] = $line;
    }

    private function comment($text)
    {
        $this->code[] = "// " . $text;
    }

    private function getOffset($temp)
    {
        if (!isset($this->offsets[$temp])) {
            $this->offsets[$temp] = $this->nextOffset;
            $this->nextOffset += 8;
        }
        return $this->offsets[$temp];
    }

    public function generate($irList)
    {

        // Header
        $this->emit(".global _start");
        $this->emit("_start:");

        // Reservar stack
        $this->emit("sub sp, sp, #1024");

        $this->comment("===== INICIO PROGRAMA =====");

        foreach ($irList as $instr) {

            if ($instr instanceof PrintStr) {

                $this->comment("--- print  ---");

                $label = $this->addString($instr->value);
                $len = strlen($instr->value);

                $this->emit("mov x0, #1");       // stdout
                $this->emit("ldr x1, =$label");  // buffer
                $this->emit("mov x2, #$len");    // length
                $this->emit("mov x8, #64");      // write syscall
                $this->emit("svc #0");

                $this->comment("--- end print ---");
            } elseif ($instr instanceof AssignConst) {
                $this->comment("--- {$instr->target} = {$instr->value} ---");
                $offset = $this->getOffset($instr->target);

                $this->emit("mov x0, #{$instr->value}");
                $this->emit("str x0, [sp, #$offset]");
                $this->comment("--- end {$instr->target} ---");
            } elseif ($instr instanceof Add) {
                $this->comment("--- {$instr->result} = {$instr->left} + {$instr->right} ---");
                $o1 = $this->getOffset($instr->left);
                $o2 = $this->getOffset($instr->right);
                $o3 = $this->getOffset($instr->result);

                $this->emit("ldr x0, [sp, #$o1]");
                $this->emit("ldr x1, [sp, #$o2]");
                $this->emit("add x2, x0, x1");
                $this->emit("str x2, [sp, #$o3]");
                $this->comment("--- end {$instr->result} ---");
            } elseif ($instr instanceof IfGoto) {
                $this->comment("--- if {$instr->left} {$instr->op} {$instr->right} goto {$instr->label} ---");
                $o1 = $this->getOffset($instr->left);
                $o2 = $this->getOffset($instr->right);

                $this->emit("ldr x0, [sp, #$o1]");
                $this->emit("ldr x1, [sp, #$o2]");
                $this->emit("cmp x0, x1");

                $jump = $this->mapOp($instr->op);
                $this->emit("$jump {$instr->label}");
                $this->comment("--- end if ---");
            } elseif ($instr instanceof GotoInstr) {
                $this->comment("--- goto {$instr->label} ---");
                $this->emit("b {$instr->label}");
            } elseif ($instr instanceof Label) {
                $this->comment("--- label {$instr->name} ---");
                $this->emit("{$instr->name}:");
            } elseif ($instr instanceof PrintStr) {

                $label = "msg_" . count($this->code);

                // sección de datos (simplificado)
                $this->emit(".data");
                $this->emit("$label: .asciz \"{$instr->value}\"");
                $this->emit(".text");

                $this->emit("ldr x0, =$label"); // dirección
                $this->emit("mov x1, x0");      // buffer
                $this->emit("mov x2, #" . strlen($instr->value)); // tamaño
                $this->emit("mov x0, #1");      // stdout
                $this->emit("mov x8, #64");     // syscall write
                $this->emit("svc #0");
            } elseif ($instr instanceof PrintInt) {

                $this->comment("--- print_int {$instr->value} ---");

                $offset = $this->getOffset($instr->value);

                $this->emit("ldr x0, [sp, #$offset]");
                $this->emit("bl print_int");

                $this->comment("--- end print_int ---");
            } elseif ($instr instanceof FuncStart) {

                $this->inFunction = true;
                $this->currentFunction = $instr->name;

                $this->offsets = [];
                $this->nextOffset = 0;

                $this->emit("");
                $this->comment("===== FUNC {$instr->name} =====");
                $this->emit("{$instr->name}:");

                // prologue
                $this->emit("stp x29, x30, [sp, #-16]!");
                $this->emit("mov x29, sp");
                $this->emit("sub sp, sp, #128");

                // guardar parámetros en stack
                foreach ($instr->params as $i => $param) {
                    $offset = $this->getOffset($param);
                    $this->emit("str x$i, [sp, #$offset]   // param $param");
                }
            } elseif ($instr instanceof ReturnInstr) {

                $this->comment("--- return {$instr->value} ---");

                $offset = $this->getOffset($instr->value);

                $this->emit("ldr x0, [sp, #$offset]");

                // epilogue
                $this->emit("add sp, sp, #128");
                $this->emit("ldp x29, x30, [sp], #16");
                $this->emit("ret");

                $this->comment("===== END FUNC =====");
            } elseif ($instr instanceof CallInstr) {

                $this->comment("--- call {$instr->name} ---");

                // pasar parámetros
                foreach ($instr->args as $i => $arg) {
                    $offset = $this->getOffset($arg);
                    $this->emit("ldr x$i, [sp, #$offset]");
                }

                $this->emit("bl {$instr->name}");

                // guardar retorno
                if ($instr->result !== null) {
                    $offset = $this->getOffset($instr->result);
                    $this->emit("str x0, [sp, #$offset]");
                }

                $this->comment("--- end call ---");
            }
        }

        $this->comment("===== FIN PROGRAMA =====");

        // Exit
        $this->emit("mov x0, #0");
        $this->emit("mov x8, #93");
        $this->emit("svc #0");

        $this->emit("");
        $this->comment("===== print_int function =====");

        $this->emit("print_int:");
        $this->emit("stp x29, x30, [sp, #-16]!");
        $this->emit("mov x29, sp");

        // buffer simple en stack
        $this->emit("sub sp, sp, #32");
        $this->emit("mov x1, sp"); // buffer

        // convertir número (x0) a string
        $this->emit("mov x2, #0"); // index

        $this->emit("convert_loop:");
        $this->emit("mov x3, #10");
        $this->emit("udiv x4, x0, x3");
        $this->emit("msub x5, x4, x3, x0");
        $this->emit("add x5, x5, #48"); // ASCII
        $this->emit("strb w5, [x1, x2]");
        $this->emit("add x2, x2, #1");
        $this->emit("mov x0, x4");
        $this->emit("cbz x0, convert_done");
        $this->emit("b convert_loop");

        $this->emit("convert_done:");

        // imprimir (invertido, pero sirve para ahora)
        $this->emit("mov x0, #1");
        $this->emit("mov x2, x2");
        $this->emit("mov x8, #64");
        $this->emit("svc #0");

        // limpiar
        $this->emit("add sp, sp, #32");
        $this->emit("ldp x29, x30, [sp], #16");
        $this->emit("ret");

        return $this->buildFinalCode();
    }

    private function buildFinalCode()
    {

        $final = [];

        // DATA
        if (!empty($this->data)) {
            $final[] = ".data";
            foreach ($this->data as $d) {
                $final[] = $d;
            }
        }

        // TEXT
        $final[] = ".text";
        foreach ($this->code as $c) {
            $final[] = $c;
        }

        return implode("\n", $final);
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
            default => throw new Exception("Operador no soportado: $op")
        };
    }
}