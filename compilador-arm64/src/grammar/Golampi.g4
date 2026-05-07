grammar Golampi;

// =====================
// PARSER RULES
// =====================

program
    : functionDecl* EOF
    ;

functionDecl
    : 'func' ID '(' parameterList? ')' returnType? block
    ;

parameterList
    : parameter (',' parameter)*
    ;

parameter
    : ID type
    ;

returnType
    : type
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
    | switchStmt
    | forStmt
    | breakStmt
    | continueStmt
    | unaryUpdate
    ;

breakStmt
    : 'break'
    ;

continueStmt
    : 'continue'
    ;

forStmt
    : forClassic
    | forConditional
    | forInfinite
    ;

forClassic
    : 'for' forInit ';' expr ';' forUpdate block
    ;

forConditional
    : 'for' expr block
    ;
forInfinite
    : 'for' block
    ;
forInit
    : shortVarDecl
    | assignment
    ;

forUpdate
    : assignment
    | unaryUpdate
    ;
unaryUpdate
    : ID '++'
    | ID '--'
    ;

switchStmt
    : 'switch' expr '{' switchCase* defaultCase? '}'
    ;

switchCase
    : 'case' expr ':' statement*
    ;

defaultCase
    : 'default' ':' statement*
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
    : ID assignOp expr
    ;

assignOp
    : '='
    | '+='
    | '-='
    | '*='
    | '/='
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
    : logicalOrExpr
    ;

logicalOrExpr
    : logicalAndExpr ('||' logicalAndExpr)*
    ;

logicalAndExpr
    : equalityExpr ('&&' equalityExpr)*
    ;

equalityExpr
    : relationalExpr (('==' | '!=') relationalExpr)*
    ;

relationalExpr
    : additiveExpr (('<' | '>' | '<=' | '>=') additiveExpr)*
    ;

additiveExpr
    : multiplicativeExpr (('+' | '-') multiplicativeExpr)*
    ;

multiplicativeExpr
    : unaryExpr (('*' | '/' | '%') unaryExpr)*
    ;

unaryExpr
    : ('!' | '-' | '+') unaryExpr
    | primaryExpr
    ;

primaryExpr
    : functionCall
    | arrayAccess
    | '(' expr ')'
    | literal
    | ID
    ;

arrayAccess
    : ID ('[' expr ']')+
    ;

arrayLiteral
    : arrayType '{' exprList? '}'
    ;

literal
    : arrayLiteral
    | INT
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