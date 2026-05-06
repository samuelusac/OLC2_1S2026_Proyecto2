grammar Golampi;

// =====================
// PARSER RULES
// =====================

program
    : functionDecl* EOF
    ;

functionDecl
    : 'func' ID  '(' ')' block
    ;

block
    : '{' statement* '}'
    ;

statement
    : varDecl
    | shortVarDecl
    | assignment
    | printStmt
    ;

varDecl
    : 'var' ID type ('=' expr)?
    ;

shortVarDecl
    : ID ':=' expr
    ;
    
assignment
    : ID '=' expr
    ;

type
    : 'int32'
    | 'float32'
    | 'bool'
    | 'string'
    | 'rune'
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
    : expr '||' expr      # LogicalOr
    | expr '&&' expr      # LogicalAnd

    | expr '==' expr      # Equality
    | expr '!=' expr      # Equality

    | expr '<' expr       # Relational
    | expr '>' expr       # Relational
    | expr '<=' expr      # Relational
    | expr '>=' expr      # Relational

    | expr '+' expr       # AddSub
    | expr '-' expr       # AddSub

    | expr '*' expr       # MulDiv
    | expr '/' expr       # MulDiv
    | expr '%' expr       # MulDiv

    | '!' expr            # LogicalNot

    | '(' expr ')'        # Parens

    | literal             # LiteralExpr
    | ID                  # IdentifierExpr
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