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
               T__32 = 33, T__33 = 34, T__34 = 35, INT = 36, FLOAT = 37, 
               STRING = 38, RUNE = 39, BOOL = 40, NIL = 41, ID = 42, WS = 43, 
               LINE_COMMENT = 44, BLOCK_COMMENT = 45;

		public const RULE_program = 0, RULE_functionDecl = 1, RULE_block = 2, 
               RULE_statement = 3, RULE_whileStmt = 4, RULE_ifStmt = 5, 
               RULE_varDecl = 6, RULE_shortVarDecl = 7, RULE_assignment = 8, 
               RULE_type = 9, RULE_printStmt = 10, RULE_argumentList = 11, 
               RULE_expr = 12, RULE_literal = 13;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'functionDecl', 'block', 'statement', 'whileStmt', 'ifStmt', 
			'varDecl', 'shortVarDecl', 'assignment', 'type', 'printStmt', 'argumentList', 
			'expr', 'literal'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'func'", "'('", "')'", "'{'", "'}'", "'while'", "'if'", "'else'", 
		    "'var'", "'='", "':='", "'int32'", "'float32'", "'bool'", "'string'", 
		    "'rune'", "'fmt'", "'.'", "'Println'", "';'", "','", "'||'", "'&&'", 
		    "'=='", "'!='", "'<'", "'>'", "'<='", "'>='", "'+'", "'-'", "'*'", 
		    "'/'", "'%'", "'!'", null, null, null, null, null, "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, "INT", "FLOAT", "STRING", "RUNE", "BOOL", "NIL", 
		    "ID", "WS", "LINE_COMMENT", "BLOCK_COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 45, 164, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 1, 0, 5, 0, 
		    30, 8, 0, 10, 0, 12, 0, 33, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 2, 1, 2, 5, 2, 45, 8, 2, 10, 2, 12, 2, 48, 9, 2, 
		    1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 3, 3, 58, 8, 3, 1, 
		    4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 69, 8, 5, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 76, 8, 6, 1, 7, 1, 7, 1, 7, 1, 
		    7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 10, 1, 10, 1, 10, 1, 10, 
		    1, 10, 3, 10, 93, 8, 10, 1, 10, 1, 10, 3, 10, 97, 8, 10, 1, 11, 1, 
		    11, 1, 11, 5, 11, 102, 8, 11, 10, 11, 12, 11, 105, 9, 11, 1, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 116, 8, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 1, 12, 5, 12, 157, 8, 12, 10, 12, 12, 12, 160, 9, 12, 1, 13, 1, 
		    13, 1, 13, 0, 1, 24, 14, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 
		    24, 26, 0, 2, 1, 0, 12, 16, 1, 0, 36, 41, 177, 0, 31, 1, 0, 0, 0, 
		    2, 36, 1, 0, 0, 0, 4, 42, 1, 0, 0, 0, 6, 57, 1, 0, 0, 0, 8, 59, 1, 
		    0, 0, 0, 10, 63, 1, 0, 0, 0, 12, 70, 1, 0, 0, 0, 14, 77, 1, 0, 0, 
		    0, 16, 81, 1, 0, 0, 0, 18, 85, 1, 0, 0, 0, 20, 87, 1, 0, 0, 0, 22, 
		    98, 1, 0, 0, 0, 24, 115, 1, 0, 0, 0, 26, 161, 1, 0, 0, 0, 28, 30, 
		    3, 2, 1, 0, 29, 28, 1, 0, 0, 0, 30, 33, 1, 0, 0, 0, 31, 29, 1, 0, 
		    0, 0, 31, 32, 1, 0, 0, 0, 32, 34, 1, 0, 0, 0, 33, 31, 1, 0, 0, 0, 
		    34, 35, 5, 0, 0, 1, 35, 1, 1, 0, 0, 0, 36, 37, 5, 1, 0, 0, 37, 38, 
		    5, 42, 0, 0, 38, 39, 5, 2, 0, 0, 39, 40, 5, 3, 0, 0, 40, 41, 3, 4, 
		    2, 0, 41, 3, 1, 0, 0, 0, 42, 46, 5, 4, 0, 0, 43, 45, 3, 6, 3, 0, 44, 
		    43, 1, 0, 0, 0, 45, 48, 1, 0, 0, 0, 46, 44, 1, 0, 0, 0, 46, 47, 1, 
		    0, 0, 0, 47, 49, 1, 0, 0, 0, 48, 46, 1, 0, 0, 0, 49, 50, 5, 5, 0, 
		    0, 50, 5, 1, 0, 0, 0, 51, 58, 3, 12, 6, 0, 52, 58, 3, 14, 7, 0, 53, 
		    58, 3, 16, 8, 0, 54, 58, 3, 10, 5, 0, 55, 58, 3, 8, 4, 0, 56, 58, 
		    3, 20, 10, 0, 57, 51, 1, 0, 0, 0, 57, 52, 1, 0, 0, 0, 57, 53, 1, 0, 
		    0, 0, 57, 54, 1, 0, 0, 0, 57, 55, 1, 0, 0, 0, 57, 56, 1, 0, 0, 0, 
		    58, 7, 1, 0, 0, 0, 59, 60, 5, 6, 0, 0, 60, 61, 3, 24, 12, 0, 61, 62, 
		    3, 4, 2, 0, 62, 9, 1, 0, 0, 0, 63, 64, 5, 7, 0, 0, 64, 65, 3, 24, 
		    12, 0, 65, 68, 3, 4, 2, 0, 66, 67, 5, 8, 0, 0, 67, 69, 3, 4, 2, 0, 
		    68, 66, 1, 0, 0, 0, 68, 69, 1, 0, 0, 0, 69, 11, 1, 0, 0, 0, 70, 71, 
		    5, 9, 0, 0, 71, 72, 5, 42, 0, 0, 72, 75, 3, 18, 9, 0, 73, 74, 5, 10, 
		    0, 0, 74, 76, 3, 24, 12, 0, 75, 73, 1, 0, 0, 0, 75, 76, 1, 0, 0, 0, 
		    76, 13, 1, 0, 0, 0, 77, 78, 5, 42, 0, 0, 78, 79, 5, 11, 0, 0, 79, 
		    80, 3, 24, 12, 0, 80, 15, 1, 0, 0, 0, 81, 82, 5, 42, 0, 0, 82, 83, 
		    5, 10, 0, 0, 83, 84, 3, 24, 12, 0, 84, 17, 1, 0, 0, 0, 85, 86, 7, 
		    0, 0, 0, 86, 19, 1, 0, 0, 0, 87, 88, 5, 17, 0, 0, 88, 89, 5, 18, 0, 
		    0, 89, 90, 5, 19, 0, 0, 90, 92, 5, 2, 0, 0, 91, 93, 3, 22, 11, 0, 
		    92, 91, 1, 0, 0, 0, 92, 93, 1, 0, 0, 0, 93, 94, 1, 0, 0, 0, 94, 96, 
		    5, 3, 0, 0, 95, 97, 5, 20, 0, 0, 96, 95, 1, 0, 0, 0, 96, 97, 1, 0, 
		    0, 0, 97, 21, 1, 0, 0, 0, 98, 103, 3, 24, 12, 0, 99, 100, 5, 21, 0, 
		    0, 100, 102, 3, 24, 12, 0, 101, 99, 1, 0, 0, 0, 102, 105, 1, 0, 0, 
		    0, 103, 101, 1, 0, 0, 0, 103, 104, 1, 0, 0, 0, 104, 23, 1, 0, 0, 0, 
		    105, 103, 1, 0, 0, 0, 106, 107, 6, 12, -1, 0, 107, 108, 5, 35, 0, 
		    0, 108, 116, 3, 24, 12, 4, 109, 110, 5, 2, 0, 0, 110, 111, 3, 24, 
		    12, 0, 111, 112, 5, 3, 0, 0, 112, 116, 1, 0, 0, 0, 113, 116, 3, 26, 
		    13, 0, 114, 116, 5, 42, 0, 0, 115, 106, 1, 0, 0, 0, 115, 109, 1, 0, 
		    0, 0, 115, 113, 1, 0, 0, 0, 115, 114, 1, 0, 0, 0, 116, 158, 1, 0, 
		    0, 0, 117, 118, 10, 17, 0, 0, 118, 119, 5, 22, 0, 0, 119, 157, 3, 
		    24, 12, 18, 120, 121, 10, 16, 0, 0, 121, 122, 5, 23, 0, 0, 122, 157, 
		    3, 24, 12, 17, 123, 124, 10, 15, 0, 0, 124, 125, 5, 24, 0, 0, 125, 
		    157, 3, 24, 12, 16, 126, 127, 10, 14, 0, 0, 127, 128, 5, 25, 0, 0, 
		    128, 157, 3, 24, 12, 15, 129, 130, 10, 13, 0, 0, 130, 131, 5, 26, 
		    0, 0, 131, 157, 3, 24, 12, 14, 132, 133, 10, 12, 0, 0, 133, 134, 5, 
		    27, 0, 0, 134, 157, 3, 24, 12, 13, 135, 136, 10, 11, 0, 0, 136, 137, 
		    5, 28, 0, 0, 137, 157, 3, 24, 12, 12, 138, 139, 10, 10, 0, 0, 139, 
		    140, 5, 29, 0, 0, 140, 157, 3, 24, 12, 11, 141, 142, 10, 9, 0, 0, 
		    142, 143, 5, 30, 0, 0, 143, 157, 3, 24, 12, 10, 144, 145, 10, 8, 0, 
		    0, 145, 146, 5, 31, 0, 0, 146, 157, 3, 24, 12, 9, 147, 148, 10, 7, 
		    0, 0, 148, 149, 5, 32, 0, 0, 149, 157, 3, 24, 12, 8, 150, 151, 10, 
		    6, 0, 0, 151, 152, 5, 33, 0, 0, 152, 157, 3, 24, 12, 7, 153, 154, 
		    10, 5, 0, 0, 154, 155, 5, 34, 0, 0, 155, 157, 3, 24, 12, 6, 156, 117, 
		    1, 0, 0, 0, 156, 120, 1, 0, 0, 0, 156, 123, 1, 0, 0, 0, 156, 126, 
		    1, 0, 0, 0, 156, 129, 1, 0, 0, 0, 156, 132, 1, 0, 0, 0, 156, 135, 
		    1, 0, 0, 0, 156, 138, 1, 0, 0, 0, 156, 141, 1, 0, 0, 0, 156, 144, 
		    1, 0, 0, 0, 156, 147, 1, 0, 0, 0, 156, 150, 1, 0, 0, 0, 156, 153, 
		    1, 0, 0, 0, 157, 160, 1, 0, 0, 0, 158, 156, 1, 0, 0, 0, 158, 159, 
		    1, 0, 0, 0, 159, 25, 1, 0, 0, 0, 160, 158, 1, 0, 0, 0, 161, 162, 7, 
		    1, 0, 0, 162, 27, 1, 0, 0, 0, 11, 31, 46, 57, 68, 75, 92, 96, 103, 
		    115, 156, 158];
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
		        $this->setState(31);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__0) {
		        	$this->setState(28);
		        	$this->functionDecl();
		        	$this->setState(33);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(34);
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
		        $this->setState(36);
		        $this->match(self::T__0);
		        $this->setState(37);
		        $this->match(self::ID);
		        $this->setState(38);
		        $this->match(self::T__1);
		        $this->setState(39);
		        $this->match(self::T__2);
		        $this->setState(40);
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
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(42);
		        $this->match(self::T__3);
		        $this->setState(46);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4398046642880) !== 0)) {
		        	$this->setState(43);
		        	$this->statement();
		        	$this->setState(48);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(49);
		        $this->match(self::T__4);
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

		    $this->enterRule($localContext, 6, self::RULE_statement);

		    try {
		        $this->setState(57);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(51);
		        	    $this->varDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(52);
		        	    $this->shortVarDecl();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(53);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(54);
		        	    $this->ifStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(55);
		        	    $this->whileStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(56);
		        	    $this->printStmt();
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
		public function whileStmt(): Context\WhileStmtContext
		{
		    $localContext = new Context\WhileStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_whileStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(59);
		        $this->match(self::T__5);
		        $this->setState(60);
		        $this->recursiveExpr(0);
		        $this->setState(61);
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

		    $this->enterRule($localContext, 10, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(63);
		        $this->match(self::T__6);
		        $this->setState(64);
		        $this->recursiveExpr(0);
		        $this->setState(65);
		        $this->block();
		        $this->setState(68);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__7) {
		        	$this->setState(66);
		        	$this->match(self::T__7);
		        	$this->setState(67);
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

		    $this->enterRule($localContext, 12, self::RULE_varDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(70);
		        $this->match(self::T__8);
		        $this->setState(71);
		        $this->match(self::ID);
		        $this->setState(72);
		        $this->type();
		        $this->setState(75);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__9) {
		        	$this->setState(73);
		        	$this->match(self::T__9);
		        	$this->setState(74);
		        	$this->recursiveExpr(0);
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

		    $this->enterRule($localContext, 14, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(77);
		        $this->match(self::ID);
		        $this->setState(78);
		        $this->match(self::T__10);
		        $this->setState(79);
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
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(81);
		        $this->match(self::ID);
		        $this->setState(82);
		        $this->match(self::T__9);
		        $this->setState(83);
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

		    $this->enterRule($localContext, 18, self::RULE_type);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(85);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 126976) !== 0))) {
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

		    $this->enterRule($localContext, 20, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(87);
		        $this->match(self::T__16);
		        $this->setState(88);
		        $this->match(self::T__17);
		        $this->setState(89);
		        $this->match(self::T__18);
		        $this->setState(90);
		        $this->match(self::T__1);
		        $this->setState(92);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8761733283844) !== 0)) {
		        	$this->setState(91);
		        	$this->argumentList();
		        }
		        $this->setState(94);
		        $this->match(self::T__2);
		        $this->setState(96);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__19) {
		        	$this->setState(95);
		        	$this->match(self::T__19);
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

		    $this->enterRule($localContext, 22, self::RULE_argumentList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(98);
		        $this->recursiveExpr(0);
		        $this->setState(103);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__20) {
		        	$this->setState(99);
		        	$this->match(self::T__20);
		        	$this->setState(100);
		        	$this->recursiveExpr(0);
		        	$this->setState(105);
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
			$startState = 24;
			$this->enterRecursionRule($localContext, 24, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(115);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__34:
				    	$localContext = new Context\LogicalNotContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(107);
				    	$this->match(self::T__34);
				    	$this->setState(108);
				    	$this->recursiveExpr(4);
				    	break;

				    case self::T__1:
				    	$localContext = new Context\ParensContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(109);
				    	$this->match(self::T__1);
				    	$this->setState(110);
				    	$this->recursiveExpr(0);
				    	$this->setState(111);
				    	$this->match(self::T__2);
				    	break;

				    case self::INT:
				    case self::FLOAT:
				    case self::STRING:
				    case self::RUNE:
				    case self::BOOL:
				    case self::NIL:
				    	$localContext = new Context\LiteralExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(113);
				    	$this->literal();
				    	break;

				    case self::ID:
				    	$localContext = new Context\IdentifierExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(114);
				    	$this->match(self::ID);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(158);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(156);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
							case 1:
							    $localContext = new Context\LogicalOrContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(117);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(118);
							    $this->match(self::T__21);
							    $this->setState(119);
							    $this->recursiveExpr(18);
							break;

							case 2:
							    $localContext = new Context\LogicalAndContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(120);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(121);
							    $this->match(self::T__22);
							    $this->setState(122);
							    $this->recursiveExpr(17);
							break;

							case 3:
							    $localContext = new Context\EqualityContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(123);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(124);
							    $this->match(self::T__23);
							    $this->setState(125);
							    $this->recursiveExpr(16);
							break;

							case 4:
							    $localContext = new Context\EqualityContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(126);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(127);
							    $this->match(self::T__24);
							    $this->setState(128);
							    $this->recursiveExpr(15);
							break;

							case 5:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(129);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(130);
							    $this->match(self::T__25);
							    $this->setState(131);
							    $this->recursiveExpr(14);
							break;

							case 6:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(132);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(133);
							    $this->match(self::T__26);
							    $this->setState(134);
							    $this->recursiveExpr(13);
							break;

							case 7:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(135);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(136);
							    $this->match(self::T__27);
							    $this->setState(137);
							    $this->recursiveExpr(12);
							break;

							case 8:
							    $localContext = new Context\RelationalContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(138);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(139);
							    $this->match(self::T__28);
							    $this->setState(140);
							    $this->recursiveExpr(11);
							break;

							case 9:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(141);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(142);
							    $this->match(self::T__29);
							    $this->setState(143);
							    $this->recursiveExpr(10);
							break;

							case 10:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(144);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(145);
							    $this->match(self::T__30);
							    $this->setState(146);
							    $this->recursiveExpr(9);
							break;

							case 11:
							    $localContext = new Context\MulDivContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(147);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(148);
							    $this->match(self::T__31);
							    $this->setState(149);
							    $this->recursiveExpr(8);
							break;

							case 12:
							    $localContext = new Context\MulDivContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(150);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(151);
							    $this->match(self::T__32);
							    $this->setState(152);
							    $this->recursiveExpr(7);
							break;

							case 13:
							    $localContext = new Context\MulDivContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(153);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(154);
							    $this->match(self::T__33);
							    $this->setState(155);
							    $this->recursiveExpr(6);
							break;
						} 
					}

					$this->setState(160);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx);
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

		    $this->enterRule($localContext, 26, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(161);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4329327034368) !== 0))) {
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
					case 12:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 17);

			    case 1:
			        return $this->precpred($this->ctx, 16);

			    case 2:
			        return $this->precpred($this->ctx, 15);

			    case 3:
			        return $this->precpred($this->ctx, 14);

			    case 4:
			        return $this->precpred($this->ctx, 13);

			    case 5:
			        return $this->precpred($this->ctx, 12);

			    case 6:
			        return $this->precpred($this->ctx, 11);

			    case 7:
			        return $this->precpred($this->ctx, 10);

			    case 8:
			        return $this->precpred($this->ctx, 9);

			    case 9:
			        return $this->precpred($this->ctx, 8);

			    case 10:
			        return $this->precpred($this->ctx, 7);

			    case 11:
			        return $this->precpred($this->ctx, 6);

			    case 12:
			        return $this->precpred($this->ctx, 5);
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

	    public function printStmt(): ?PrintStmtContext
	    {
	    	return $this->getTypedRuleContext(PrintStmtContext::class, 0);
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