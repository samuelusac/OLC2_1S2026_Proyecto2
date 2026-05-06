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
               T__37 = 38, T__38 = 39, INT = 40, FLOAT = 41, STRING = 42, 
               RUNE = 43, BOOL = 44, NIL = 45, ID = 46, WS = 47, LINE_COMMENT = 48, 
               BLOCK_COMMENT = 49;

		public const RULE_program = 0, RULE_functionDecl = 1, RULE_parameterList = 2, 
               RULE_parameter = 3, RULE_block = 4, RULE_statement = 5, RULE_constDecl = 6, 
               RULE_arrayAssignment = 7, RULE_returnStmt = 8, RULE_functionCall = 9, 
               RULE_whileStmt = 10, RULE_ifStmt = 11, RULE_varDecl = 12, 
               RULE_idList = 13, RULE_exprList = 14, RULE_shortVarDecl = 15, 
               RULE_assignment = 16, RULE_type = 17, RULE_arrayType = 18, 
               RULE_primitiveType = 19, RULE_printStmt = 20, RULE_argumentList = 21, 
               RULE_expr = 22, RULE_literal = 23;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'functionDecl', 'parameterList', 'parameter', 'block', 'statement', 
			'constDecl', 'arrayAssignment', 'returnStmt', 'functionCall', 'whileStmt', 
			'ifStmt', 'varDecl', 'idList', 'exprList', 'shortVarDecl', 'assignment', 
			'type', 'arrayType', 'primitiveType', 'printStmt', 'argumentList', 'expr', 
			'literal'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'func'", "'('", "')'", "','", "'{'", "'}'", "'const'", "'='", 
		    "'['", "']'", "'return'", "'while'", "'if'", "'else'", "'var'", "':='", 
		    "'int32'", "'float32'", "'bool'", "'string'", "'rune'", "'fmt'", "'.'", 
		    "'Println'", "';'", "'||'", "'&&'", "'=='", "'!='", "'<'", "'>'", 
		    "'<='", "'>='", "'+'", "'-'", "'*'", "'/'", "'%'", "'!'", null, null, 
		    null, null, null, "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, "INT", "FLOAT", "STRING", 
		    "RUNE", "BOOL", "NIL", "ID", "WS", "LINE_COMMENT", "BLOCK_COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 49, 269, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 1, 
		    0, 5, 0, 50, 8, 0, 10, 0, 12, 0, 53, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 
		    1, 1, 1, 1, 3, 1, 61, 8, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 5, 
		    2, 69, 8, 2, 10, 2, 12, 2, 72, 9, 2, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 
		    5, 4, 79, 8, 4, 10, 4, 12, 4, 82, 9, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 
		    5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 96, 8, 5, 1, 6, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 4, 7, 
		    109, 8, 7, 11, 7, 12, 7, 110, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 3, 8, 
		    118, 8, 8, 1, 9, 1, 9, 1, 9, 3, 9, 123, 8, 9, 1, 9, 1, 9, 1, 10, 1, 
		    10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 136, 8, 
		    11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 143, 8, 12, 1, 13, 1, 
		    13, 1, 13, 5, 13, 148, 8, 13, 10, 13, 12, 13, 151, 9, 13, 1, 14, 1, 
		    14, 1, 14, 5, 14, 156, 8, 14, 10, 14, 12, 14, 159, 9, 14, 1, 15, 1, 
		    15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 3, 17, 
		    171, 8, 17, 1, 18, 1, 18, 1, 18, 4, 18, 176, 8, 18, 11, 18, 12, 18, 
		    177, 1, 18, 1, 18, 1, 19, 1, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    3, 20, 189, 8, 20, 1, 20, 1, 20, 3, 20, 193, 8, 20, 1, 21, 1, 21, 
		    1, 21, 5, 21, 198, 8, 21, 10, 21, 12, 21, 201, 9, 21, 1, 22, 1, 22, 
		    1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 
		    22, 1, 22, 4, 22, 216, 8, 22, 11, 22, 12, 22, 217, 1, 22, 3, 22, 221, 
		    8, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 
		    22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 
		    1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 
		    22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 
		    1, 22, 1, 22, 5, 22, 262, 8, 22, 10, 22, 12, 22, 265, 9, 22, 1, 23, 
		    1, 23, 1, 23, 0, 1, 44, 24, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 
		    22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 0, 2, 1, 0, 17, 
		    21, 1, 0, 40, 45, 287, 0, 51, 1, 0, 0, 0, 2, 56, 1, 0, 0, 0, 4, 65, 
		    1, 0, 0, 0, 6, 73, 1, 0, 0, 0, 8, 76, 1, 0, 0, 0, 10, 95, 1, 0, 0, 
		    0, 12, 97, 1, 0, 0, 0, 14, 103, 1, 0, 0, 0, 16, 115, 1, 0, 0, 0, 18, 
		    119, 1, 0, 0, 0, 20, 126, 1, 0, 0, 0, 22, 130, 1, 0, 0, 0, 24, 137, 
		    1, 0, 0, 0, 26, 144, 1, 0, 0, 0, 28, 152, 1, 0, 0, 0, 30, 160, 1, 
		    0, 0, 0, 32, 164, 1, 0, 0, 0, 34, 170, 1, 0, 0, 0, 36, 175, 1, 0, 
		    0, 0, 38, 181, 1, 0, 0, 0, 40, 183, 1, 0, 0, 0, 42, 194, 1, 0, 0, 
		    0, 44, 220, 1, 0, 0, 0, 46, 266, 1, 0, 0, 0, 48, 50, 3, 2, 1, 0, 49, 
		    48, 1, 0, 0, 0, 50, 53, 1, 0, 0, 0, 51, 49, 1, 0, 0, 0, 51, 52, 1, 
		    0, 0, 0, 52, 54, 1, 0, 0, 0, 53, 51, 1, 0, 0, 0, 54, 55, 5, 0, 0, 
		    1, 55, 1, 1, 0, 0, 0, 56, 57, 5, 1, 0, 0, 57, 58, 5, 46, 0, 0, 58, 
		    60, 5, 2, 0, 0, 59, 61, 3, 4, 2, 0, 60, 59, 1, 0, 0, 0, 60, 61, 1, 
		    0, 0, 0, 61, 62, 1, 0, 0, 0, 62, 63, 5, 3, 0, 0, 63, 64, 3, 8, 4, 
		    0, 64, 3, 1, 0, 0, 0, 65, 70, 3, 6, 3, 0, 66, 67, 5, 4, 0, 0, 67, 
		    69, 3, 6, 3, 0, 68, 66, 1, 0, 0, 0, 69, 72, 1, 0, 0, 0, 70, 68, 1, 
		    0, 0, 0, 70, 71, 1, 0, 0, 0, 71, 5, 1, 0, 0, 0, 72, 70, 1, 0, 0, 0, 
		    73, 74, 5, 46, 0, 0, 74, 75, 3, 34, 17, 0, 75, 7, 1, 0, 0, 0, 76, 
		    80, 5, 5, 0, 0, 77, 79, 3, 10, 5, 0, 78, 77, 1, 0, 0, 0, 79, 82, 1, 
		    0, 0, 0, 80, 78, 1, 0, 0, 0, 80, 81, 1, 0, 0, 0, 81, 83, 1, 0, 0, 
		    0, 82, 80, 1, 0, 0, 0, 83, 84, 5, 6, 0, 0, 84, 9, 1, 0, 0, 0, 85, 
		    96, 3, 24, 12, 0, 86, 96, 3, 30, 15, 0, 87, 96, 3, 32, 16, 0, 88, 
		    96, 3, 22, 11, 0, 89, 96, 3, 20, 10, 0, 90, 96, 3, 16, 8, 0, 91, 96, 
		    3, 18, 9, 0, 92, 96, 3, 40, 20, 0, 93, 96, 3, 14, 7, 0, 94, 96, 3, 
		    12, 6, 0, 95, 85, 1, 0, 0, 0, 95, 86, 1, 0, 0, 0, 95, 87, 1, 0, 0, 
		    0, 95, 88, 1, 0, 0, 0, 95, 89, 1, 0, 0, 0, 95, 90, 1, 0, 0, 0, 95, 
		    91, 1, 0, 0, 0, 95, 92, 1, 0, 0, 0, 95, 93, 1, 0, 0, 0, 95, 94, 1, 
		    0, 0, 0, 96, 11, 1, 0, 0, 0, 97, 98, 5, 7, 0, 0, 98, 99, 5, 46, 0, 
		    0, 99, 100, 3, 34, 17, 0, 100, 101, 5, 8, 0, 0, 101, 102, 3, 44, 22, 
		    0, 102, 13, 1, 0, 0, 0, 103, 108, 5, 46, 0, 0, 104, 105, 5, 9, 0, 
		    0, 105, 106, 3, 44, 22, 0, 106, 107, 5, 10, 0, 0, 107, 109, 1, 0, 
		    0, 0, 108, 104, 1, 0, 0, 0, 109, 110, 1, 0, 0, 0, 110, 108, 1, 0, 
		    0, 0, 110, 111, 1, 0, 0, 0, 111, 112, 1, 0, 0, 0, 112, 113, 5, 8, 
		    0, 0, 113, 114, 3, 44, 22, 0, 114, 15, 1, 0, 0, 0, 115, 117, 5, 11, 
		    0, 0, 116, 118, 3, 44, 22, 0, 117, 116, 1, 0, 0, 0, 117, 118, 1, 0, 
		    0, 0, 118, 17, 1, 0, 0, 0, 119, 120, 5, 46, 0, 0, 120, 122, 5, 2, 
		    0, 0, 121, 123, 3, 42, 21, 0, 122, 121, 1, 0, 0, 0, 122, 123, 1, 0, 
		    0, 0, 123, 124, 1, 0, 0, 0, 124, 125, 5, 3, 0, 0, 125, 19, 1, 0, 0, 
		    0, 126, 127, 5, 12, 0, 0, 127, 128, 3, 44, 22, 0, 128, 129, 3, 8, 
		    4, 0, 129, 21, 1, 0, 0, 0, 130, 131, 5, 13, 0, 0, 131, 132, 3, 44, 
		    22, 0, 132, 135, 3, 8, 4, 0, 133, 134, 5, 14, 0, 0, 134, 136, 3, 8, 
		    4, 0, 135, 133, 1, 0, 0, 0, 135, 136, 1, 0, 0, 0, 136, 23, 1, 0, 0, 
		    0, 137, 138, 5, 15, 0, 0, 138, 139, 3, 26, 13, 0, 139, 142, 3, 34, 
		    17, 0, 140, 141, 5, 8, 0, 0, 141, 143, 3, 28, 14, 0, 142, 140, 1, 
		    0, 0, 0, 142, 143, 1, 0, 0, 0, 143, 25, 1, 0, 0, 0, 144, 149, 5, 46, 
		    0, 0, 145, 146, 5, 4, 0, 0, 146, 148, 5, 46, 0, 0, 147, 145, 1, 0, 
		    0, 0, 148, 151, 1, 0, 0, 0, 149, 147, 1, 0, 0, 0, 149, 150, 1, 0, 
		    0, 0, 150, 27, 1, 0, 0, 0, 151, 149, 1, 0, 0, 0, 152, 157, 3, 44, 
		    22, 0, 153, 154, 5, 4, 0, 0, 154, 156, 3, 44, 22, 0, 155, 153, 1, 
		    0, 0, 0, 156, 159, 1, 0, 0, 0, 157, 155, 1, 0, 0, 0, 157, 158, 1, 
		    0, 0, 0, 158, 29, 1, 0, 0, 0, 159, 157, 1, 0, 0, 0, 160, 161, 3, 26, 
		    13, 0, 161, 162, 5, 16, 0, 0, 162, 163, 3, 28, 14, 0, 163, 31, 1, 
		    0, 0, 0, 164, 165, 5, 46, 0, 0, 165, 166, 5, 8, 0, 0, 166, 167, 3, 
		    44, 22, 0, 167, 33, 1, 0, 0, 0, 168, 171, 3, 36, 18, 0, 169, 171, 
		    3, 38, 19, 0, 170, 168, 1, 0, 0, 0, 170, 169, 1, 0, 0, 0, 171, 35, 
		    1, 0, 0, 0, 172, 173, 5, 9, 0, 0, 173, 174, 5, 40, 0, 0, 174, 176, 
		    5, 10, 0, 0, 175, 172, 1, 0, 0, 0, 176, 177, 1, 0, 0, 0, 177, 175, 
		    1, 0, 0, 0, 177, 178, 1, 0, 0, 0, 178, 179, 1, 0, 0, 0, 179, 180, 
		    3, 38, 19, 0, 180, 37, 1, 0, 0, 0, 181, 182, 7, 0, 0, 0, 182, 39, 
		    1, 0, 0, 0, 183, 184, 5, 22, 0, 0, 184, 185, 5, 23, 0, 0, 185, 186, 
		    5, 24, 0, 0, 186, 188, 5, 2, 0, 0, 187, 189, 3, 42, 21, 0, 188, 187, 
		    1, 0, 0, 0, 188, 189, 1, 0, 0, 0, 189, 190, 1, 0, 0, 0, 190, 192, 
		    5, 3, 0, 0, 191, 193, 5, 25, 0, 0, 192, 191, 1, 0, 0, 0, 192, 193, 
		    1, 0, 0, 0, 193, 41, 1, 0, 0, 0, 194, 199, 3, 44, 22, 0, 195, 196, 
		    5, 4, 0, 0, 196, 198, 3, 44, 22, 0, 197, 195, 1, 0, 0, 0, 198, 201, 
		    1, 0, 0, 0, 199, 197, 1, 0, 0, 0, 199, 200, 1, 0, 0, 0, 200, 43, 1, 
		    0, 0, 0, 201, 199, 1, 0, 0, 0, 202, 203, 6, 22, -1, 0, 203, 204, 5, 
		    39, 0, 0, 204, 221, 3, 44, 22, 5, 205, 206, 5, 2, 0, 0, 206, 207, 
		    3, 44, 22, 0, 207, 208, 5, 3, 0, 0, 208, 221, 1, 0, 0, 0, 209, 221, 
		    3, 46, 23, 0, 210, 215, 5, 46, 0, 0, 211, 212, 5, 9, 0, 0, 212, 213, 
		    3, 44, 22, 0, 213, 214, 5, 10, 0, 0, 214, 216, 1, 0, 0, 0, 215, 211, 
		    1, 0, 0, 0, 216, 217, 1, 0, 0, 0, 217, 215, 1, 0, 0, 0, 217, 218, 
		    1, 0, 0, 0, 218, 221, 1, 0, 0, 0, 219, 221, 5, 46, 0, 0, 220, 202, 
		    1, 0, 0, 0, 220, 205, 1, 0, 0, 0, 220, 209, 1, 0, 0, 0, 220, 210, 
		    1, 0, 0, 0, 220, 219, 1, 0, 0, 0, 221, 263, 1, 0, 0, 0, 222, 223, 
		    10, 18, 0, 0, 223, 224, 5, 26, 0, 0, 224, 262, 3, 44, 22, 19, 225, 
		    226, 10, 17, 0, 0, 226, 227, 5, 27, 0, 0, 227, 262, 3, 44, 22, 18, 
		    228, 229, 10, 16, 0, 0, 229, 230, 5, 28, 0, 0, 230, 262, 3, 44, 22, 
		    17, 231, 232, 10, 15, 0, 0, 232, 233, 5, 29, 0, 0, 233, 262, 3, 44, 
		    22, 16, 234, 235, 10, 14, 0, 0, 235, 236, 5, 30, 0, 0, 236, 262, 3, 
		    44, 22, 15, 237, 238, 10, 13, 0, 0, 238, 239, 5, 31, 0, 0, 239, 262, 
		    3, 44, 22, 14, 240, 241, 10, 12, 0, 0, 241, 242, 5, 32, 0, 0, 242, 
		    262, 3, 44, 22, 13, 243, 244, 10, 11, 0, 0, 244, 245, 5, 33, 0, 0, 
		    245, 262, 3, 44, 22, 12, 246, 247, 10, 10, 0, 0, 247, 248, 5, 34, 
		    0, 0, 248, 262, 3, 44, 22, 11, 249, 250, 10, 9, 0, 0, 250, 251, 5, 
		    35, 0, 0, 251, 262, 3, 44, 22, 10, 252, 253, 10, 8, 0, 0, 253, 254, 
		    5, 36, 0, 0, 254, 262, 3, 44, 22, 9, 255, 256, 10, 7, 0, 0, 256, 257, 
		    5, 37, 0, 0, 257, 262, 3, 44, 22, 8, 258, 259, 10, 6, 0, 0, 259, 260, 
		    5, 38, 0, 0, 260, 262, 3, 44, 22, 7, 261, 222, 1, 0, 0, 0, 261, 225, 
		    1, 0, 0, 0, 261, 228, 1, 0, 0, 0, 261, 231, 1, 0, 0, 0, 261, 234, 
		    1, 0, 0, 0, 261, 237, 1, 0, 0, 0, 261, 240, 1, 0, 0, 0, 261, 243, 
		    1, 0, 0, 0, 261, 246, 1, 0, 0, 0, 261, 249, 1, 0, 0, 0, 261, 252, 
		    1, 0, 0, 0, 261, 255, 1, 0, 0, 0, 261, 258, 1, 0, 0, 0, 262, 265, 
		    1, 0, 0, 0, 263, 261, 1, 0, 0, 0, 263, 264, 1, 0, 0, 0, 264, 45, 1, 
		    0, 0, 0, 265, 263, 1, 0, 0, 0, 266, 267, 7, 1, 0, 0, 267, 47, 1, 0, 
		    0, 0, 21, 51, 60, 70, 80, 95, 110, 117, 122, 135, 142, 149, 157, 170, 
		    177, 188, 192, 199, 217, 220, 261, 263];
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
		        $this->setState(51);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__0) {
		        	$this->setState(48);
		        	$this->functionDecl();
		        	$this->setState(53);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(54);
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
		        $this->setState(56);
		        $this->match(self::T__0);
		        $this->setState(57);
		        $this->match(self::ID);
		        $this->setState(58);
		        $this->match(self::T__1);
		        $this->setState(60);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(59);
		        	$this->parameterList();
		        }
		        $this->setState(62);
		        $this->match(self::T__2);
		        $this->setState(63);
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
		        $this->setState(65);
		        $this->parameter();
		        $this->setState(70);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(66);
		        	$this->match(self::T__3);
		        	$this->setState(67);
		        	$this->parameter();
		        	$this->setState(72);
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
		        $this->setState(73);
		        $this->match(self::ID);
		        $this->setState(74);
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
		        $this->setState(76);
		        $this->match(self::T__4);
		        $this->setState(80);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 70368748419200) !== 0)) {
		        	$this->setState(77);
		        	$this->statement();
		        	$this->setState(82);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(83);
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
		        $this->setState(95);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(85);
		        	    $this->varDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(86);
		        	    $this->shortVarDecl();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(87);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(88);
		        	    $this->ifStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(89);
		        	    $this->whileStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(90);
		        	    $this->returnStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(91);
		        	    $this->functionCall();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(92);
		        	    $this->printStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(93);
		        	    $this->arrayAssignment();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(94);
		        	    $this->constDecl();
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
		public function constDecl(): Context\ConstDeclContext
		{
		    $localContext = new Context\ConstDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_constDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(97);
		        $this->match(self::T__6);
		        $this->setState(98);
		        $this->match(self::ID);
		        $this->setState(99);
		        $this->type();
		        $this->setState(100);
		        $this->match(self::T__7);
		        $this->setState(101);
		        $this->recursiveExpr(0);
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

		    $this->enterRule($localContext, 14, self::RULE_arrayAssignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(103);
		        $this->match(self::ID);
		        $this->setState(108); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(104);
		        	$this->match(self::T__8);
		        	$this->setState(105);
		        	$this->recursiveExpr(0);
		        	$this->setState(106);
		        	$this->match(self::T__9);
		        	$this->setState(110); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__8);
		        $this->setState(112);
		        $this->match(self::T__7);
		        $this->setState(113);
		        $this->recursiveExpr(0);
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

		    $this->enterRule($localContext, 16, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(115);
		        $this->match(self::T__10);
		        $this->setState(117);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		            case 1:
		        	    $this->setState(116);
		        	    $this->recursiveExpr(0);
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

		    $this->enterRule($localContext, 18, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(119);
		        $this->match(self::ID);
		        $this->setState(120);
		        $this->match(self::T__1);
		        $this->setState(122);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 140187732541444) !== 0)) {
		        	$this->setState(121);
		        	$this->argumentList();
		        }
		        $this->setState(124);
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

		    $this->enterRule($localContext, 20, self::RULE_whileStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(126);
		        $this->match(self::T__11);
		        $this->setState(127);
		        $this->recursiveExpr(0);
		        $this->setState(128);
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

		    $this->enterRule($localContext, 22, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(130);
		        $this->match(self::T__12);
		        $this->setState(131);
		        $this->recursiveExpr(0);
		        $this->setState(132);
		        $this->block();
		        $this->setState(135);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__13) {
		        	$this->setState(133);
		        	$this->match(self::T__13);
		        	$this->setState(134);
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

		    $this->enterRule($localContext, 24, self::RULE_varDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(137);
		        $this->match(self::T__14);
		        $this->setState(138);
		        $this->idList();
		        $this->setState(139);
		        $this->type();
		        $this->setState(142);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__7) {
		        	$this->setState(140);
		        	$this->match(self::T__7);
		        	$this->setState(141);
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

		    $this->enterRule($localContext, 26, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(144);
		        $this->match(self::ID);
		        $this->setState(149);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(145);
		        	$this->match(self::T__3);
		        	$this->setState(146);
		        	$this->match(self::ID);
		        	$this->setState(151);
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

		    $this->enterRule($localContext, 28, self::RULE_exprList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $this->recursiveExpr(0);
		        $this->setState(157);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(153);
		        	$this->match(self::T__3);
		        	$this->setState(154);
		        	$this->recursiveExpr(0);
		        	$this->setState(159);
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

		    $this->enterRule($localContext, 30, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(160);
		        $this->idList();
		        $this->setState(161);
		        $this->match(self::T__15);
		        $this->setState(162);
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

		    $this->enterRule($localContext, 32, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(164);
		        $this->match(self::ID);
		        $this->setState(165);
		        $this->match(self::T__7);
		        $this->setState(166);
		        $this->recursiveExpr(0);
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

		    $this->enterRule($localContext, 34, self::RULE_type);

		    try {
		        $this->setState(170);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__8:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(168);
		            	$this->arrayType();
		            	break;

		            case self::T__16:
		            case self::T__17:
		            case self::T__18:
		            case self::T__19:
		            case self::T__20:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(169);
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

		    $this->enterRule($localContext, 36, self::RULE_arrayType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(175); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(172);
		        	$this->match(self::T__8);
		        	$this->setState(173);
		        	$this->match(self::INT);
		        	$this->setState(174);
		        	$this->match(self::T__9);
		        	$this->setState(177); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__8);
		        $this->setState(179);
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

		    $this->enterRule($localContext, 38, self::RULE_primitiveType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(181);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4063232) !== 0))) {
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

		    $this->enterRule($localContext, 40, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(183);
		        $this->match(self::T__21);
		        $this->setState(184);
		        $this->match(self::T__22);
		        $this->setState(185);
		        $this->match(self::T__23);
		        $this->setState(186);
		        $this->match(self::T__1);
		        $this->setState(188);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 140187732541444) !== 0)) {
		        	$this->setState(187);
		        	$this->argumentList();
		        }
		        $this->setState(190);
		        $this->match(self::T__2);
		        $this->setState(192);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__24) {
		        	$this->setState(191);
		        	$this->match(self::T__24);
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

		    $this->enterRule($localContext, 42, self::RULE_argumentList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(194);
		        $this->recursiveExpr(0);
		        $this->setState(199);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(195);
		        	$this->match(self::T__3);
		        	$this->setState(196);
		        	$this->recursiveExpr(0);
		        	$this->setState(201);
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
			return $this->recursiveExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpr(int $precedence): Context\ExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 44;
			$this->enterRecursionRule($localContext, 44, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(220);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx)) {
					case 1:
					    $localContext = new Context\LogicalNotContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(203);
					    $this->match(self::T__38);
					    $this->setState(204);
					    $this->recursiveExpr(5);
					break;

					case 2:
					    $localContext = new Context\ParensContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(205);
					    $this->match(self::T__1);
					    $this->setState(206);
					    $this->recursiveExpr(0);
					    $this->setState(207);
					    $this->match(self::T__2);
					break;

					case 3:
					    $localContext = new Context\LiteralExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(209);
					    $this->literal();
					break;

					case 4:
					    $localContext = new Context\ArrayAccessContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(210);
					    $this->match(self::ID);
					    $this->setState(215); 
					    $this->errorHandler->sync($this);

					    $alt = 1;

					    do {
					    	switch ($alt) {
					    	case 1:
					    		$this->setState(211);
					    		$this->match(self::T__8);
					    		$this->setState(212);
					    		$this->recursiveExpr(0);
					    		$this->setState(213);
					    		$this->match(self::T__9);
					    		break;
					    	default:
					    		throw new NoViableAltException($this);
					    	}

					    	$this->setState(217); 
					    	$this->errorHandler->sync($this);

					    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx);
					    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
					break;

					case 5:
					    $localContext = new Context\IdentifierExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(219);
					    $this->match(self::ID);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(263);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(261);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
							case 1:
							    $localContext = new Context\LogicalOrContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(222);

							    if (!($this->precpred($this->ctx, 18))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 18)");
							    }
							    $this->setState(223);
							    $this->match(self::T__25);
							    $this->setState(224);
							    $this->recursiveExpr(19);
							break;

							case 2:
							    $localContext = new Context\LogicalAndContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(225);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(226);
							    $this->match(self::T__26);
							    $this->setState(227);
							    $this->recursiveExpr(18);
							break;

							case 3:
							    $localContext = new Context\EqualityContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(228);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(229);
							    $this->match(self::T__27);
							    $this->setState(230);
							    $this->recursiveExpr(17);
							break;

							case 4:
							    $localContext = new Context\EqualityContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(231);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(232);
							    $this->match(self::T__28);
							    $this->setState(233);
							    $this->recursiveExpr(16);
							break;

							case 5:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(234);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(235);
							    $this->match(self::T__29);
							    $this->setState(236);
							    $this->recursiveExpr(15);
							break;

							case 6:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(237);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(238);
							    $this->match(self::T__30);
							    $this->setState(239);
							    $this->recursiveExpr(14);
							break;

							case 7:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(240);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(241);
							    $this->match(self::T__31);
							    $this->setState(242);
							    $this->recursiveExpr(13);
							break;

							case 8:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(243);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(244);
							    $this->match(self::T__32);
							    $this->setState(245);
							    $this->recursiveExpr(12);
							break;

							case 9:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(246);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(247);
							    $this->match(self::T__33);
							    $this->setState(248);
							    $this->recursiveExpr(11);
							break;

							case 10:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(249);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(250);
							    $this->match(self::T__34);
							    $this->setState(251);
							    $this->recursiveExpr(10);
							break;

							case 11:
							    $localContext = new Context\MulDivContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(252);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(253);
							    $this->match(self::T__35);
							    $this->setState(254);
							    $this->recursiveExpr(9);
							break;

							case 12:
							    $localContext = new Context\MulDivContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(255);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(256);
							    $this->match(self::T__36);
							    $this->setState(257);
							    $this->recursiveExpr(8);
							break;

							case 13:
							    $localContext = new Context\MulDivContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(258);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(259);
							    $this->match(self::T__37);
							    $this->setState(260);
							    $this->recursiveExpr(7);
							break;
						} 
					}

					$this->setState(265);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(266);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 69269232549888) !== 0))) {
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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 22:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 18);

			    case 1:
			        return $this->precpred($this->ctx, 17);

			    case 2:
			        return $this->precpred($this->ctx, 16);

			    case 3:
			        return $this->precpred($this->ctx, 15);

			    case 4:
			        return $this->precpred($this->ctx, 14);

			    case 5:
			        return $this->precpred($this->ctx, 13);

			    case 6:
			        return $this->precpred($this->ctx, 12);

			    case 7:
			        return $this->precpred($this->ctx, 11);

			    case 8:
			        return $this->precpred($this->ctx, 10);

			    case 9:
			        return $this->precpred($this->ctx, 9);

			    case 10:
			        return $this->precpred($this->ctx, 8);

			    case 11:
			        return $this->precpred($this->ctx, 7);

			    case 12:
			        return $this->precpred($this->ctx, 6);
			}

			return true;
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
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class LogicalNotContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLogicalNot($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalNot($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalNot($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayAccessContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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

	class AddSubContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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
			    $listener->enterAddSub($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAddSub($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAddSub($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MulDivContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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
			    $listener->enterMulDiv($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitMulDiv($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitMulDiv($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ParensContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParens($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParens($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParens($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdentifierExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIdentifierExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIdentifierExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdentifierExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LogicalAndContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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
			    $listener->enterLogicalAnd($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalAnd($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalAnd($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RelationalContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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
			    $listener->enterRelational($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitRelational($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRelational($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LiteralExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLiteralExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLiteralExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLiteralExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class EqualityContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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
			    $listener->enterEquality($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitEquality($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitEquality($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LogicalOrContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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
			    $listener->enterLogicalOr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalOr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalOr($this);
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