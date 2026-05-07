<?php

require_once 'ARM64Generator.php';

$ir = [

    [
        "op" => "ASSIGN",
        "name" => "x",
        "offset" => -16,
        "value" => [
            "type" => "CONST",
            "value" => 42
        ]
    ],

    [
        "op" => "PRINT",
        "values" => [
            [
                "type" => "VAR",
                "name" => "x",
                "offset" => -16
            ]
        ]
    ]
];

$generator = new ARM64Generator();

$asm = $generator->generate($ir);

file_put_contents(
    __DIR__ . '/../output/main.asm',
    $asm
);

echo $asm;