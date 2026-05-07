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

    // if i <= 10 goto L1

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
                "value" => 10
            ]
        ],
        "label" => "L1"
    ],

    // goto exit

    [
        "op" => "GOTO",
        "label" => "L_EXIT"
    ],

    // body

    [
        "op" => "LABEL",
        "name" => "L1"
    ],

    // if i == 5 goto break

    [
        "op" => "IF_GOTO",
        "condition" => [
            "type" => "BINARY",
            "op" => "==",
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
        "label" => "L_BREAK"
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

    // continue target

    [
        "op" => "LABEL",
        "name" => "L_CONTINUE"
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

    // goto condition

    [
        "op" => "GOTO",
        "label" => "L0"
    ],

    // break target

    [
        "op" => "LABEL",
        "name" => "L_BREAK"
    ],

    [
        "op" => "PRINT",
        "values" => [
            [
                "type" => "STRING",
                "value" => "BREAK EJECUTADO"
            ]
        ]
    ],

    // exit

    [
        "op" => "LABEL",
        "name" => "L_EXIT"
    ]
];

$generator = new ARM64Generator();

$asm = $generator->generate($ir);

file_put_contents(
    __DIR__ . '/../output/main.asm',
    $asm
);

echo $asm;