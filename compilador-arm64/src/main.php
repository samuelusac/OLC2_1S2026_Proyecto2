<?php

require_once 'ARM64Generator.php';

$ir = [

    [
        "op" => "ASSIGN",
        "name" => "a",
        "offset" => -16,
        "value" => [
            "type" => "CONST",
            "value" => 10
        ]
    ],

    [
        "op" => "IF_GOTO",
        "condition" => [
            "type" => "BINARY",
            "op" => ">",
            "left" => [
                "type" => "VAR",
                "name" => "a",
                "offset" => -16
            ],
            "right" => [
                "type" => "CONST",
                "value" => 5
            ]
        ],
        "label" => "L0"
    ],

    [
        "op" => "GOTO",
        "label" => "L1"
    ],

    [
        "op" => "LABEL",
        "name" => "L0"
    ],

    [
        "op" => "PRINT",
        "values" => [
            [
                "type" => "STRING",
                "value" => "CONDICION VERDADERA"
            ]
        ]
    ],

    [
        "op" => "LABEL",
        "name" => "L1"
    ]
];

$generator = new ARM64Generator();

$asm = $generator->generate($ir);

file_put_contents(
    __DIR__ . '/../output/main.asm',
    $asm
);

echo $asm;