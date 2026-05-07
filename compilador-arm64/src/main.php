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
        "op" => "ASSIGN",
        "name" => "b",
        "offset" => -20,
        "value" => [
            "type" => "CONST",
            "value" => 20
        ]
    ],

    [
        "op" => "ASSIGN",
        "name" => "c",
        "offset" => -24,
        "value" => [
            "type" => "CONST",
            "value" => 5
        ]
    ],

    [
        "op" => "ASSIGN",
        "name" => "r",
        "offset" => -28,
        "value" => [
            "type" => "BINARY",
            "op" => "*",

            "left" => [
                "type" => "BINARY",
                "op" => "+",
                "left" => [
                    "type" => "VAR",
                    "name" => "a",
                    "offset" => -16
                ],
                "right" => [
                    "type" => "VAR",
                    "name" => "b",
                    "offset" => -20
                ]
            ],

            "right" => [
                "type" => "VAR",
                "name" => "c",
                "offset" => -24
            ]
        ]
    ],

    [
        "op" => "PRINT",
        "values" => [
            [
                "type" => "VAR",
                "name" => "r",
                "offset" => -28
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