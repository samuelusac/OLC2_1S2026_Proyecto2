<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.2
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GolampiParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, T__31 = 32, 
               T__32 = 33, T__33 = 34, T__34 = 35, T__35 = 36, T__36 = 37, 
               T__37 = 38, T__38 = 39, T__39 = 40, T__40 = 41, T__41 = 42, 
               T__42 = 43, T__43 = 44, T__44 = 45, T__45 = 46, T__46 = 47, 
               T__47 = 48, T__48 = 49, T__49 = 50, T__50 = 51, T__51 = 52, 
               INT = 53, FLOAT = 54, STRING = 55, RUNE = 56, BOOL = 57, 
               NIL = 58, ID = 59, WS = 60, LINE_COMMENT = 61, BLOCK_COMMENT = 62;

		public const RULE_program = 0, RULE_functionDecl = 1, RULE_parameterList = 2, 
               RULE_parameter = 3, RULE_returnType = 4, RULE_block = 5, 
               RULE_statement = 6, RULE_breakStmt = 7, RULE_continueStmt = 8, 
               RULE_forStmt = 9, RULE_forClassic = 10, RULE_forConditional = 11, 
               RULE_forInfinite = 12, RULE_forInit = 13, RULE_forUpdate = 14, 
               RULE_unaryUpdate = 15, RULE_switchStmt = 16, RULE_switchCase = 17, 
               RULE_defaultCase = 18, RULE_constDecl = 19, RULE_arrayAssignment = 20, 
               RULE_returnStmt = 21, RULE_functionCall = 22, RULE_whileStmt = 23, 
               RULE_ifStmt = 24, RULE_varDecl = 25, RULE_idList = 26, RULE_exprList = 27, 
               RULE_shortVarDecl = 28, RULE_assignment = 29, RULE_assignOp = 30, 
               RULE_type = 31, RULE_arrayType = 32, RULE_primitiveType = 33, 
               RULE_printStmt = 34, RULE_argumentList = 35, RULE_expr = 36, 
               RULE_logicalOrExpr = 37, RULE_logicalAndExpr = 38, RULE_equalityExpr = 39, 
               RULE_relationalExpr = 40, RULE_additiveExpr = 41, RULE_multiplicativeExpr = 42, 
               RULE_unaryExpr = 43, RULE_primaryExpr = 44, RULE_arrayAccess = 45, 
               RULE_arrayLiteral = 46, RULE_literal = 47;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'functionDecl', 'parameterList', 'parameter', 'returnType', 
			'block', 'statement', 'breakStmt', 'continueStmt', 'forStmt', 'forClassic', 
			'forConditional', 'forInfinite', 'forInit', 'forUpdate', 'unaryUpdate', 
			'switchStmt', 'switchCase', 'defaultCase', 'constDecl', 'arrayAssignment', 
			'returnStmt', 'functionCall', 'whileStmt', 'ifStmt', 'varDecl', 'idList', 
			'exprList', 'shortVarDecl', 'assignment', 'assignOp', 'type', 'arrayType', 
			'primitiveType', 'printStmt', 'argumentList', 'expr', 'logicalOrExpr', 
			'logicalAndExpr', 'equalityExpr', 'relationalExpr', 'additiveExpr', 'multiplicativeExpr', 
			'unaryExpr', 'primaryExpr', 'arrayAccess', 'arrayLiteral', 'literal'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'func'", "'('", "')'", "','", "'{'", "'}'", "'break'", "'continue'", 
		    "'for'", "';'", "'++'", "'--'", "'switch'", "'case'", "':'", "'default'", 
		    "'const'", "'='", "'['", "']'", "'return'", "'while'", "'if'", "'else'", 
		    "'var'", "':='", "'+='", "'-='", "'*='", "'/='", "'int32'", "'float32'", 
		    "'bool'", "'string'", "'rune'", "'fmt'", "'.'", "'Println'", "'||'", 
		    "'&&'", "'=='", "'!='", "'<'", "'>'", "'<='", "'>='", "'+'", "'-'", 
		    "'*'", "'/'", "'%'", "'!'", null, null, null, null, null, "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, "INT", "FLOAT", 
		    "STRING", "RUNE", "BOOL", "NIL", "ID", "WS", "LINE_COMMENT", "BLOCK_COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 62, 422, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 2, 46, 7, 46, 2, 47, 7, 47, 
		    1, 0, 5, 0, 98, 8, 0, 10, 0, 12, 0, 101, 9, 0, 1, 0, 1, 0, 1, 1, 1, 
		    1, 1, 1, 1, 1, 3, 1, 109, 8, 1, 1, 1, 1, 1, 3, 1, 113, 8, 1, 1, 1, 
		    1, 1, 1, 2, 1, 2, 1, 2, 5, 2, 120, 8, 2, 10, 2, 12, 2, 123, 9, 2, 
		    1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 5, 1, 5, 5, 5, 132, 8, 5, 10, 5, 
		    12, 5, 135, 9, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 154, 8, 
		    6, 1, 7, 1, 7, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 3, 9, 163, 8, 9, 1, 10, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 
		    11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 13, 1, 13, 3, 13, 182, 8, 13, 1, 
		    14, 1, 14, 3, 14, 186, 8, 14, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 192, 
		    8, 15, 1, 16, 1, 16, 1, 16, 1, 16, 5, 16, 198, 8, 16, 10, 16, 12, 
		    16, 201, 9, 16, 1, 16, 3, 16, 204, 8, 16, 1, 16, 1, 16, 1, 17, 1, 
		    17, 1, 17, 1, 17, 5, 17, 212, 8, 17, 10, 17, 12, 17, 215, 9, 17, 1, 
		    18, 1, 18, 1, 18, 5, 18, 220, 8, 18, 10, 18, 12, 18, 223, 9, 18, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 4, 20, 236, 8, 20, 11, 20, 12, 20, 237, 1, 20, 1, 20, 1, 20, 
		    1, 21, 1, 21, 3, 21, 245, 8, 21, 1, 22, 1, 22, 1, 22, 3, 22, 250, 
		    8, 22, 1, 22, 1, 22, 1, 23, 1, 23, 1, 23, 1, 23, 1, 24, 1, 24, 1, 
		    24, 1, 24, 1, 24, 3, 24, 263, 8, 24, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 3, 25, 270, 8, 25, 1, 26, 1, 26, 1, 26, 5, 26, 275, 8, 26, 10, 
		    26, 12, 26, 278, 9, 26, 1, 27, 1, 27, 1, 27, 5, 27, 283, 8, 27, 10, 
		    27, 12, 27, 286, 9, 27, 1, 28, 1, 28, 1, 28, 1, 28, 1, 29, 1, 29, 
		    1, 29, 1, 29, 1, 30, 1, 30, 1, 31, 1, 31, 3, 31, 300, 8, 31, 1, 32, 
		    1, 32, 1, 32, 4, 32, 305, 8, 32, 11, 32, 12, 32, 306, 1, 32, 1, 32, 
		    1, 33, 1, 33, 1, 34, 1, 34, 1, 34, 1, 34, 1, 34, 3, 34, 318, 8, 34, 
		    1, 34, 1, 34, 3, 34, 322, 8, 34, 1, 35, 1, 35, 1, 35, 5, 35, 327, 
		    8, 35, 10, 35, 12, 35, 330, 9, 35, 1, 36, 1, 36, 1, 37, 1, 37, 1, 
		    37, 5, 37, 337, 8, 37, 10, 37, 12, 37, 340, 9, 37, 1, 38, 1, 38, 1, 
		    38, 5, 38, 345, 8, 38, 10, 38, 12, 38, 348, 9, 38, 1, 39, 1, 39, 1, 
		    39, 5, 39, 353, 8, 39, 10, 39, 12, 39, 356, 9, 39, 1, 40, 1, 40, 1, 
		    40, 5, 40, 361, 8, 40, 10, 40, 12, 40, 364, 9, 40, 1, 41, 1, 41, 1, 
		    41, 5, 41, 369, 8, 41, 10, 41, 12, 41, 372, 9, 41, 1, 42, 1, 42, 1, 
		    42, 5, 42, 377, 8, 42, 10, 42, 12, 42, 380, 9, 42, 1, 43, 1, 43, 1, 
		    43, 3, 43, 385, 8, 43, 1, 44, 1, 44, 1, 44, 1, 44, 1, 44, 1, 44, 1, 
		    44, 1, 44, 3, 44, 395, 8, 44, 1, 45, 1, 45, 1, 45, 1, 45, 1, 45, 4, 
		    45, 402, 8, 45, 11, 45, 12, 45, 403, 1, 46, 1, 46, 1, 46, 3, 46, 409, 
		    8, 46, 1, 46, 1, 46, 1, 47, 1, 47, 1, 47, 1, 47, 1, 47, 1, 47, 1, 
		    47, 3, 47, 420, 8, 47, 1, 47, 0, 0, 48, 0, 2, 4, 6, 8, 10, 12, 14, 
		    16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 
		    50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 
		    84, 86, 88, 90, 92, 94, 0, 7, 2, 0, 18, 18, 27, 30, 1, 0, 31, 35, 
		    1, 0, 41, 42, 1, 0, 43, 46, 1, 0, 47, 48, 1, 0, 49, 51, 2, 0, 47, 
		    48, 52, 52, 432, 0, 99, 1, 0, 0, 0, 2, 104, 1, 0, 0, 0, 4, 116, 1, 
		    0, 0, 0, 6, 124, 1, 0, 0, 0, 8, 127, 1, 0, 0, 0, 10, 129, 1, 0, 0, 
		    0, 12, 153, 1, 0, 0, 0, 14, 155, 1, 0, 0, 0, 16, 157, 1, 0, 0, 0, 
		    18, 162, 1, 0, 0, 0, 20, 164, 1, 0, 0, 0, 22, 172, 1, 0, 0, 0, 24, 
		    176, 1, 0, 0, 0, 26, 181, 1, 0, 0, 0, 28, 185, 1, 0, 0, 0, 30, 191, 
		    1, 0, 0, 0, 32, 193, 1, 0, 0, 0, 34, 207, 1, 0, 0, 0, 36, 216, 1, 
		    0, 0, 0, 38, 224, 1, 0, 0, 0, 40, 230, 1, 0, 0, 0, 42, 242, 1, 0, 
		    0, 0, 44, 246, 1, 0, 0, 0, 46, 253, 1, 0, 0, 0, 48, 257, 1, 0, 0, 
		    0, 50, 264, 1, 0, 0, 0, 52, 271, 1, 0, 0, 0, 54, 279, 1, 0, 0, 0, 
		    56, 287, 1, 0, 0, 0, 58, 291, 1, 0, 0, 0, 60, 295, 1, 0, 0, 0, 62, 
		    299, 1, 0, 0, 0, 64, 304, 1, 0, 0, 0, 66, 310, 1, 0, 0, 0, 68, 312, 
		    1, 0, 0, 0, 70, 323, 1, 0, 0, 0, 72, 331, 1, 0, 0, 0, 74, 333, 1, 
		    0, 0, 0, 76, 341, 1, 0, 0, 0, 78, 349, 1, 0, 0, 0, 80, 357, 1, 0, 
		    0, 0, 82, 365, 1, 0, 0, 0, 84, 373, 1, 0, 0, 0, 86, 384, 1, 0, 0, 
		    0, 88, 394, 1, 0, 0, 0, 90, 396, 1, 0, 0, 0, 92, 405, 1, 0, 0, 0, 
		    94, 419, 1, 0, 0, 0, 96, 98, 3, 2, 1, 0, 97, 96, 1, 0, 0, 0, 98, 101, 
		    1, 0, 0, 0, 99, 97, 1, 0, 0, 0, 99, 100, 1, 0, 0, 0, 100, 102, 1, 
		    0, 0, 0, 101, 99, 1, 0, 0, 0, 102, 103, 5, 0, 0, 1, 103, 1, 1, 0, 
		    0, 0, 104, 105, 5, 1, 0, 0, 105, 106, 5, 59, 0, 0, 106, 108, 5, 2, 
		    0, 0, 107, 109, 3, 4, 2, 0, 108, 107, 1, 0, 0, 0, 108, 109, 1, 0, 
		    0, 0, 109, 110, 1, 0, 0, 0, 110, 112, 5, 3, 0, 0, 111, 113, 3, 8, 
		    4, 0, 112, 111, 1, 0, 0, 0, 112, 113, 1, 0, 0, 0, 113, 114, 1, 0, 
		    0, 0, 114, 115, 3, 10, 5, 0, 115, 3, 1, 0, 0, 0, 116, 121, 3, 6, 3, 
		    0, 117, 118, 5, 4, 0, 0, 118, 120, 3, 6, 3, 0, 119, 117, 1, 0, 0, 
		    0, 120, 123, 1, 0, 0, 0, 121, 119, 1, 0, 0, 0, 121, 122, 1, 0, 0, 
		    0, 122, 5, 1, 0, 0, 0, 123, 121, 1, 0, 0, 0, 124, 125, 5, 59, 0, 0, 
		    125, 126, 3, 62, 31, 0, 126, 7, 1, 0, 0, 0, 127, 128, 3, 62, 31, 0, 
		    128, 9, 1, 0, 0, 0, 129, 133, 5, 5, 0, 0, 130, 132, 3, 12, 6, 0, 131, 
		    130, 1, 0, 0, 0, 132, 135, 1, 0, 0, 0, 133, 131, 1, 0, 0, 0, 133, 
		    134, 1, 0, 0, 0, 134, 136, 1, 0, 0, 0, 135, 133, 1, 0, 0, 0, 136, 
		    137, 5, 6, 0, 0, 137, 11, 1, 0, 0, 0, 138, 154, 3, 50, 25, 0, 139, 
		    154, 3, 56, 28, 0, 140, 154, 3, 58, 29, 0, 141, 154, 3, 48, 24, 0, 
		    142, 154, 3, 46, 23, 0, 143, 154, 3, 42, 21, 0, 144, 154, 3, 44, 22, 
		    0, 145, 154, 3, 68, 34, 0, 146, 154, 3, 40, 20, 0, 147, 154, 3, 38, 
		    19, 0, 148, 154, 3, 32, 16, 0, 149, 154, 3, 18, 9, 0, 150, 154, 3, 
		    14, 7, 0, 151, 154, 3, 16, 8, 0, 152, 154, 3, 30, 15, 0, 153, 138, 
		    1, 0, 0, 0, 153, 139, 1, 0, 0, 0, 153, 140, 1, 0, 0, 0, 153, 141, 
		    1, 0, 0, 0, 153, 142, 1, 0, 0, 0, 153, 143, 1, 0, 0, 0, 153, 144, 
		    1, 0, 0, 0, 153, 145, 1, 0, 0, 0, 153, 146, 1, 0, 0, 0, 153, 147, 
		    1, 0, 0, 0, 153, 148, 1, 0, 0, 0, 153, 149, 1, 0, 0, 0, 153, 150, 
		    1, 0, 0, 0, 153, 151, 1, 0, 0, 0, 153, 152, 1, 0, 0, 0, 154, 13, 1, 
		    0, 0, 0, 155, 156, 5, 7, 0, 0, 156, 15, 1, 0, 0, 0, 157, 158, 5, 8, 
		    0, 0, 158, 17, 1, 0, 0, 0, 159, 163, 3, 20, 10, 0, 160, 163, 3, 22, 
		    11, 0, 161, 163, 3, 24, 12, 0, 162, 159, 1, 0, 0, 0, 162, 160, 1, 
		    0, 0, 0, 162, 161, 1, 0, 0, 0, 163, 19, 1, 0, 0, 0, 164, 165, 5, 9, 
		    0, 0, 165, 166, 3, 26, 13, 0, 166, 167, 5, 10, 0, 0, 167, 168, 3, 
		    72, 36, 0, 168, 169, 5, 10, 0, 0, 169, 170, 3, 28, 14, 0, 170, 171, 
		    3, 10, 5, 0, 171, 21, 1, 0, 0, 0, 172, 173, 5, 9, 0, 0, 173, 174, 
		    3, 72, 36, 0, 174, 175, 3, 10, 5, 0, 175, 23, 1, 0, 0, 0, 176, 177, 
		    5, 9, 0, 0, 177, 178, 3, 10, 5, 0, 178, 25, 1, 0, 0, 0, 179, 182, 
		    3, 56, 28, 0, 180, 182, 3, 58, 29, 0, 181, 179, 1, 0, 0, 0, 181, 180, 
		    1, 0, 0, 0, 182, 27, 1, 0, 0, 0, 183, 186, 3, 58, 29, 0, 184, 186, 
		    3, 30, 15, 0, 185, 183, 1, 0, 0, 0, 185, 184, 1, 0, 0, 0, 186, 29, 
		    1, 0, 0, 0, 187, 188, 5, 59, 0, 0, 188, 192, 5, 11, 0, 0, 189, 190, 
		    5, 59, 0, 0, 190, 192, 5, 12, 0, 0, 191, 187, 1, 0, 0, 0, 191, 189, 
		    1, 0, 0, 0, 192, 31, 1, 0, 0, 0, 193, 194, 5, 13, 0, 0, 194, 195, 
		    3, 72, 36, 0, 195, 199, 5, 5, 0, 0, 196, 198, 3, 34, 17, 0, 197, 196, 
		    1, 0, 0, 0, 198, 201, 1, 0, 0, 0, 199, 197, 1, 0, 0, 0, 199, 200, 
		    1, 0, 0, 0, 200, 203, 1, 0, 0, 0, 201, 199, 1, 0, 0, 0, 202, 204, 
		    3, 36, 18, 0, 203, 202, 1, 0, 0, 0, 203, 204, 1, 0, 0, 0, 204, 205, 
		    1, 0, 0, 0, 205, 206, 5, 6, 0, 0, 206, 33, 1, 0, 0, 0, 207, 208, 5, 
		    14, 0, 0, 208, 209, 3, 72, 36, 0, 209, 213, 5, 15, 0, 0, 210, 212, 
		    3, 12, 6, 0, 211, 210, 1, 0, 0, 0, 212, 215, 1, 0, 0, 0, 213, 211, 
		    1, 0, 0, 0, 213, 214, 1, 0, 0, 0, 214, 35, 1, 0, 0, 0, 215, 213, 1, 
		    0, 0, 0, 216, 217, 5, 16, 0, 0, 217, 221, 5, 15, 0, 0, 218, 220, 3, 
		    12, 6, 0, 219, 218, 1, 0, 0, 0, 220, 223, 1, 0, 0, 0, 221, 219, 1, 
		    0, 0, 0, 221, 222, 1, 0, 0, 0, 222, 37, 1, 0, 0, 0, 223, 221, 1, 0, 
		    0, 0, 224, 225, 5, 17, 0, 0, 225, 226, 5, 59, 0, 0, 226, 227, 3, 62, 
		    31, 0, 227, 228, 5, 18, 0, 0, 228, 229, 3, 72, 36, 0, 229, 39, 1, 
		    0, 0, 0, 230, 235, 5, 59, 0, 0, 231, 232, 5, 19, 0, 0, 232, 233, 3, 
		    72, 36, 0, 233, 234, 5, 20, 0, 0, 234, 236, 1, 0, 0, 0, 235, 231, 
		    1, 0, 0, 0, 236, 237, 1, 0, 0, 0, 237, 235, 1, 0, 0, 0, 237, 238, 
		    1, 0, 0, 0, 238, 239, 1, 0, 0, 0, 239, 240, 5, 18, 0, 0, 240, 241, 
		    3, 72, 36, 0, 241, 41, 1, 0, 0, 0, 242, 244, 5, 21, 0, 0, 243, 245, 
		    3, 72, 36, 0, 244, 243, 1, 0, 0, 0, 244, 245, 1, 0, 0, 0, 245, 43, 
		    1, 0, 0, 0, 246, 247, 5, 59, 0, 0, 247, 249, 5, 2, 0, 0, 248, 250, 
		    3, 70, 35, 0, 249, 248, 1, 0, 0, 0, 249, 250, 1, 0, 0, 0, 250, 251, 
		    1, 0, 0, 0, 251, 252, 5, 3, 0, 0, 252, 45, 1, 0, 0, 0, 253, 254, 5, 
		    22, 0, 0, 254, 255, 3, 72, 36, 0, 255, 256, 3, 10, 5, 0, 256, 47, 
		    1, 0, 0, 0, 257, 258, 5, 23, 0, 0, 258, 259, 3, 72, 36, 0, 259, 262, 
		    3, 10, 5, 0, 260, 261, 5, 24, 0, 0, 261, 263, 3, 10, 5, 0, 262, 260, 
		    1, 0, 0, 0, 262, 263, 1, 0, 0, 0, 263, 49, 1, 0, 0, 0, 264, 265, 5, 
		    25, 0, 0, 265, 266, 3, 52, 26, 0, 266, 269, 3, 62, 31, 0, 267, 268, 
		    5, 18, 0, 0, 268, 270, 3, 54, 27, 0, 269, 267, 1, 0, 0, 0, 269, 270, 
		    1, 0, 0, 0, 270, 51, 1, 0, 0, 0, 271, 276, 5, 59, 0, 0, 272, 273, 
		    5, 4, 0, 0, 273, 275, 5, 59, 0, 0, 274, 272, 1, 0, 0, 0, 275, 278, 
		    1, 0, 0, 0, 276, 274, 1, 0, 0, 0, 276, 277, 1, 0, 0, 0, 277, 53, 1, 
		    0, 0, 0, 278, 276, 1, 0, 0, 0, 279, 284, 3, 72, 36, 0, 280, 281, 5, 
		    4, 0, 0, 281, 283, 3, 72, 36, 0, 282, 280, 1, 0, 0, 0, 283, 286, 1, 
		    0, 0, 0, 284, 282, 1, 0, 0, 0, 284, 285, 1, 0, 0, 0, 285, 55, 1, 0, 
		    0, 0, 286, 284, 1, 0, 0, 0, 287, 288, 3, 52, 26, 0, 288, 289, 5, 26, 
		    0, 0, 289, 290, 3, 54, 27, 0, 290, 57, 1, 0, 0, 0, 291, 292, 5, 59, 
		    0, 0, 292, 293, 3, 60, 30, 0, 293, 294, 3, 72, 36, 0, 294, 59, 1, 
		    0, 0, 0, 295, 296, 7, 0, 0, 0, 296, 61, 1, 0, 0, 0, 297, 300, 3, 64, 
		    32, 0, 298, 300, 3, 66, 33, 0, 299, 297, 1, 0, 0, 0, 299, 298, 1, 
		    0, 0, 0, 300, 63, 1, 0, 0, 0, 301, 302, 5, 19, 0, 0, 302, 303, 5, 
		    53, 0, 0, 303, 305, 5, 20, 0, 0, 304, 301, 1, 0, 0, 0, 305, 306, 1, 
		    0, 0, 0, 306, 304, 1, 0, 0, 0, 306, 307, 1, 0, 0, 0, 307, 308, 1, 
		    0, 0, 0, 308, 309, 3, 66, 33, 0, 309, 65, 1, 0, 0, 0, 310, 311, 7, 
		    1, 0, 0, 311, 67, 1, 0, 0, 0, 312, 313, 5, 36, 0, 0, 313, 314, 5, 
		    37, 0, 0, 314, 315, 5, 38, 0, 0, 315, 317, 5, 2, 0, 0, 316, 318, 3, 
		    70, 35, 0, 317, 316, 1, 0, 0, 0, 317, 318, 1, 0, 0, 0, 318, 319, 1, 
		    0, 0, 0, 319, 321, 5, 3, 0, 0, 320, 322, 5, 10, 0, 0, 321, 320, 1, 
		    0, 0, 0, 321, 322, 1, 0, 0, 0, 322, 69, 1, 0, 0, 0, 323, 328, 3, 72, 
		    36, 0, 324, 325, 5, 4, 0, 0, 325, 327, 3, 72, 36, 0, 326, 324, 1, 
		    0, 0, 0, 327, 330, 1, 0, 0, 0, 328, 326, 1, 0, 0, 0, 328, 329, 1, 
		    0, 0, 0, 329, 71, 1, 0, 0, 0, 330, 328, 1, 0, 0, 0, 331, 332, 3, 74, 
		    37, 0, 332, 73, 1, 0, 0, 0, 333, 338, 3, 76, 38, 0, 334, 335, 5, 39, 
		    0, 0, 335, 337, 3, 76, 38, 0, 336, 334, 1, 0, 0, 0, 337, 340, 1, 0, 
		    0, 0, 338, 336, 1, 0, 0, 0, 338, 339, 1, 0, 0, 0, 339, 75, 1, 0, 0, 
		    0, 340, 338, 1, 0, 0, 0, 341, 346, 3, 78, 39, 0, 342, 343, 5, 40, 
		    0, 0, 343, 345, 3, 78, 39, 0, 344, 342, 1, 0, 0, 0, 345, 348, 1, 0, 
		    0, 0, 346, 344, 1, 0, 0, 0, 346, 347, 1, 0, 0, 0, 347, 77, 1, 0, 0, 
		    0, 348, 346, 1, 0, 0, 0, 349, 354, 3, 80, 40, 0, 350, 351, 7, 2, 0, 
		    0, 351, 353, 3, 80, 40, 0, 352, 350, 1, 0, 0, 0, 353, 356, 1, 0, 0, 
		    0, 354, 352, 1, 0, 0, 0, 354, 355, 1, 0, 0, 0, 355, 79, 1, 0, 0, 0, 
		    356, 354, 1, 0, 0, 0, 357, 362, 3, 82, 41, 0, 358, 359, 7, 3, 0, 0, 
		    359, 361, 3, 82, 41, 0, 360, 358, 1, 0, 0, 0, 361, 364, 1, 0, 0, 0, 
		    362, 360, 1, 0, 0, 0, 362, 363, 1, 0, 0, 0, 363, 81, 1, 0, 0, 0, 364, 
		    362, 1, 0, 0, 0, 365, 370, 3, 84, 42, 0, 366, 367, 7, 4, 0, 0, 367, 
		    369, 3, 84, 42, 0, 368, 366, 1, 0, 0, 0, 369, 372, 1, 0, 0, 0, 370, 
		    368, 1, 0, 0, 0, 370, 371, 1, 0, 0, 0, 371, 83, 1, 0, 0, 0, 372, 370, 
		    1, 0, 0, 0, 373, 378, 3, 86, 43, 0, 374, 375, 7, 5, 0, 0, 375, 377, 
		    3, 86, 43, 0, 376, 374, 1, 0, 0, 0, 377, 380, 1, 0, 0, 0, 378, 376, 
		    1, 0, 0, 0, 378, 379, 1, 0, 0, 0, 379, 85, 1, 0, 0, 0, 380, 378, 1, 
		    0, 0, 0, 381, 382, 7, 6, 0, 0, 382, 385, 3, 86, 43, 0, 383, 385, 3, 
		    88, 44, 0, 384, 381, 1, 0, 0, 0, 384, 383, 1, 0, 0, 0, 385, 87, 1, 
		    0, 0, 0, 386, 395, 3, 44, 22, 0, 387, 395, 3, 90, 45, 0, 388, 389, 
		    5, 2, 0, 0, 389, 390, 3, 72, 36, 0, 390, 391, 5, 3, 0, 0, 391, 395, 
		    1, 0, 0, 0, 392, 395, 3, 94, 47, 0, 393, 395, 5, 59, 0, 0, 394, 386, 
		    1, 0, 0, 0, 394, 387, 1, 0, 0, 0, 394, 388, 1, 0, 0, 0, 394, 392, 
		    1, 0, 0, 0, 394, 393, 1, 0, 0, 0, 395, 89, 1, 0, 0, 0, 396, 401, 5, 
		    59, 0, 0, 397, 398, 5, 19, 0, 0, 398, 399, 3, 72, 36, 0, 399, 400, 
		    5, 20, 0, 0, 400, 402, 1, 0, 0, 0, 401, 397, 1, 0, 0, 0, 402, 403, 
		    1, 0, 0, 0, 403, 401, 1, 0, 0, 0, 403, 404, 1, 0, 0, 0, 404, 91, 1, 
		    0, 0, 0, 405, 406, 3, 64, 32, 0, 406, 408, 5, 5, 0, 0, 407, 409, 3, 
		    54, 27, 0, 408, 407, 1, 0, 0, 0, 408, 409, 1, 0, 0, 0, 409, 410, 1, 
		    0, 0, 0, 410, 411, 5, 6, 0, 0, 411, 93, 1, 0, 0, 0, 412, 420, 3, 92, 
		    46, 0, 413, 420, 5, 53, 0, 0, 414, 420, 5, 54, 0, 0, 415, 420, 5, 
		    55, 0, 0, 416, 420, 5, 57, 0, 0, 417, 420, 5, 56, 0, 0, 418, 420, 
		    5, 58, 0, 0, 419, 412, 1, 0, 0, 0, 419, 413, 1, 0, 0, 0, 419, 414, 
		    1, 0, 0, 0, 419, 415, 1, 0, 0, 0, 419, 416, 1, 0, 0, 0, 419, 417, 
		    1, 0, 0, 0, 419, 418, 1, 0, 0, 0, 420, 95, 1, 0, 0, 0, 37, 99, 108, 
		    112, 121, 133, 153, 162, 181, 185, 191, 199, 203, 213, 221, 237, 244, 
		    249, 262, 269, 276, 284, 299, 306, 317, 321, 328, 338, 346, 354, 362, 
		    370, 378, 384, 394, 403, 408, 419];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Golampi.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(99);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__0) {
		        	$this->setState(96);
		        	$this->functionDecl();
		        	$this->setState(101);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(102);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionDecl(): Context\FunctionDeclContext
		{
		    $localContext = new Context\FunctionDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_functionDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(104);
		        $this->match(self::T__0);
		        $this->setState(105);
		        $this->match(self::ID);
		        $this->setState(106);
		        $this->match(self::T__1);
		        $this->setState(108);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(107);
		        	$this->parameterList();
		        }
		        $this->setState(110);
		        $this->match(self::T__2);
		        $this->setState(112);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 66572517376) !== 0)) {
		        	$this->setState(111);
		        	$this->returnType();
		        }
		        $this->setState(114);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameterList(): Context\ParameterListContext
		{
		    $localContext = new Context\ParameterListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_parameterList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(116);
		        $this->parameter();
		        $this->setState(121);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(117);
		        	$this->match(self::T__3);
		        	$this->setState(118);
		        	$this->parameter();
		        	$this->setState(123);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameter(): Context\ParameterContext
		{
		    $localContext = new Context\ParameterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_parameter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(124);
		        $this->match(self::ID);
		        $this->setState(125);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnType(): Context\ReturnTypeContext
		{
		    $localContext = new Context\ReturnTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_returnType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(127);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(129);
		        $this->match(self::T__4);
		        $this->setState(133);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 576460821071274880) !== 0)) {
		        	$this->setState(130);
		        	$this->statement();
		        	$this->setState(135);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(136);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_statement);

		    try {
		        $this->setState(153);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(138);
		        	    $this->varDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(139);
		        	    $this->shortVarDecl();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(140);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(141);
		        	    $this->ifStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(142);
		        	    $this->whileStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(143);
		        	    $this->returnStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(144);
		        	    $this->functionCall();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(145);
		        	    $this->printStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(146);
		        	    $this->arrayAssignment();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(147);
		        	    $this->constDecl();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(148);
		        	    $this->switchStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(149);
		        	    $this->forStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(150);
		        	    $this->breakStmt();
		        	break;

		        	case 14:
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(151);
		        	    $this->continueStmt();
		        	break;

		        	case 15:
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(152);
		        	    $this->unaryUpdate();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function breakStmt(): Context\BreakStmtContext
		{
		    $localContext = new Context\BreakStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_breakStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(155);
		        $this->match(self::T__6);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function continueStmt(): Context\ContinueStmtContext
		{
		    $localContext = new Context\ContinueStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_continueStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(157);
		        $this->match(self::T__7);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStmt(): Context\ForStmtContext
		{
		    $localContext = new Context\ForStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_forStmt);

		    try {
		        $this->setState(162);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(159);
		        	    $this->forClassic();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(160);
		        	    $this->forConditional();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(161);
		        	    $this->forInfinite();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forClassic(): Context\ForClassicContext
		{
		    $localContext = new Context\ForClassicContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_forClassic);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(164);
		        $this->match(self::T__8);
		        $this->setState(165);
		        $this->forInit();
		        $this->setState(166);
		        $this->match(self::T__9);
		        $this->setState(167);
		        $this->expr();
		        $this->setState(168);
		        $this->match(self::T__9);
		        $this->setState(169);
		        $this->forUpdate();
		        $this->setState(170);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forConditional(): Context\ForConditionalContext
		{
		    $localContext = new Context\ForConditionalContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_forConditional);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(172);
		        $this->match(self::T__8);
		        $this->setState(173);
		        $this->expr();
		        $this->setState(174);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forInfinite(): Context\ForInfiniteContext
		{
		    $localContext = new Context\ForInfiniteContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_forInfinite);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(176);
		        $this->match(self::T__8);
		        $this->setState(177);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forInit(): Context\ForInitContext
		{
		    $localContext = new Context\ForInitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_forInit);

		    try {
		        $this->setState(181);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(179);
		        	    $this->shortVarDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(180);
		        	    $this->assignment();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forUpdate(): Context\ForUpdateContext
		{
		    $localContext = new Context\ForUpdateContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_forUpdate);

		    try {
		        $this->setState(185);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(183);
		        	    $this->assignment();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(184);
		        	    $this->unaryUpdate();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryUpdate(): Context\UnaryUpdateContext
		{
		    $localContext = new Context\UnaryUpdateContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_unaryUpdate);

		    try {
		        $this->setState(191);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(187);
		        	    $this->match(self::ID);
		        	    $this->setState(188);
		        	    $this->match(self::T__10);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(189);
		        	    $this->match(self::ID);
		        	    $this->setState(190);
		        	    $this->match(self::T__11);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(193);
		        $this->match(self::T__12);
		        $this->setState(194);
		        $this->expr();
		        $this->setState(195);
		        $this->match(self::T__4);
		        $this->setState(199);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__13) {
		        	$this->setState(196);
		        	$this->switchCase();
		        	$this->setState(201);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(203);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__15) {
		        	$this->setState(202);
		        	$this->defaultCase();
		        }
		        $this->setState(205);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchCase(): Context\SwitchCaseContext
		{
		    $localContext = new Context\SwitchCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_switchCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(207);
		        $this->match(self::T__13);
		        $this->setState(208);
		        $this->expr();
		        $this->setState(209);
		        $this->match(self::T__14);
		        $this->setState(213);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 576460821071274880) !== 0)) {
		        	$this->setState(210);
		        	$this->statement();
		        	$this->setState(215);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function defaultCase(): Context\DefaultCaseContext
		{
		    $localContext = new Context\DefaultCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_defaultCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(216);
		        $this->match(self::T__15);
		        $this->setState(217);
		        $this->match(self::T__14);
		        $this->setState(221);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 576460821071274880) !== 0)) {
		        	$this->setState(218);
		        	$this->statement();
		        	$this->setState(223);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constDecl(): Context\ConstDeclContext
		{
		    $localContext = new Context\ConstDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_constDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(224);
		        $this->match(self::T__16);
		        $this->setState(225);
		        $this->match(self::ID);
		        $this->setState(226);
		        $this->type();
		        $this->setState(227);
		        $this->match(self::T__17);
		        $this->setState(228);
		        $this->expr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayAssignment(): Context\ArrayAssignmentContext
		{
		    $localContext = new Context\ArrayAssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_arrayAssignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(230);
		        $this->match(self::ID);
		        $this->setState(235); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(231);
		        	$this->match(self::T__18);
		        	$this->setState(232);
		        	$this->expr();
		        	$this->setState(233);
		        	$this->match(self::T__19);
		        	$this->setState(237); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__18);
		        $this->setState(239);
		        $this->match(self::T__17);
		        $this->setState(240);
		        $this->expr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStmt(): Context\ReturnStmtContext
		{
		    $localContext = new Context\ReturnStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(242);
		        $this->match(self::T__20);
		        $this->setState(244);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		            case 1:
		        	    $this->setState(243);
		        	    $this->expr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionCall(): Context\FunctionCallContext
		{
		    $localContext = new Context\FunctionCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(246);
		        $this->match(self::ID);
		        $this->setState(247);
		        $this->match(self::T__1);
		        $this->setState(249);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1148840117445066756) !== 0)) {
		        	$this->setState(248);
		        	$this->argumentList();
		        }
		        $this->setState(251);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function whileStmt(): Context\WhileStmtContext
		{
		    $localContext = new Context\WhileStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_whileStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(253);
		        $this->match(self::T__21);
		        $this->setState(254);
		        $this->expr();
		        $this->setState(255);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(257);
		        $this->match(self::T__22);
		        $this->setState(258);
		        $this->expr();
		        $this->setState(259);
		        $this->block();
		        $this->setState(262);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__23) {
		        	$this->setState(260);
		        	$this->match(self::T__23);
		        	$this->setState(261);
		        	$this->block();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varDecl(): Context\VarDeclContext
		{
		    $localContext = new Context\VarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_varDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(264);
		        $this->match(self::T__24);
		        $this->setState(265);
		        $this->idList();
		        $this->setState(266);
		        $this->type();
		        $this->setState(269);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__17) {
		        	$this->setState(267);
		        	$this->match(self::T__17);
		        	$this->setState(268);
		        	$this->exprList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function idList(): Context\IdListContext
		{
		    $localContext = new Context\IdListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(271);
		        $this->match(self::ID);
		        $this->setState(276);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(272);
		        	$this->match(self::T__3);
		        	$this->setState(273);
		        	$this->match(self::ID);
		        	$this->setState(278);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprList(): Context\ExprListContext
		{
		    $localContext = new Context\ExprListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_exprList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->expr();
		        $this->setState(284);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(280);
		        	$this->match(self::T__3);
		        	$this->setState(281);
		        	$this->expr();
		        	$this->setState(286);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function shortVarDecl(): Context\ShortVarDeclContext
		{
		    $localContext = new Context\ShortVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(287);
		        $this->idList();
		        $this->setState(288);
		        $this->match(self::T__25);
		        $this->setState(289);
		        $this->exprList();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(291);
		        $this->match(self::ID);
		        $this->setState(292);
		        $this->assignOp();
		        $this->setState(293);
		        $this->expr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignOp(): Context\AssignOpContext
		{
		    $localContext = new Context\AssignOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_assignOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(295);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2013528064) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_type);

		    try {
		        $this->setState(299);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__18:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(297);
		            	$this->arrayType();
		            	break;

		            case self::T__30:
		            case self::T__31:
		            case self::T__32:
		            case self::T__33:
		            case self::T__34:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(298);
		            	$this->primitiveType();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayType(): Context\ArrayTypeContext
		{
		    $localContext = new Context\ArrayTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_arrayType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(304); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(301);
		        	$this->match(self::T__18);
		        	$this->setState(302);
		        	$this->match(self::INT);
		        	$this->setState(303);
		        	$this->match(self::T__19);
		        	$this->setState(306); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__18);
		        $this->setState(308);
		        $this->primitiveType();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primitiveType(): Context\PrimitiveTypeContext
		{
		    $localContext = new Context\PrimitiveTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_primitiveType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(310);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 66571993088) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function printStmt(): Context\PrintStmtContext
		{
		    $localContext = new Context\PrintStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(312);
		        $this->match(self::T__35);
		        $this->setState(313);
		        $this->match(self::T__36);
		        $this->setState(314);
		        $this->match(self::T__37);
		        $this->setState(315);
		        $this->match(self::T__1);
		        $this->setState(317);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1148840117445066756) !== 0)) {
		        	$this->setState(316);
		        	$this->argumentList();
		        }
		        $this->setState(319);
		        $this->match(self::T__2);
		        $this->setState(321);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__9) {
		        	$this->setState(320);
		        	$this->match(self::T__9);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argumentList(): Context\ArgumentListContext
		{
		    $localContext = new Context\ArgumentListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_argumentList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(323);
		        $this->expr();
		        $this->setState(328);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(324);
		        	$this->match(self::T__3);
		        	$this->setState(325);
		        	$this->expr();
		        	$this->setState(330);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
		    $localContext = new Context\ExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_expr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(331);
		        $this->logicalOrExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalOrExpr(): Context\LogicalOrExprContext
		{
		    $localContext = new Context\LogicalOrExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_logicalOrExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(333);
		        $this->logicalAndExpr();
		        $this->setState(338);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__38) {
		        	$this->setState(334);
		        	$this->match(self::T__38);
		        	$this->setState(335);
		        	$this->logicalAndExpr();
		        	$this->setState(340);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalAndExpr(): Context\LogicalAndExprContext
		{
		    $localContext = new Context\LogicalAndExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_logicalAndExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(341);
		        $this->equalityExpr();
		        $this->setState(346);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__39) {
		        	$this->setState(342);
		        	$this->match(self::T__39);
		        	$this->setState(343);
		        	$this->equalityExpr();
		        	$this->setState(348);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function equalityExpr(): Context\EqualityExprContext
		{
		    $localContext = new Context\EqualityExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_equalityExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(349);
		        $this->relationalExpr();
		        $this->setState(354);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__40 || $_la === self::T__41) {
		        	$this->setState(350);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T__40 || $_la === self::T__41)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(351);
		        	$this->relationalExpr();
		        	$this->setState(356);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function relationalExpr(): Context\RelationalExprContext
		{
		    $localContext = new Context\RelationalExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_relationalExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(357);
		        $this->additiveExpr();
		        $this->setState(362);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131941395333120) !== 0)) {
		        	$this->setState(358);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131941395333120) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(359);
		        	$this->additiveExpr();
		        	$this->setState(364);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function additiveExpr(): Context\AdditiveExprContext
		{
		    $localContext = new Context\AdditiveExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_additiveExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(365);
		        $this->multiplicativeExpr();
		        $this->setState(370);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__46 || $_la === self::T__47) {
		        	$this->setState(366);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T__46 || $_la === self::T__47)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(367);
		        	$this->multiplicativeExpr();
		        	$this->setState(372);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function multiplicativeExpr(): Context\MultiplicativeExprContext
		{
		    $localContext = new Context\MultiplicativeExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_multiplicativeExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(373);
		        $this->unaryExpr();
		        $this->setState(378);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3940649673949184) !== 0)) {
		        	$this->setState(374);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3940649673949184) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(375);
		        	$this->unaryExpr();
		        	$this->setState(380);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryExpr(): Context\UnaryExprContext
		{
		    $localContext = new Context\UnaryExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_unaryExpr);

		    try {
		        $this->setState(384);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__46:
		            case self::T__47:
		            case self::T__51:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(381);

		            	$_la = $this->input->LA(1);

		            	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4925812092436480) !== 0))) {
		            	$this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(382);
		            	$this->unaryExpr();
		            	break;

		            case self::T__1:
		            case self::T__18:
		            case self::INT:
		            case self::FLOAT:
		            case self::STRING:
		            case self::RUNE:
		            case self::BOOL:
		            case self::NIL:
		            case self::ID:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(383);
		            	$this->primaryExpr();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primaryExpr(): Context\PrimaryExprContext
		{
		    $localContext = new Context\PrimaryExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_primaryExpr);

		    try {
		        $this->setState(394);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 33, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(386);
		        	    $this->functionCall();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(387);
		        	    $this->arrayAccess();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(388);
		        	    $this->match(self::T__1);
		        	    $this->setState(389);
		        	    $this->expr();
		        	    $this->setState(390);
		        	    $this->match(self::T__2);
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(392);
		        	    $this->literal();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(393);
		        	    $this->match(self::ID);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayAccess(): Context\ArrayAccessContext
		{
		    $localContext = new Context\ArrayAccessContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 90, self::RULE_arrayAccess);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(396);
		        $this->match(self::ID);
		        $this->setState(401); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(397);
		        	$this->match(self::T__18);
		        	$this->setState(398);
		        	$this->expr();
		        	$this->setState(399);
		        	$this->match(self::T__19);
		        	$this->setState(403); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__18);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayLiteral(): Context\ArrayLiteralContext
		{
		    $localContext = new Context\ArrayLiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 92, self::RULE_arrayLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(405);
		        $this->arrayType();
		        $this->setState(406);
		        $this->match(self::T__4);
		        $this->setState(408);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1148840117445066756) !== 0)) {
		        	$this->setState(407);
		        	$this->exprList();
		        }
		        $this->setState(410);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 94, self::RULE_literal);

		    try {
		        $this->setState(419);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__18:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(412);
		            	$this->arrayLiteral();
		            	break;

		            case self::INT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(413);
		            	$this->match(self::INT);
		            	break;

		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(414);
		            	$this->match(self::FLOAT);
		            	break;

		            case self::STRING:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(415);
		            	$this->match(self::STRING);
		            	break;

		            case self::BOOL:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(416);
		            	$this->match(self::BOOL);
		            	break;

		            case self::RUNE:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(417);
		            	$this->match(self::RUNE);
		            	break;

		            case self::NIL:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(418);
		            	$this->match(self::NIL);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GolampiParser;
	use GolampiVisitor;
	use GolampiListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_program;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EOF, 0);
	    }

	    /**
	     * @return array<FunctionDeclContext>|FunctionDeclContext|null
	     */
	    public function functionDecl(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FunctionDeclContext::class);
	    	}

	        return $this->getTypedRuleContext(FunctionDeclContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitProgram($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_functionDecl;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function parameterList(): ?ParameterListContext
	    {
	    	return $this->getTypedRuleContext(ParameterListContext::class, 0);
	    }

	    public function returnType(): ?ReturnTypeContext
	    {
	    	return $this->getTypedRuleContext(ReturnTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFunctionDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFunctionDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFunctionDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParameterListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_parameterList;
	    }

	    /**
	     * @return array<ParameterContext>|ParameterContext|null
	     */
	    public function parameter(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParameterContext::class);
	    	}

	        return $this->getTypedRuleContext(ParameterContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParameterList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParameterList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParameterList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParameterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_parameter;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParameter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParameter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParameter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnType;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_block;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBlock($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBlock($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_statement;
	    }

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function whileStmt(): ?WhileStmtContext
	    {
	    	return $this->getTypedRuleContext(WhileStmtContext::class, 0);
	    }

	    public function returnStmt(): ?ReturnStmtContext
	    {
	    	return $this->getTypedRuleContext(ReturnStmtContext::class, 0);
	    }

	    public function functionCall(): ?FunctionCallContext
	    {
	    	return $this->getTypedRuleContext(FunctionCallContext::class, 0);
	    }

	    public function printStmt(): ?PrintStmtContext
	    {
	    	return $this->getTypedRuleContext(PrintStmtContext::class, 0);
	    }

	    public function arrayAssignment(): ?ArrayAssignmentContext
	    {
	    	return $this->getTypedRuleContext(ArrayAssignmentContext::class, 0);
	    }

	    public function constDecl(): ?ConstDeclContext
	    {
	    	return $this->getTypedRuleContext(ConstDeclContext::class, 0);
	    }

	    public function switchStmt(): ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

	    public function forStmt(): ?ForStmtContext
	    {
	    	return $this->getTypedRuleContext(ForStmtContext::class, 0);
	    }

	    public function breakStmt(): ?BreakStmtContext
	    {
	    	return $this->getTypedRuleContext(BreakStmtContext::class, 0);
	    }

	    public function continueStmt(): ?ContinueStmtContext
	    {
	    	return $this->getTypedRuleContext(ContinueStmtContext::class, 0);
	    }

	    public function unaryUpdate(): ?UnaryUpdateContext
	    {
	    	return $this->getTypedRuleContext(UnaryUpdateContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BreakStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_breakStmt;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBreakStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBreakStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBreakStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ContinueStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_continueStmt;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterContinueStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitContinueStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitContinueStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forStmt;
	    }

	    public function forClassic(): ?ForClassicContext
	    {
	    	return $this->getTypedRuleContext(ForClassicContext::class, 0);
	    }

	    public function forConditional(): ?ForConditionalContext
	    {
	    	return $this->getTypedRuleContext(ForConditionalContext::class, 0);
	    }

	    public function forInfinite(): ?ForInfiniteContext
	    {
	    	return $this->getTypedRuleContext(ForInfiniteContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForClassicContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forClassic;
	    }

	    public function forInit(): ?ForInitContext
	    {
	    	return $this->getTypedRuleContext(ForInitContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function forUpdate(): ?ForUpdateContext
	    {
	    	return $this->getTypedRuleContext(ForUpdateContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForClassic($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForClassic($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForClassic($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForConditionalContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forConditional;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForConditional($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForConditional($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForConditional($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForInfiniteContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forInfinite;
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForInfinite($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForInfinite($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForInfinite($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForInitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forInit;
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForInit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForInit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForInit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForUpdateContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forUpdate;
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

	    public function unaryUpdate(): ?UnaryUpdateContext
	    {
	    	return $this->getTypedRuleContext(UnaryUpdateContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForUpdate($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForUpdate($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForUpdate($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryUpdateContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_unaryUpdate;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterUnaryUpdate($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitUnaryUpdate($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitUnaryUpdate($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_switchStmt;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    /**
	     * @return array<SwitchCaseContext>|SwitchCaseContext|null
	     */
	    public function switchCase(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SwitchCaseContext::class);
	    	}

	        return $this->getTypedRuleContext(SwitchCaseContext::class, $index);
	    }

	    public function defaultCase(): ?DefaultCaseContext
	    {
	    	return $this->getTypedRuleContext(DefaultCaseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_switchCase;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSwitchCase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSwitchCase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSwitchCase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DefaultCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_defaultCase;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDefaultCase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDefaultCase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDefaultCase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_constDecl;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterConstDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitConstDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitConstDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayAssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayAssignment;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnStmt;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_functionCall;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function argumentList(): ?ArgumentListContext
	    {
	    	return $this->getTypedRuleContext(ArgumentListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFunctionCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFunctionCall($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFunctionCall($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class WhileStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_whileStmt;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterWhileStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitWhileStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitWhileStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_ifStmt;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    /**
	     * @return array<BlockContext>|BlockContext|null
	     */
	    public function block(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BlockContext::class);
	    	}

	        return $this->getTypedRuleContext(BlockContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIfStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIfStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIfStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_varDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_idList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::ID);
	    	}

	        return $this->getToken(GolampiParser::ID, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIdList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIdList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_exprList;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExprList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExprList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExprList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ShortVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_shortVarDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterShortVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitShortVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitShortVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignment;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function assignOp(): ?AssignOpContext
	    {
	    	return $this->getTypedRuleContext(AssignOpContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignOp;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignOp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_type;
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    public function primitiveType(): ?PrimitiveTypeContext
	    {
	    	return $this->getTypedRuleContext(PrimitiveTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayType;
	    }

	    public function primitiveType(): ?PrimitiveTypeContext
	    {
	    	return $this->getTypedRuleContext(PrimitiveTypeContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function INT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::INT);
	    	}

	        return $this->getToken(GolampiParser::INT, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrimitiveTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_primitiveType;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPrimitiveType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPrimitiveType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPrimitiveType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrintStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_printStmt;
	    }

	    public function argumentList(): ?ArgumentListContext
	    {
	    	return $this->getTypedRuleContext(ArgumentListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPrintStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPrintStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPrintStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgumentListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_argumentList;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArgumentList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArgumentList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArgumentList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expr;
	    }

	    public function logicalOrExpr(): ?LogicalOrExprContext
	    {
	    	return $this->getTypedRuleContext(LogicalOrExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogicalOrExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_logicalOrExpr;
	    }

	    /**
	     * @return array<LogicalAndExprContext>|LogicalAndExprContext|null
	     */
	    public function logicalAndExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogicalAndExprContext::class);
	    	}

	        return $this->getTypedRuleContext(LogicalAndExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLogicalOrExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalOrExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalOrExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogicalAndExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_logicalAndExpr;
	    }

	    /**
	     * @return array<EqualityExprContext>|EqualityExprContext|null
	     */
	    public function equalityExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EqualityExprContext::class);
	    	}

	        return $this->getTypedRuleContext(EqualityExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLogicalAndExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalAndExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalAndExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EqualityExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_equalityExpr;
	    }

	    /**
	     * @return array<RelationalExprContext>|RelationalExprContext|null
	     */
	    public function relationalExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(RelationalExprContext::class);
	    	}

	        return $this->getTypedRuleContext(RelationalExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterEqualityExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitEqualityExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitEqualityExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RelationalExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_relationalExpr;
	    }

	    /**
	     * @return array<AdditiveExprContext>|AdditiveExprContext|null
	     */
	    public function additiveExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AdditiveExprContext::class);
	    	}

	        return $this->getTypedRuleContext(AdditiveExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterRelationalExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitRelationalExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRelationalExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AdditiveExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_additiveExpr;
	    }

	    /**
	     * @return array<MultiplicativeExprContext>|MultiplicativeExprContext|null
	     */
	    public function multiplicativeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MultiplicativeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(MultiplicativeExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAdditiveExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAdditiveExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAdditiveExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MultiplicativeExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_multiplicativeExpr;
	    }

	    /**
	     * @return array<UnaryExprContext>|UnaryExprContext|null
	     */
	    public function unaryExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UnaryExprContext::class);
	    	}

	        return $this->getTypedRuleContext(UnaryExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterMultiplicativeExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitMultiplicativeExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitMultiplicativeExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_unaryExpr;
	    }

	    public function unaryExpr(): ?UnaryExprContext
	    {
	    	return $this->getTypedRuleContext(UnaryExprContext::class, 0);
	    }

	    public function primaryExpr(): ?PrimaryExprContext
	    {
	    	return $this->getTypedRuleContext(PrimaryExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterUnaryExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitUnaryExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitUnaryExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrimaryExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_primaryExpr;
	    }

	    public function functionCall(): ?FunctionCallContext
	    {
	    	return $this->getTypedRuleContext(FunctionCallContext::class, 0);
	    }

	    public function arrayAccess(): ?ArrayAccessContext
	    {
	    	return $this->getTypedRuleContext(ArrayAccessContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPrimaryExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPrimaryExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPrimaryExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayAccessContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayAccess;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayAccess($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayLiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayLiteral;
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_literal;
	    }

	    public function arrayLiteral(): ?ArrayLiteralContext
	    {
	    	return $this->getTypedRuleContext(ArrayLiteralContext::class, 0);
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT, 0);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT, 0);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING, 0);
	    }

	    public function BOOL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BOOL, 0);
	    }

	    public function RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNE, 0);
	    }

	    public function NIL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NIL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}