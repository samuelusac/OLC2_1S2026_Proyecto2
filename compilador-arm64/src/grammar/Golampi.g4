grammar Golampi;

// =====================
// PARSER RULES
// =====================

program
    : functionDecl* EOF
    ;

functionDecl
    : 'func' 'main' '(' ')' block
    ;

block
    : '{' statement* '}'
    ;

statement
    : printStmt
    ;

printStmt
    : 'fmt' '.' 'Println' '(' argumentList? ')' ';'?
    ;

argumentList
    : expr (',' expr)*
    ;

// =====================
// EXPRESSIONS (mínimas)
// =====================

expr
    : literal
    ;

literal
    : INT
    | FLOAT
    | STRING
    | BOOL
    | RUNE
    | NIL
    ;

// =====================
// LEXER RULES
// =====================

INT     : [0-9]+ ;
FLOAT   : [0-9]+ '.' [0-9]+ ;
STRING  : '"' (~["\\] | '\\' .)* '"' ;
RUNE    : '\'' . '\'' ;

BOOL    : 'true' | 'false' ;
NIL     : 'nil' ;

ID      : [a-zA-Z_][a-zA-Z0-9_]* ;

WS      : [ \t\r\n]+ -> skip ;

// Comentarios
LINE_COMMENT
    : '//' ~[\r\n]* -> skip
    ;

BLOCK_COMMENT
    : '/*' .*? '*/' -> skip
    ;