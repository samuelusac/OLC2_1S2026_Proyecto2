grammar Golampi;

// =====================
// PARSER RULES
// =====================

program
    : functionDecl* EOF
    ;

functionDecl
    : 'func' ID '(' parameterList? ')' block
    ;

parameterList
    : parameter (',' parameter)*
    ;

parameter
    : ID type
    ;

block
    : '{' statement* '}'
    ;

statement
    : varDecl
    | shortVarDecl
    | assignment
    | ifStmt
    | whileStmt
    | returnStmt
    | functionCall
    | printStmt
    | arrayAssignment
    | constDecl
    ;

constDecl
    : 'const' ID type '=' expr
    ;
    
arrayAssignment
    : ID ('[' expr ']')+ '=' expr
    ;

returnStmt
    : 'return' expr?
    ;

functionCall
    : ID '(' argumentList? ')'
    ;

whileStmt
    : 'while' expr block
    ;

ifStmt
    : 'if' expr block ('else' block)?
    ;

varDecl
    : 'var' idList type ('=' exprList)?
    ;

idList
    : ID (',' ID)*
    ;

exprList
    : expr (',' expr)*
    ;

shortVarDecl
    : idList ':=' exprList
    ;
    
assignment
    : ID '=' expr
    ;

type
    : arrayType
    | primitiveType
    ;

arrayType
    : ('[' INT ']')+ primitiveType
    ;

primitiveType
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

    | literal                 # LiteralExpr
    | ID ('[' expr ']')+      # ArrayAccess
    | ID                      # IdentifierExpr
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