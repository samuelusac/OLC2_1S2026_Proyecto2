<?php

require_once 'ARM64Generator.php';

$ir = [

    "functions" => [

        "suma" => [

            "type" => "FUNCTION",

            "name" => "suma",

            "params" => [

                [
                    "name" => "a"
                ],

                [
                    "name" => "b"
                ]
            ],

            "body" => [

                [
                    "op" => "RETURN",

                    "value" => [

                        "type" => "BINARY",

                        "op" => "+",

                        "left" => [
                            "type" => "VAR",
                            "name" => "a",
                            "offset" => -8
                        ],

                        "right" => [
                            "type" => "VAR",
                            "name" => "b",
                            "offset" => -16
                        ]
                    ]
                ]
            ]
        ],

        "factorial" => [

            "type" => "FUNCTION",

            "name" => "factorial",

            "params" => [

                [
                    "name" => "n"
                ]
            ],

            "body" => [

                [
                    "op" => "IF_GOTO",

                    "condition" => [

                        "type" => "BINARY",

                        "op" => "<=",

                        "left" => [
                            "type" => "VAR",
                            "name" => "n",
                            "offset" => -8
                        ],

                        "right" => [
                            "type" => "CONST",
                            "value" => 1
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
                    "op" => "RETURN",

                    "value" => [
                        "type" => "CONST",
                        "value" => 1
                    ]
                ],

                [
                    "op" => "LABEL",
                    "name" => "L1"
                ],

                [
                    "op" => "RETURN",

                    "value" => [

                        "type" => "BINARY",

                        "op" => "*",

                        "left" => [
                            "type" => "VAR",
                            "name" => "n",
                            "offset" => -8
                        ],

                        "right" => [

                            "type" => "CALL",

                            "name" => "factorial",

                            "args" => [

                                [

                                    "type" => "BINARY",

                                    "op" => "-",

                                    "left" => [
                                        "type" => "VAR",
                                        "name" => "n",
                                        "offset" => -8
                                    ],

                                    "right" => [
                                        "type" => "CONST",
                                        "value" => 1
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],

        "main" => [

            "type" => "FUNCTION",

            "name" => "main",

            "params" => [],

            "body" => [

                [
                    "op" => "ASSIGN",

                    "name" => "x",

                    "offset" => -8,

                    "value" => [

                        "type" => "CALL",

                        "name" => "suma",

                        "args" => [

                            [
                                "type" => "CONST",
                                "value" => 10
                            ],

                            [
                                "type" => "CONST",
                                "value" => 20
                            ]
                        ]
                    ]
                ],

                [
                    "op" => "ASSIGN",

                    "name" => "y",

                    "offset" => -16,

                    "value" => [

                        "type" => "CALL",

                        "name" => "factorial",

                        "args" => [

                            [
                                "type" => "CONST",
                                "value" => 5
                            ]
                        ]
                    ]
                ],

                [
                    "op" => "PRINT",

                    "values" => [

                        [
                            "type" => "VAR",
                            "name" => "x",
                            "offset" => -8
                        ]
                    ]
                ],

                [
                    "op" => "PRINT",

                    "values" => [

                        [
                            "type" => "VAR",
                            "name" => "y",
                            "offset" => -16
                        ]
                    ]
                ]
            ]
        ]
    ],

    "entry" => "main"
];

$generator = new ARM64Generator();

$asm = $generator->generate($ir);

file_put_contents(
    __DIR__ . '/../output/main.asm',
    $asm
);

echo $asm;