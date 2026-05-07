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

    // condition

    [
        "op" => "LABEL",
        "name" => "L0"
    ],

    // if i <= 6 goto body

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
                "value" => 6
            ]
        ],
        "label" => "L1"
    ],

    // exit

    [
        "op" => "GOTO",
        "label" => "L_EXIT"
    ],

    // body

    [
        "op" => "LABEL",
        "name" => "L1"
    ],

    // if i % 2 == 0 goto continue

    [
        "op" => "IF_GOTO",
        "condition" => [

            "type" => "BINARY",
            "op" => "==",

            "left" => [

                "type" => "BINARY",
                "op" => "%",

                "left" => [
                    "type" => "VAR",
                    "name" => "i",
                    "offset" => -16
                ],

                "right" => [
                    "type" => "CONST",
                    "value" => 2
                ]
            ],

            "right" => [
                "type" => "CONST",
                "value" => 0
            ]
        ],
        "label" => "L_CONTINUE"
    ],

    // print odd numbers

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

    // increment

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

    // back edge

    [
        "op" => "GOTO",
        "label" => "L0"
    ],

    // exit label

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