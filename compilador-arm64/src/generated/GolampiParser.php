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
               RULE_parameter = 3, RULE_block = 4, RULE_statement = 5, RULE_breakStmt = 6, 
               RULE_continueStmt = 7, RULE_forStmt = 8, RULE_forClassic = 9, 
               RULE_forConditional = 10, RULE_forInfinite = 11, RULE_forInit = 12, 
               RULE_forUpdate = 13, RULE_unaryUpdate = 14, RULE_switchStmt = 15, 
               RULE_switchCase = 16, RULE_defaultCase = 17, RULE_constDecl = 18, 
               RULE_arrayAssignment = 19, RULE_returnStmt = 20, RULE_functionCall = 21, 
               RULE_whileStmt = 22, RULE_ifStmt = 23, RULE_varDecl = 24, 
               RULE_idList = 25, RULE_exprList = 26, RULE_shortVarDecl = 27, 
               RULE_assignment = 28, RULE_assignOp = 29, RULE_type = 30, 
               RULE_arrayType = 31, RULE_primitiveType = 32, RULE_printStmt = 33, 
               RULE_argumentList = 34, RULE_expr = 35, RULE_logicalOrExpr = 36, 
               RULE_logicalAndExpr = 37, RULE_equalityExpr = 38, RULE_relationalExpr = 39, 
               RULE_additiveExpr = 40, RULE_multiplicativeExpr = 41, RULE_unaryExpr = 42, 
               RULE_primaryExpr = 43, RULE_literal = 44;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'functionDecl', 'parameterList', 'parameter', 'block', 'statement', 
			'breakStmt', 'continueStmt', 'forStmt', 'forClassic', 'forConditional', 
			'forInfinite', 'forInit', 'forUpdate', 'unaryUpdate', 'switchStmt', 'switchCase', 
			'defaultCase', 'constDecl', 'arrayAssignment', 'returnStmt', 'functionCall', 
			'whileStmt', 'ifStmt', 'varDecl', 'idList', 'exprList', 'shortVarDecl', 
			'assignment', 'assignOp', 'type', 'arrayType', 'primitiveType', 'printStmt', 
			'argumentList', 'expr', 'logicalOrExpr', 'logicalAndExpr', 'equalityExpr', 
			'relationalExpr', 'additiveExpr', 'multiplicativeExpr', 'unaryExpr', 
			'primaryExpr', 'literal'
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
			[4, 1, 62, 386, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 1, 0, 5, 0, 92, 8, 0, 10, 0, 12, 0, 95, 9, 
		    0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 103, 8, 1, 1, 1, 1, 1, 
		    1, 1, 1, 2, 1, 2, 1, 2, 5, 2, 111, 8, 2, 10, 2, 12, 2, 114, 9, 2, 
		    1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 5, 4, 121, 8, 4, 10, 4, 12, 4, 124, 
		    9, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 
		    1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 143, 8, 5, 1, 6, 1, 
		    6, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 3, 8, 152, 8, 8, 1, 9, 1, 9, 1, 9, 
		    1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 
		    11, 1, 11, 1, 12, 1, 12, 3, 12, 171, 8, 12, 1, 13, 1, 13, 3, 13, 175, 
		    8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 3, 14, 181, 8, 14, 1, 15, 1, 15, 
		    1, 15, 1, 15, 5, 15, 187, 8, 15, 10, 15, 12, 15, 190, 9, 15, 1, 15, 
		    3, 15, 193, 8, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 5, 16, 
		    201, 8, 16, 10, 16, 12, 16, 204, 9, 16, 1, 17, 1, 17, 1, 17, 5, 17, 
		    209, 8, 17, 10, 17, 12, 17, 212, 9, 17, 1, 18, 1, 18, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 4, 19, 225, 8, 19, 
		    11, 19, 12, 19, 226, 1, 19, 1, 19, 1, 19, 1, 20, 1, 20, 3, 20, 234, 
		    8, 20, 1, 21, 1, 21, 1, 21, 3, 21, 239, 8, 21, 1, 21, 1, 21, 1, 22, 
		    1, 22, 1, 22, 1, 22, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 23, 252, 
		    8, 23, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 3, 24, 259, 8, 24, 1, 25, 
		    1, 25, 1, 25, 5, 25, 264, 8, 25, 10, 25, 12, 25, 267, 9, 25, 1, 26, 
		    1, 26, 1, 26, 5, 26, 272, 8, 26, 10, 26, 12, 26, 275, 9, 26, 1, 27, 
		    1, 27, 1, 27, 1, 27, 1, 28, 1, 28, 1, 28, 1, 28, 1, 29, 1, 29, 1, 
		    30, 1, 30, 3, 30, 289, 8, 30, 1, 31, 1, 31, 1, 31, 4, 31, 294, 8, 
		    31, 11, 31, 12, 31, 295, 1, 31, 1, 31, 1, 32, 1, 32, 1, 33, 1, 33, 
		    1, 33, 1, 33, 1, 33, 3, 33, 307, 8, 33, 1, 33, 1, 33, 3, 33, 311, 
		    8, 33, 1, 34, 1, 34, 1, 34, 5, 34, 316, 8, 34, 10, 34, 12, 34, 319, 
		    9, 34, 1, 35, 1, 35, 1, 36, 1, 36, 1, 36, 5, 36, 326, 8, 36, 10, 36, 
		    12, 36, 329, 9, 36, 1, 37, 1, 37, 1, 37, 5, 37, 334, 8, 37, 10, 37, 
		    12, 37, 337, 9, 37, 1, 38, 1, 38, 1, 38, 5, 38, 342, 8, 38, 10, 38, 
		    12, 38, 345, 9, 38, 1, 39, 1, 39, 1, 39, 5, 39, 350, 8, 39, 10, 39, 
		    12, 39, 353, 9, 39, 1, 40, 1, 40, 1, 40, 5, 40, 358, 8, 40, 10, 40, 
		    12, 40, 361, 9, 40, 1, 41, 1, 41, 1, 41, 5, 41, 366, 8, 41, 10, 41, 
		    12, 41, 369, 9, 41, 1, 42, 1, 42, 1, 42, 3, 42, 374, 8, 42, 1, 43, 
		    1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 3, 43, 382, 8, 43, 1, 44, 1, 44, 
		    1, 44, 0, 0, 45, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 
		    28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 
		    62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 88, 0, 7, 2, 0, 
		    18, 18, 27, 30, 1, 0, 31, 35, 1, 0, 41, 42, 1, 0, 43, 46, 1, 0, 47, 
		    48, 1, 0, 49, 51, 1, 0, 53, 58, 388, 0, 93, 1, 0, 0, 0, 2, 98, 1, 
		    0, 0, 0, 4, 107, 1, 0, 0, 0, 6, 115, 1, 0, 0, 0, 8, 118, 1, 0, 0, 
		    0, 10, 142, 1, 0, 0, 0, 12, 144, 1, 0, 0, 0, 14, 146, 1, 0, 0, 0, 
		    16, 151, 1, 0, 0, 0, 18, 153, 1, 0, 0, 0, 20, 161, 1, 0, 0, 0, 22, 
		    165, 1, 0, 0, 0, 24, 170, 1, 0, 0, 0, 26, 174, 1, 0, 0, 0, 28, 180, 
		    1, 0, 0, 0, 30, 182, 1, 0, 0, 0, 32, 196, 1, 0, 0, 0, 34, 205, 1, 
		    0, 0, 0, 36, 213, 1, 0, 0, 0, 38, 219, 1, 0, 0, 0, 40, 231, 1, 0, 
		    0, 0, 42, 235, 1, 0, 0, 0, 44, 242, 1, 0, 0, 0, 46, 246, 1, 0, 0, 
		    0, 48, 253, 1, 0, 0, 0, 50, 260, 1, 0, 0, 0, 52, 268, 1, 0, 0, 0, 
		    54, 276, 1, 0, 0, 0, 56, 280, 1, 0, 0, 0, 58, 284, 1, 0, 0, 0, 60, 
		    288, 1, 0, 0, 0, 62, 293, 1, 0, 0, 0, 64, 299, 1, 0, 0, 0, 66, 301, 
		    1, 0, 0, 0, 68, 312, 1, 0, 0, 0, 70, 320, 1, 0, 0, 0, 72, 322, 1, 
		    0, 0, 0, 74, 330, 1, 0, 0, 0, 76, 338, 1, 0, 0, 0, 78, 346, 1, 0, 
		    0, 0, 80, 354, 1, 0, 0, 0, 82, 362, 1, 0, 0, 0, 84, 373, 1, 0, 0, 
		    0, 86, 381, 1, 0, 0, 0, 88, 383, 1, 0, 0, 0, 90, 92, 3, 2, 1, 0, 91, 
		    90, 1, 0, 0, 0, 92, 95, 1, 0, 0, 0, 93, 91, 1, 0, 0, 0, 93, 94, 1, 
		    0, 0, 0, 94, 96, 1, 0, 0, 0, 95, 93, 1, 0, 0, 0, 96, 97, 5, 0, 0, 
		    1, 97, 1, 1, 0, 0, 0, 98, 99, 5, 1, 0, 0, 99, 100, 5, 59, 0, 0, 100, 
		    102, 5, 2, 0, 0, 101, 103, 3, 4, 2, 0, 102, 101, 1, 0, 0, 0, 102, 
		    103, 1, 0, 0, 0, 103, 104, 1, 0, 0, 0, 104, 105, 5, 3, 0, 0, 105, 
		    106, 3, 8, 4, 0, 106, 3, 1, 0, 0, 0, 107, 112, 3, 6, 3, 0, 108, 109, 
		    5, 4, 0, 0, 109, 111, 3, 6, 3, 0, 110, 108, 1, 0, 0, 0, 111, 114, 
		    1, 0, 0, 0, 112, 110, 1, 0, 0, 0, 112, 113, 1, 0, 0, 0, 113, 5, 1, 
		    0, 0, 0, 114, 112, 1, 0, 0, 0, 115, 116, 5, 59, 0, 0, 116, 117, 3, 
		    60, 30, 0, 117, 7, 1, 0, 0, 0, 118, 122, 5, 5, 0, 0, 119, 121, 3, 
		    10, 5, 0, 120, 119, 1, 0, 0, 0, 121, 124, 1, 0, 0, 0, 122, 120, 1, 
		    0, 0, 0, 122, 123, 1, 0, 0, 0, 123, 125, 1, 0, 0, 0, 124, 122, 1, 
		    0, 0, 0, 125, 126, 5, 6, 0, 0, 126, 9, 1, 0, 0, 0, 127, 143, 3, 48, 
		    24, 0, 128, 143, 3, 54, 27, 0, 129, 143, 3, 56, 28, 0, 130, 143, 3, 
		    46, 23, 0, 131, 143, 3, 44, 22, 0, 132, 143, 3, 40, 20, 0, 133, 143, 
		    3, 42, 21, 0, 134, 143, 3, 66, 33, 0, 135, 143, 3, 38, 19, 0, 136, 
		    143, 3, 36, 18, 0, 137, 143, 3, 30, 15, 0, 138, 143, 3, 16, 8, 0, 
		    139, 143, 3, 12, 6, 0, 140, 143, 3, 14, 7, 0, 141, 143, 3, 28, 14, 
		    0, 142, 127, 1, 0, 0, 0, 142, 128, 1, 0, 0, 0, 142, 129, 1, 0, 0, 
		    0, 142, 130, 1, 0, 0, 0, 142, 131, 1, 0, 0, 0, 142, 132, 1, 0, 0, 
		    0, 142, 133, 1, 0, 0, 0, 142, 134, 1, 0, 0, 0, 142, 135, 1, 0, 0, 
		    0, 142, 136, 1, 0, 0, 0, 142, 137, 1, 0, 0, 0, 142, 138, 1, 0, 0, 
		    0, 142, 139, 1, 0, 0, 0, 142, 140, 1, 0, 0, 0, 142, 141, 1, 0, 0, 
		    0, 143, 11, 1, 0, 0, 0, 144, 145, 5, 7, 0, 0, 145, 13, 1, 0, 0, 0, 
		    146, 147, 5, 8, 0, 0, 147, 15, 1, 0, 0, 0, 148, 152, 3, 18, 9, 0, 
		    149, 152, 3, 20, 10, 0, 150, 152, 3, 22, 11, 0, 151, 148, 1, 0, 0, 
		    0, 151, 149, 1, 0, 0, 0, 151, 150, 1, 0, 0, 0, 152, 17, 1, 0, 0, 0, 
		    153, 154, 5, 9, 0, 0, 154, 155, 3, 24, 12, 0, 155, 156, 5, 10, 0, 
		    0, 156, 157, 3, 70, 35, 0, 157, 158, 5, 10, 0, 0, 158, 159, 3, 26, 
		    13, 0, 159, 160, 3, 8, 4, 0, 160, 19, 1, 0, 0, 0, 161, 162, 5, 9, 
		    0, 0, 162, 163, 3, 70, 35, 0, 163, 164, 3, 8, 4, 0, 164, 21, 1, 0, 
		    0, 0, 165, 166, 5, 9, 0, 0, 166, 167, 3, 8, 4, 0, 167, 23, 1, 0, 0, 
		    0, 168, 171, 3, 54, 27, 0, 169, 171, 3, 56, 28, 0, 170, 168, 1, 0, 
		    0, 0, 170, 169, 1, 0, 0, 0, 171, 25, 1, 0, 0, 0, 172, 175, 3, 56, 
		    28, 0, 173, 175, 3, 28, 14, 0, 174, 172, 1, 0, 0, 0, 174, 173, 1, 
		    0, 0, 0, 175, 27, 1, 0, 0, 0, 176, 177, 5, 59, 0, 0, 177, 181, 5, 
		    11, 0, 0, 178, 179, 5, 59, 0, 0, 179, 181, 5, 12, 0, 0, 180, 176, 
		    1, 0, 0, 0, 180, 178, 1, 0, 0, 0, 181, 29, 1, 0, 0, 0, 182, 183, 5, 
		    13, 0, 0, 183, 184, 3, 70, 35, 0, 184, 188, 5, 5, 0, 0, 185, 187, 
		    3, 32, 16, 0, 186, 185, 1, 0, 0, 0, 187, 190, 1, 0, 0, 0, 188, 186, 
		    1, 0, 0, 0, 188, 189, 1, 0, 0, 0, 189, 192, 1, 0, 0, 0, 190, 188, 
		    1, 0, 0, 0, 191, 193, 3, 34, 17, 0, 192, 191, 1, 0, 0, 0, 192, 193, 
		    1, 0, 0, 0, 193, 194, 1, 0, 0, 0, 194, 195, 5, 6, 0, 0, 195, 31, 1, 
		    0, 0, 0, 196, 197, 5, 14, 0, 0, 197, 198, 3, 70, 35, 0, 198, 202, 
		    5, 15, 0, 0, 199, 201, 3, 10, 5, 0, 200, 199, 1, 0, 0, 0, 201, 204, 
		    1, 0, 0, 0, 202, 200, 1, 0, 0, 0, 202, 203, 1, 0, 0, 0, 203, 33, 1, 
		    0, 0, 0, 204, 202, 1, 0, 0, 0, 205, 206, 5, 16, 0, 0, 206, 210, 5, 
		    15, 0, 0, 207, 209, 3, 10, 5, 0, 208, 207, 1, 0, 0, 0, 209, 212, 1, 
		    0, 0, 0, 210, 208, 1, 0, 0, 0, 210, 211, 1, 0, 0, 0, 211, 35, 1, 0, 
		    0, 0, 212, 210, 1, 0, 0, 0, 213, 214, 5, 17, 0, 0, 214, 215, 5, 59, 
		    0, 0, 215, 216, 3, 60, 30, 0, 216, 217, 5, 18, 0, 0, 217, 218, 3, 
		    70, 35, 0, 218, 37, 1, 0, 0, 0, 219, 224, 5, 59, 0, 0, 220, 221, 5, 
		    19, 0, 0, 221, 222, 3, 70, 35, 0, 222, 223, 5, 20, 0, 0, 223, 225, 
		    1, 0, 0, 0, 224, 220, 1, 0, 0, 0, 225, 226, 1, 0, 0, 0, 226, 224, 
		    1, 0, 0, 0, 226, 227, 1, 0, 0, 0, 227, 228, 1, 0, 0, 0, 228, 229, 
		    5, 18, 0, 0, 229, 230, 3, 70, 35, 0, 230, 39, 1, 0, 0, 0, 231, 233, 
		    5, 21, 0, 0, 232, 234, 3, 70, 35, 0, 233, 232, 1, 0, 0, 0, 233, 234, 
		    1, 0, 0, 0, 234, 41, 1, 0, 0, 0, 235, 236, 5, 59, 0, 0, 236, 238, 
		    5, 2, 0, 0, 237, 239, 3, 68, 34, 0, 238, 237, 1, 0, 0, 0, 238, 239, 
		    1, 0, 0, 0, 239, 240, 1, 0, 0, 0, 240, 241, 5, 3, 0, 0, 241, 43, 1, 
		    0, 0, 0, 242, 243, 5, 22, 0, 0, 243, 244, 3, 70, 35, 0, 244, 245, 
		    3, 8, 4, 0, 245, 45, 1, 0, 0, 0, 246, 247, 5, 23, 0, 0, 247, 248, 
		    3, 70, 35, 0, 248, 251, 3, 8, 4, 0, 249, 250, 5, 24, 0, 0, 250, 252, 
		    3, 8, 4, 0, 251, 249, 1, 0, 0, 0, 251, 252, 1, 0, 0, 0, 252, 47, 1, 
		    0, 0, 0, 253, 254, 5, 25, 0, 0, 254, 255, 3, 50, 25, 0, 255, 258, 
		    3, 60, 30, 0, 256, 257, 5, 18, 0, 0, 257, 259, 3, 52, 26, 0, 258, 
		    256, 1, 0, 0, 0, 258, 259, 1, 0, 0, 0, 259, 49, 1, 0, 0, 0, 260, 265, 
		    5, 59, 0, 0, 261, 262, 5, 4, 0, 0, 262, 264, 5, 59, 0, 0, 263, 261, 
		    1, 0, 0, 0, 264, 267, 1, 0, 0, 0, 265, 263, 1, 0, 0, 0, 265, 266, 
		    1, 0, 0, 0, 266, 51, 1, 0, 0, 0, 267, 265, 1, 0, 0, 0, 268, 273, 3, 
		    70, 35, 0, 269, 270, 5, 4, 0, 0, 270, 272, 3, 70, 35, 0, 271, 269, 
		    1, 0, 0, 0, 272, 275, 1, 0, 0, 0, 273, 271, 1, 0, 0, 0, 273, 274, 
		    1, 0, 0, 0, 274, 53, 1, 0, 0, 0, 275, 273, 1, 0, 0, 0, 276, 277, 3, 
		    50, 25, 0, 277, 278, 5, 26, 0, 0, 278, 279, 3, 52, 26, 0, 279, 55, 
		    1, 0, 0, 0, 280, 281, 5, 59, 0, 0, 281, 282, 3, 58, 29, 0, 282, 283, 
		    3, 70, 35, 0, 283, 57, 1, 0, 0, 0, 284, 285, 7, 0, 0, 0, 285, 59, 
		    1, 0, 0, 0, 286, 289, 3, 62, 31, 0, 287, 289, 3, 64, 32, 0, 288, 286, 
		    1, 0, 0, 0, 288, 287, 1, 0, 0, 0, 289, 61, 1, 0, 0, 0, 290, 291, 5, 
		    19, 0, 0, 291, 292, 5, 53, 0, 0, 292, 294, 5, 20, 0, 0, 293, 290, 
		    1, 0, 0, 0, 294, 295, 1, 0, 0, 0, 295, 293, 1, 0, 0, 0, 295, 296, 
		    1, 0, 0, 0, 296, 297, 1, 0, 0, 0, 297, 298, 3, 64, 32, 0, 298, 63, 
		    1, 0, 0, 0, 299, 300, 7, 1, 0, 0, 300, 65, 1, 0, 0, 0, 301, 302, 5, 
		    36, 0, 0, 302, 303, 5, 37, 0, 0, 303, 304, 5, 38, 0, 0, 304, 306, 
		    5, 2, 0, 0, 305, 307, 3, 68, 34, 0, 306, 305, 1, 0, 0, 0, 306, 307, 
		    1, 0, 0, 0, 307, 308, 1, 0, 0, 0, 308, 310, 5, 3, 0, 0, 309, 311, 
		    5, 10, 0, 0, 310, 309, 1, 0, 0, 0, 310, 311, 1, 0, 0, 0, 311, 67, 
		    1, 0, 0, 0, 312, 317, 3, 70, 35, 0, 313, 314, 5, 4, 0, 0, 314, 316, 
		    3, 70, 35, 0, 315, 313, 1, 0, 0, 0, 316, 319, 1, 0, 0, 0, 317, 315, 
		    1, 0, 0, 0, 317, 318, 1, 0, 0, 0, 318, 69, 1, 0, 0, 0, 319, 317, 1, 
		    0, 0, 0, 320, 321, 3, 72, 36, 0, 321, 71, 1, 0, 0, 0, 322, 327, 3, 
		    74, 37, 0, 323, 324, 5, 39, 0, 0, 324, 326, 3, 74, 37, 0, 325, 323, 
		    1, 0, 0, 0, 326, 329, 1, 0, 0, 0, 327, 325, 1, 0, 0, 0, 327, 328, 
		    1, 0, 0, 0, 328, 73, 1, 0, 0, 0, 329, 327, 1, 0, 0, 0, 330, 335, 3, 
		    76, 38, 0, 331, 332, 5, 40, 0, 0, 332, 334, 3, 76, 38, 0, 333, 331, 
		    1, 0, 0, 0, 334, 337, 1, 0, 0, 0, 335, 333, 1, 0, 0, 0, 335, 336, 
		    1, 0, 0, 0, 336, 75, 1, 0, 0, 0, 337, 335, 1, 0, 0, 0, 338, 343, 3, 
		    78, 39, 0, 339, 340, 7, 2, 0, 0, 340, 342, 3, 78, 39, 0, 341, 339, 
		    1, 0, 0, 0, 342, 345, 1, 0, 0, 0, 343, 341, 1, 0, 0, 0, 343, 344, 
		    1, 0, 0, 0, 344, 77, 1, 0, 0, 0, 345, 343, 1, 0, 0, 0, 346, 351, 3, 
		    80, 40, 0, 347, 348, 7, 3, 0, 0, 348, 350, 3, 80, 40, 0, 349, 347, 
		    1, 0, 0, 0, 350, 353, 1, 0, 0, 0, 351, 349, 1, 0, 0, 0, 351, 352, 
		    1, 0, 0, 0, 352, 79, 1, 0, 0, 0, 353, 351, 1, 0, 0, 0, 354, 359, 3, 
		    82, 41, 0, 355, 356, 7, 4, 0, 0, 356, 358, 3, 82, 41, 0, 357, 355, 
		    1, 0, 0, 0, 358, 361, 1, 0, 0, 0, 359, 357, 1, 0, 0, 0, 359, 360, 
		    1, 0, 0, 0, 360, 81, 1, 0, 0, 0, 361, 359, 1, 0, 0, 0, 362, 367, 3, 
		    84, 42, 0, 363, 364, 7, 5, 0, 0, 364, 366, 3, 84, 42, 0, 365, 363, 
		    1, 0, 0, 0, 366, 369, 1, 0, 0, 0, 367, 365, 1, 0, 0, 0, 367, 368, 
		    1, 0, 0, 0, 368, 83, 1, 0, 0, 0, 369, 367, 1, 0, 0, 0, 370, 371, 5, 
		    52, 0, 0, 371, 374, 3, 84, 42, 0, 372, 374, 3, 86, 43, 0, 373, 370, 
		    1, 0, 0, 0, 373, 372, 1, 0, 0, 0, 374, 85, 1, 0, 0, 0, 375, 376, 5, 
		    2, 0, 0, 376, 377, 3, 70, 35, 0, 377, 378, 5, 3, 0, 0, 378, 382, 1, 
		    0, 0, 0, 379, 382, 3, 88, 44, 0, 380, 382, 5, 59, 0, 0, 381, 375, 
		    1, 0, 0, 0, 381, 379, 1, 0, 0, 0, 381, 380, 1, 0, 0, 0, 382, 87, 1, 
		    0, 0, 0, 383, 384, 7, 6, 0, 0, 384, 89, 1, 0, 0, 0, 33, 93, 102, 112, 
		    122, 142, 151, 170, 174, 180, 188, 192, 202, 210, 226, 233, 238, 251, 
		    258, 265, 273, 288, 295, 306, 310, 317, 327, 335, 343, 351, 359, 367, 
		    373, 381];
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
		        $this->setState(93);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__0) {
		        	$this->setState(90);
		        	$this->functionDecl();
		        	$this->setState(95);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(96);
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
		        $this->setState(98);
		        $this->match(self::T__0);
		        $this->setState(99);
		        $this->match(self::ID);
		        $this->setState(100);
		        $this->match(self::T__1);
		        $this->setState(102);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(101);
		        	$this->parameterList();
		        }
		        $this->setState(104);
		        $this->match(self::T__2);
		        $this->setState(105);
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
		        $this->setState(107);
		        $this->parameter();
		        $this->setState(112);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(108);
		        	$this->match(self::T__3);
		        	$this->setState(109);
		        	$this->parameter();
		        	$this->setState(114);
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
		        $this->setState(115);
		        $this->match(self::ID);
		        $this->setState(116);
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

		    $this->enterRule($localContext, 8, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(118);
		        $this->match(self::T__4);
		        $this->setState(122);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 576460821071274880) !== 0)) {
		        	$this->setState(119);
		        	$this->statement();
		        	$this->setState(124);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(125);
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

		    $this->enterRule($localContext, 10, self::RULE_statement);

		    try {
		        $this->setState(142);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(127);
		        	    $this->varDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(128);
		        	    $this->shortVarDecl();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(129);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(130);
		        	    $this->ifStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(131);
		        	    $this->whileStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(132);
		        	    $this->returnStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(133);
		        	    $this->functionCall();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(134);
		        	    $this->printStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(135);
		        	    $this->arrayAssignment();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(136);
		        	    $this->constDecl();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(137);
		        	    $this->switchStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(138);
		        	    $this->forStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(139);
		        	    $this->breakStmt();
		        	break;

		        	case 14:
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(140);
		        	    $this->continueStmt();
		        	break;

		        	case 15:
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(141);
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

		    $this->enterRule($localContext, 12, self::RULE_breakStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(144);
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

		    $this->enterRule($localContext, 14, self::RULE_continueStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(146);
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

		    $this->enterRule($localContext, 16, self::RULE_forStmt);

		    try {
		        $this->setState(151);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(148);
		        	    $this->forClassic();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(149);
		        	    $this->forConditional();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(150);
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

		    $this->enterRule($localContext, 18, self::RULE_forClassic);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(153);
		        $this->match(self::T__8);
		        $this->setState(154);
		        $this->forInit();
		        $this->setState(155);
		        $this->match(self::T__9);
		        $this->setState(156);
		        $this->expr();
		        $this->setState(157);
		        $this->match(self::T__9);
		        $this->setState(158);
		        $this->forUpdate();
		        $this->setState(159);
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

		    $this->enterRule($localContext, 20, self::RULE_forConditional);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(161);
		        $this->match(self::T__8);
		        $this->setState(162);
		        $this->expr();
		        $this->setState(163);
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

		    $this->enterRule($localContext, 22, self::RULE_forInfinite);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(165);
		        $this->match(self::T__8);
		        $this->setState(166);
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

		    $this->enterRule($localContext, 24, self::RULE_forInit);

		    try {
		        $this->setState(170);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(168);
		        	    $this->shortVarDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(169);
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

		    $this->enterRule($localContext, 26, self::RULE_forUpdate);

		    try {
		        $this->setState(174);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(172);
		        	    $this->assignment();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(173);
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

		    $this->enterRule($localContext, 28, self::RULE_unaryUpdate);

		    try {
		        $this->setState(180);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(176);
		        	    $this->match(self::ID);
		        	    $this->setState(177);
		        	    $this->match(self::T__10);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(178);
		        	    $this->match(self::ID);
		        	    $this->setState(179);
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

		    $this->enterRule($localContext, 30, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(182);
		        $this->match(self::T__12);
		        $this->setState(183);
		        $this->expr();
		        $this->setState(184);
		        $this->match(self::T__4);
		        $this->setState(188);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__13) {
		        	$this->setState(185);
		        	$this->switchCase();
		        	$this->setState(190);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(192);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__15) {
		        	$this->setState(191);
		        	$this->defaultCase();
		        }
		        $this->setState(194);
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

		    $this->enterRule($localContext, 32, self::RULE_switchCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(196);
		        $this->match(self::T__13);
		        $this->setState(197);
		        $this->expr();
		        $this->setState(198);
		        $this->match(self::T__14);
		        $this->setState(202);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 576460821071274880) !== 0)) {
		        	$this->setState(199);
		        	$this->statement();
		        	$this->setState(204);
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

		    $this->enterRule($localContext, 34, self::RULE_defaultCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(205);
		        $this->match(self::T__15);
		        $this->setState(206);
		        $this->match(self::T__14);
		        $this->setState(210);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 576460821071274880) !== 0)) {
		        	$this->setState(207);
		        	$this->statement();
		        	$this->setState(212);
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

		    $this->enterRule($localContext, 36, self::RULE_constDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(213);
		        $this->match(self::T__16);
		        $this->setState(214);
		        $this->match(self::ID);
		        $this->setState(215);
		        $this->type();
		        $this->setState(216);
		        $this->match(self::T__17);
		        $this->setState(217);
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

		    $this->enterRule($localContext, 38, self::RULE_arrayAssignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(219);
		        $this->match(self::ID);
		        $this->setState(224); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(220);
		        	$this->match(self::T__18);
		        	$this->setState(221);
		        	$this->expr();
		        	$this->setState(222);
		        	$this->match(self::T__19);
		        	$this->setState(226); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__18);
		        $this->setState(228);
		        $this->match(self::T__17);
		        $this->setState(229);
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

		    $this->enterRule($localContext, 40, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(231);
		        $this->match(self::T__20);
		        $this->setState(233);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		            case 1:
		        	    $this->setState(232);
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

		    $this->enterRule($localContext, 42, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(235);
		        $this->match(self::ID);
		        $this->setState(236);
		        $this->match(self::T__1);
		        $this->setState(238);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1148417904979476484) !== 0)) {
		        	$this->setState(237);
		        	$this->argumentList();
		        }
		        $this->setState(240);
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

		    $this->enterRule($localContext, 44, self::RULE_whileStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(242);
		        $this->match(self::T__21);
		        $this->setState(243);
		        $this->expr();
		        $this->setState(244);
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

		    $this->enterRule($localContext, 46, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(246);
		        $this->match(self::T__22);
		        $this->setState(247);
		        $this->expr();
		        $this->setState(248);
		        $this->block();
		        $this->setState(251);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__23) {
		        	$this->setState(249);
		        	$this->match(self::T__23);
		        	$this->setState(250);
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

		    $this->enterRule($localContext, 48, self::RULE_varDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(253);
		        $this->match(self::T__24);
		        $this->setState(254);
		        $this->idList();
		        $this->setState(255);
		        $this->type();
		        $this->setState(258);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__17) {
		        	$this->setState(256);
		        	$this->match(self::T__17);
		        	$this->setState(257);
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

		    $this->enterRule($localContext, 50, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(260);
		        $this->match(self::ID);
		        $this->setState(265);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(261);
		        	$this->match(self::T__3);
		        	$this->setState(262);
		        	$this->match(self::ID);
		        	$this->setState(267);
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

		    $this->enterRule($localContext, 52, self::RULE_exprList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(268);
		        $this->expr();
		        $this->setState(273);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(269);
		        	$this->match(self::T__3);
		        	$this->setState(270);
		        	$this->expr();
		        	$this->setState(275);
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

		    $this->enterRule($localContext, 54, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(276);
		        $this->idList();
		        $this->setState(277);
		        $this->match(self::T__25);
		        $this->setState(278);
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

		    $this->enterRule($localContext, 56, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(280);
		        $this->match(self::ID);
		        $this->setState(281);
		        $this->assignOp();
		        $this->setState(282);
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

		    $this->enterRule($localContext, 58, self::RULE_assignOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(284);

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

		    $this->enterRule($localContext, 60, self::RULE_type);

		    try {
		        $this->setState(288);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__18:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(286);
		            	$this->arrayType();
		            	break;

		            case self::T__30:
		            case self::T__31:
		            case self::T__32:
		            case self::T__33:
		            case self::T__34:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(287);
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

		    $this->enterRule($localContext, 62, self::RULE_arrayType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(293); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(290);
		        	$this->match(self::T__18);
		        	$this->setState(291);
		        	$this->match(self::INT);
		        	$this->setState(292);
		        	$this->match(self::T__19);
		        	$this->setState(295); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__18);
		        $this->setState(297);
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

		    $this->enterRule($localContext, 64, self::RULE_primitiveType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(299);

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

		    $this->enterRule($localContext, 66, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(301);
		        $this->match(self::T__35);
		        $this->setState(302);
		        $this->match(self::T__36);
		        $this->setState(303);
		        $this->match(self::T__37);
		        $this->setState(304);
		        $this->match(self::T__1);
		        $this->setState(306);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1148417904979476484) !== 0)) {
		        	$this->setState(305);
		        	$this->argumentList();
		        }
		        $this->setState(308);
		        $this->match(self::T__2);
		        $this->setState(310);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__9) {
		        	$this->setState(309);
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

		    $this->enterRule($localContext, 68, self::RULE_argumentList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(312);
		        $this->expr();
		        $this->setState(317);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(313);
		        	$this->match(self::T__3);
		        	$this->setState(314);
		        	$this->expr();
		        	$this->setState(319);
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

		    $this->enterRule($localContext, 70, self::RULE_expr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(320);
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

		    $this->enterRule($localContext, 72, self::RULE_logicalOrExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(322);
		        $this->logicalAndExpr();
		        $this->setState(327);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__38) {
		        	$this->setState(323);
		        	$this->match(self::T__38);
		        	$this->setState(324);
		        	$this->logicalAndExpr();
		        	$this->setState(329);
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

		    $this->enterRule($localContext, 74, self::RULE_logicalAndExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(330);
		        $this->equalityExpr();
		        $this->setState(335);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__39) {
		        	$this->setState(331);
		        	$this->match(self::T__39);
		        	$this->setState(332);
		        	$this->equalityExpr();
		        	$this->setState(337);
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

		    $this->enterRule($localContext, 76, self::RULE_equalityExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(338);
		        $this->relationalExpr();
		        $this->setState(343);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__40 || $_la === self::T__41) {
		        	$this->setState(339);

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
		        	$this->setState(340);
		        	$this->relationalExpr();
		        	$this->setState(345);
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

		    $this->enterRule($localContext, 78, self::RULE_relationalExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(346);
		        $this->additiveExpr();
		        $this->setState(351);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131941395333120) !== 0)) {
		        	$this->setState(347);

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
		        	$this->setState(348);
		        	$this->additiveExpr();
		        	$this->setState(353);
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

		    $this->enterRule($localContext, 80, self::RULE_additiveExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(354);
		        $this->multiplicativeExpr();
		        $this->setState(359);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__46 || $_la === self::T__47) {
		        	$this->setState(355);

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
		        	$this->setState(356);
		        	$this->multiplicativeExpr();
		        	$this->setState(361);
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

		    $this->enterRule($localContext, 82, self::RULE_multiplicativeExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(362);
		        $this->unaryExpr();
		        $this->setState(367);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3940649673949184) !== 0)) {
		        	$this->setState(363);

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
		        	$this->setState(364);
		        	$this->unaryExpr();
		        	$this->setState(369);
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

		    $this->enterRule($localContext, 84, self::RULE_unaryExpr);

		    try {
		        $this->setState(373);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__51:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(370);
		            	$this->match(self::T__51);
		            	$this->setState(371);
		            	$this->unaryExpr();
		            	break;

		            case self::T__1:
		            case self::INT:
		            case self::FLOAT:
		            case self::STRING:
		            case self::RUNE:
		            case self::BOOL:
		            case self::NIL:
		            case self::ID:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(372);
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

		    $this->enterRule($localContext, 86, self::RULE_primaryExpr);

		    try {
		        $this->setState(381);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__1:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(375);
		            	$this->match(self::T__1);
		            	$this->setState(376);
		            	$this->expr();
		            	$this->setState(377);
		            	$this->match(self::T__2);
		            	break;

		            case self::INT:
		            case self::FLOAT:
		            case self::STRING:
		            case self::RUNE:
		            case self::BOOL:
		            case self::NIL:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(379);
		            	$this->literal();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(380);
		            	$this->match(self::ID);
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
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(383);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 567453553048682496) !== 0))) {
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