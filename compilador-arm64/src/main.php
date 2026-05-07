<?php

require_once 'ARM64Generator.php';

$ir = [

    // i = 1

    [
        "op" => "ASSIGN",
        "name" => "i",
        "offset" => -16,
        "value" => [
            "type" => "CONST",
            "value" => 1
        ]
    ],

    // L0:

    [
        "op" => "LABEL",
        "name" => "L0"
    ],

    // if i <= 5 goto L1

    [
        "op" => "IF_GOTO",
        "condition" => [
            "type" => "BINARY",
            "op" => "<=",
            "left" => [
                "type" => "VAR",
                "name" => "i",
                "offset" => -16
            ],
            "right" => [
                "type" => "CONST",
                "value" => 5
            ]
        ],
        "label" => "L1"
    ],

    // goto L2

    [
        "op" => "GOTO",
        "label" => "L2"
    ],

    // L1:

    [
        "op" => "LABEL",
        "name" => "L1"
    ],

    // print(i)

    [
        "op" => "PRINT",
        "values" => [
            [
                "type" => "VAR",
                "name" => "i",
                "offset" => -16
            ]
        ]
    ],

    // i = i + 1

    [
        "op" => "ASSIGN",
        "name" => "i",
        "offset" => -16,
        "value" => [
            "type" => "BINARY",
            "op" => "+",
            "left" => [
                "type" => "VAR",
                "name" => "i",
                "offset" => -16
            ],
            "right" => [
                "type" => "CONST",
                "value" => 1
            ]
        ]
    ],

    // goto L0

    [
        "op" => "GOTO",
        "label" => "L0"
    ],

    // L2:

    [
        "op" => "LABEL",
        "name" => "L2"
    ]
];

$generator = new ARM64Generator();

$asm = $generator->generate($ir);

file_put_contents(
    __DIR__ . '/../output/main.asm',
    $asm
);

echo $asm;