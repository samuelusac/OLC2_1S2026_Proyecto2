<?php

require_once "IR.php";
require_once "ARM64Generator.php";

// IR de prueba
// $ir = [
//     new PrintStr("Hola mundo"),
//     new AssignConst("t1", 5),
//     new AssignConst("t2", 3),
//     new Add("t3", "t1", "t2"),

//     new IfGoto("t3", "<", "t1", "L1"),
//     new GotoInstr("L2"),

//     new Label("L1"),
//     new AssignConst("t4", 100),

//     new Label("L2"),
// ];

$ir = [
    new AssignConst("i", 0),

    new Label("L0"),
    new IfGoto("i", ">=", 3, "L1"),

        new AssignConst("j", 0),

        new Label("L2"),
        new IfGoto("j", ">=", 2, "L3"),

            new PrintInt("j"),

            new Add("j", "j", 1),

        new GotoInstr("L2"),
        new Label("L3"),

        new Add("i", "i", 1),

    new GotoInstr("L0"),
    new Label("L1"),
];


$generator = new ARM64Generator();
$asm = $generator->generate($ir);

// Guardar archivo
file_put_contents(__DIR__ . "/../output/main.asm", $asm);

echo "ASM generado en output/main.asm\n";