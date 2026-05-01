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

    // función
    new FuncStart("suma", ["a", "b"]),
        new Add("t1", "a", "b"),
        new ReturnInstr("t1"),
    new FuncEnd(),

    // main
    new AssignConst("x", 2),
    new AssignConst("y", 3),

    new CallInstr("suma", ["x", "y"], "res"),

    new PrintInt("res"),
];


$generator = new ARM64Generator();
$asm = $generator->generate($ir);

// Guardar archivo
file_put_contents(__DIR__ . "/../output/main.asm", $asm);

echo "ASM generado en output/main.asm\n";