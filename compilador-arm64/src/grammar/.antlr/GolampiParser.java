// Generated from /var/www/OLC2_1S2026_Proyecto2/compilador-arm64/src/grammar/Golampi.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue"})
public class GolampiParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, T__11=12, T__12=13, T__13=14, T__14=15, T__15=16, T__16=17, 
		T__17=18, T__18=19, T__19=20, T__20=21, T__21=22, T__22=23, T__23=24, 
		T__24=25, T__25=26, T__26=27, T__27=28, T__28=29, T__29=30, T__30=31, 
		T__31=32, T__32=33, T__33=34, T__34=35, T__35=36, T__36=37, T__37=38, 
		T__38=39, T__39=40, T__40=41, T__41=42, T__42=43, T__43=44, T__44=45, 
		T__45=46, T__46=47, T__47=48, T__48=49, T__49=50, T__50=51, T__51=52, 
		INT=53, FLOAT=54, STRING=55, RUNE=56, BOOL=57, NIL=58, ID=59, WS=60, LINE_COMMENT=61, 
		BLOCK_COMMENT=62;
	public static final int
		RULE_program = 0, RULE_functionDecl = 1, RULE_parameterList = 2, RULE_parameter = 3, 
		RULE_block = 4, RULE_statement = 5, RULE_breakStmt = 6, RULE_continueStmt = 7, 
		RULE_forStmt = 8, RULE_forClassic = 9, RULE_forConditional = 10, RULE_forInfinite = 11, 
		RULE_forInit = 12, RULE_forUpdate = 13, RULE_unaryUpdate = 14, RULE_switchStmt = 15, 
		RULE_switchCase = 16, RULE_defaultCase = 17, RULE_constDecl = 18, RULE_arrayAssignment = 19, 
		RULE_returnStmt = 20, RULE_functionCall = 21, RULE_whileStmt = 22, RULE_ifStmt = 23, 
		RULE_varDecl = 24, RULE_idList = 25, RULE_exprList = 26, RULE_shortVarDecl = 27, 
		RULE_assignment = 28, RULE_assignOp = 29, RULE_type = 30, RULE_arrayType = 31, 
		RULE_primitiveType = 32, RULE_printStmt = 33, RULE_argumentList = 34, 
		RULE_expr = 35, RULE_logicalOrExpr = 36, RULE_logicalAndExpr = 37, RULE_equalityExpr = 38, 
		RULE_relationalExpr = 39, RULE_additiveExpr = 40, RULE_multiplicativeExpr = 41, 
		RULE_unaryExpr = 42, RULE_primaryExpr = 43, RULE_literal = 44;
	private static String[] makeRuleNames() {
		return new String[] {
			"program", "functionDecl", "parameterList", "parameter", "block", "statement", 
			"breakStmt", "continueStmt", "forStmt", "forClassic", "forConditional", 
			"forInfinite", "forInit", "forUpdate", "unaryUpdate", "switchStmt", "switchCase", 
			"defaultCase", "constDecl", "arrayAssignment", "returnStmt", "functionCall", 
			"whileStmt", "ifStmt", "varDecl", "idList", "exprList", "shortVarDecl", 
			"assignment", "assignOp", "type", "arrayType", "primitiveType", "printStmt", 
			"argumentList", "expr", "logicalOrExpr", "logicalAndExpr", "equalityExpr", 
			"relationalExpr", "additiveExpr", "multiplicativeExpr", "unaryExpr", 
			"primaryExpr", "literal"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'func'", "'('", "')'", "','", "'{'", "'}'", "'break'", "'continue'", 
			"'for'", "';'", "'++'", "'--'", "'switch'", "'case'", "':'", "'default'", 
			"'const'", "'='", "'['", "']'", "'return'", "'while'", "'if'", "'else'", 
			"'var'", "':='", "'+='", "'-='", "'*='", "'/='", "'int32'", "'float32'", 
			"'bool'", "'string'", "'rune'", "'fmt'", "'.'", "'Println'", "'||'", 
			"'&&'", "'=='", "'!='", "'<'", "'>'", "'<='", "'>='", "'+'", "'-'", "'*'", 
			"'/'", "'%'", "'!'", null, null, null, null, null, "'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, "INT", "FLOAT", "STRING", "RUNE", "BOOL", 
			"NIL", "ID", "WS", "LINE_COMMENT", "BLOCK_COMMENT"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "Golampi.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public GolampiParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ProgramContext extends ParserRuleContext {
		public TerminalNode EOF() { return getToken(GolampiParser.EOF, 0); }
		public List<FunctionDeclContext> functionDecl() {
			return getRuleContexts(FunctionDeclContext.class);
		}
		public FunctionDeclContext functionDecl(int i) {
			return getRuleContext(FunctionDeclContext.class,i);
		}
		public ProgramContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_program; }
	}

	public final ProgramContext program() throws RecognitionException {
		ProgramContext _localctx = new ProgramContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_program);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(93);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__0) {
				{
				{
				setState(90);
				functionDecl();
				}
				}
				setState(95);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(96);
			match(EOF);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FunctionDeclContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParameterListContext parameterList() {
			return getRuleContext(ParameterListContext.class,0);
		}
		public FunctionDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_functionDecl; }
	}

	public final FunctionDeclContext functionDecl() throws RecognitionException {
		FunctionDeclContext _localctx = new FunctionDeclContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_functionDecl);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(98);
			match(T__0);
			setState(99);
			match(ID);
			setState(100);
			match(T__1);
			setState(102);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ID) {
				{
				setState(101);
				parameterList();
				}
			}

			setState(104);
			match(T__2);
			setState(105);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParameterListContext extends ParserRuleContext {
		public List<ParameterContext> parameter() {
			return getRuleContexts(ParameterContext.class);
		}
		public ParameterContext parameter(int i) {
			return getRuleContext(ParameterContext.class,i);
		}
		public ParameterListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_parameterList; }
	}

	public final ParameterListContext parameterList() throws RecognitionException {
		ParameterListContext _localctx = new ParameterListContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_parameterList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(107);
			parameter();
			setState(112);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__3) {
				{
				{
				setState(108);
				match(T__3);
				setState(109);
				parameter();
				}
				}
				setState(114);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParameterContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ParameterContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_parameter; }
	}

	public final ParameterContext parameter() throws RecognitionException {
		ParameterContext _localctx = new ParameterContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_parameter);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(115);
			match(ID);
			setState(116);
			type();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BlockContext extends ParserRuleContext {
		public List<StatementContext> statement() {
			return getRuleContexts(StatementContext.class);
		}
		public StatementContext statement(int i) {
			return getRuleContext(StatementContext.class,i);
		}
		public BlockContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_block; }
	}

	public final BlockContext block() throws RecognitionException {
		BlockContext _localctx = new BlockContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_block);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(118);
			match(T__4);
			setState(122);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 576460821071274880L) != 0)) {
				{
				{
				setState(119);
				statement();
				}
				}
				setState(124);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(125);
			match(T__5);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class StatementContext extends ParserRuleContext {
		public VarDeclContext varDecl() {
			return getRuleContext(VarDeclContext.class,0);
		}
		public ShortVarDeclContext shortVarDecl() {
			return getRuleContext(ShortVarDeclContext.class,0);
		}
		public AssignmentContext assignment() {
			return getRuleContext(AssignmentContext.class,0);
		}
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
		}
		public WhileStmtContext whileStmt() {
			return getRuleContext(WhileStmtContext.class,0);
		}
		public ReturnStmtContext returnStmt() {
			return getRuleContext(ReturnStmtContext.class,0);
		}
		public FunctionCallContext functionCall() {
			return getRuleContext(FunctionCallContext.class,0);
		}
		public PrintStmtContext printStmt() {
			return getRuleContext(PrintStmtContext.class,0);
		}
		public ArrayAssignmentContext arrayAssignment() {
			return getRuleContext(ArrayAssignmentContext.class,0);
		}
		public ConstDeclContext constDecl() {
			return getRuleContext(ConstDeclContext.class,0);
		}
		public SwitchStmtContext switchStmt() {
			return getRuleContext(SwitchStmtContext.class,0);
		}
		public ForStmtContext forStmt() {
			return getRuleContext(ForStmtContext.class,0);
		}
		public BreakStmtContext breakStmt() {
			return getRuleContext(BreakStmtContext.class,0);
		}
		public ContinueStmtContext continueStmt() {
			return getRuleContext(ContinueStmtContext.class,0);
		}
		public UnaryUpdateContext unaryUpdate() {
			return getRuleContext(UnaryUpdateContext.class,0);
		}
		public StatementContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_statement; }
	}

	public final StatementContext statement() throws RecognitionException {
		StatementContext _localctx = new StatementContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_statement);
		try {
			setState(142);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,4,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(127);
				varDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(128);
				shortVarDecl();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(129);
				assignment();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(130);
				ifStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(131);
				whileStmt();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(132);
				returnStmt();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(133);
				functionCall();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(134);
				printStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(135);
				arrayAssignment();
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(136);
				constDecl();
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(137);
				switchStmt();
				}
				break;
			case 12:
				enterOuterAlt(_localctx, 12);
				{
				setState(138);
				forStmt();
				}
				break;
			case 13:
				enterOuterAlt(_localctx, 13);
				{
				setState(139);
				breakStmt();
				}
				break;
			case 14:
				enterOuterAlt(_localctx, 14);
				{
				setState(140);
				continueStmt();
				}
				break;
			case 15:
				enterOuterAlt(_localctx, 15);
				{
				setState(141);
				unaryUpdate();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BreakStmtContext extends ParserRuleContext {
		public BreakStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_breakStmt; }
	}

	public final BreakStmtContext breakStmt() throws RecognitionException {
		BreakStmtContext _localctx = new BreakStmtContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_breakStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(144);
			match(T__6);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ContinueStmtContext extends ParserRuleContext {
		public ContinueStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_continueStmt; }
	}

	public final ContinueStmtContext continueStmt() throws RecognitionException {
		ContinueStmtContext _localctx = new ContinueStmtContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_continueStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(146);
			match(T__7);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForStmtContext extends ParserRuleContext {
		public ForClassicContext forClassic() {
			return getRuleContext(ForClassicContext.class,0);
		}
		public ForConditionalContext forConditional() {
			return getRuleContext(ForConditionalContext.class,0);
		}
		public ForInfiniteContext forInfinite() {
			return getRuleContext(ForInfiniteContext.class,0);
		}
		public ForStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forStmt; }
	}

	public final ForStmtContext forStmt() throws RecognitionException {
		ForStmtContext _localctx = new ForStmtContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_forStmt);
		try {
			setState(151);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,5,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(148);
				forClassic();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(149);
				forConditional();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(150);
				forInfinite();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForClassicContext extends ParserRuleContext {
		public ForInitContext forInit() {
			return getRuleContext(ForInitContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ForUpdateContext forUpdate() {
			return getRuleContext(ForUpdateContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForClassicContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forClassic; }
	}

	public final ForClassicContext forClassic() throws RecognitionException {
		ForClassicContext _localctx = new ForClassicContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_forClassic);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(153);
			match(T__8);
			setState(154);
			forInit();
			setState(155);
			match(T__9);
			setState(156);
			expr();
			setState(157);
			match(T__9);
			setState(158);
			forUpdate();
			setState(159);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForConditionalContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForConditionalContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forConditional; }
	}

	public final ForConditionalContext forConditional() throws RecognitionException {
		ForConditionalContext _localctx = new ForConditionalContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_forConditional);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(161);
			match(T__8);
			setState(162);
			expr();
			setState(163);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForInfiniteContext extends ParserRuleContext {
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForInfiniteContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forInfinite; }
	}

	public final ForInfiniteContext forInfinite() throws RecognitionException {
		ForInfiniteContext _localctx = new ForInfiniteContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_forInfinite);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(165);
			match(T__8);
			setState(166);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForInitContext extends ParserRuleContext {
		public ShortVarDeclContext shortVarDecl() {
			return getRuleContext(ShortVarDeclContext.class,0);
		}
		public AssignmentContext assignment() {
			return getRuleContext(AssignmentContext.class,0);
		}
		public ForInitContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forInit; }
	}

	public final ForInitContext forInit() throws RecognitionException {
		ForInitContext _localctx = new ForInitContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_forInit);
		try {
			setState(170);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,6,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(168);
				shortVarDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(169);
				assignment();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForUpdateContext extends ParserRuleContext {
		public AssignmentContext assignment() {
			return getRuleContext(AssignmentContext.class,0);
		}
		public UnaryUpdateContext unaryUpdate() {
			return getRuleContext(UnaryUpdateContext.class,0);
		}
		public ForUpdateContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forUpdate; }
	}

	public final ForUpdateContext forUpdate() throws RecognitionException {
		ForUpdateContext _localctx = new ForUpdateContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_forUpdate);
		try {
			setState(174);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,7,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(172);
				assignment();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(173);
				unaryUpdate();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class UnaryUpdateContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public UnaryUpdateContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_unaryUpdate; }
	}

	public final UnaryUpdateContext unaryUpdate() throws RecognitionException {
		UnaryUpdateContext _localctx = new UnaryUpdateContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_unaryUpdate);
		try {
			setState(180);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,8,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(176);
				match(ID);
				setState(177);
				match(T__10);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(178);
				match(ID);
				setState(179);
				match(T__11);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SwitchStmtContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public List<SwitchCaseContext> switchCase() {
			return getRuleContexts(SwitchCaseContext.class);
		}
		public SwitchCaseContext switchCase(int i) {
			return getRuleContext(SwitchCaseContext.class,i);
		}
		public DefaultCaseContext defaultCase() {
			return getRuleContext(DefaultCaseContext.class,0);
		}
		public SwitchStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchStmt; }
	}

	public final SwitchStmtContext switchStmt() throws RecognitionException {
		SwitchStmtContext _localctx = new SwitchStmtContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_switchStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(182);
			match(T__12);
			setState(183);
			expr();
			setState(184);
			match(T__4);
			setState(188);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__13) {
				{
				{
				setState(185);
				switchCase();
				}
				}
				setState(190);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(192);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__15) {
				{
				setState(191);
				defaultCase();
				}
			}

			setState(194);
			match(T__5);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SwitchCaseContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public List<StatementContext> statement() {
			return getRuleContexts(StatementContext.class);
		}
		public StatementContext statement(int i) {
			return getRuleContext(StatementContext.class,i);
		}
		public SwitchCaseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchCase; }
	}

	public final SwitchCaseContext switchCase() throws RecognitionException {
		SwitchCaseContext _localctx = new SwitchCaseContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_switchCase);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(196);
			match(T__13);
			setState(197);
			expr();
			setState(198);
			match(T__14);
			setState(202);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 576460821071274880L) != 0)) {
				{
				{
				setState(199);
				statement();
				}
				}
				setState(204);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DefaultCaseContext extends ParserRuleContext {
		public List<StatementContext> statement() {
			return getRuleContexts(StatementContext.class);
		}
		public StatementContext statement(int i) {
			return getRuleContext(StatementContext.class,i);
		}
		public DefaultCaseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_defaultCase; }
	}

	public final DefaultCaseContext defaultCase() throws RecognitionException {
		DefaultCaseContext _localctx = new DefaultCaseContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_defaultCase);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(205);
			match(T__15);
			setState(206);
			match(T__14);
			setState(210);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 576460821071274880L) != 0)) {
				{
				{
				setState(207);
				statement();
				}
				}
				setState(212);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ConstDeclContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ConstDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_constDecl; }
	}

	public final ConstDeclContext constDecl() throws RecognitionException {
		ConstDeclContext _localctx = new ConstDeclContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_constDecl);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(213);
			match(T__16);
			setState(214);
			match(ID);
			setState(215);
			type();
			setState(216);
			match(T__17);
			setState(217);
			expr();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayAssignmentContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public ArrayAssignmentContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayAssignment; }
	}

	public final ArrayAssignmentContext arrayAssignment() throws RecognitionException {
		ArrayAssignmentContext _localctx = new ArrayAssignmentContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_arrayAssignment);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(219);
			match(ID);
			setState(224); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(220);
				match(T__18);
				setState(221);
				expr();
				setState(222);
				match(T__19);
				}
				}
				setState(226); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==T__18 );
			setState(228);
			match(T__17);
			setState(229);
			expr();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnStmtContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ReturnStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnStmt; }
	}

	public final ReturnStmtContext returnStmt() throws RecognitionException {
		ReturnStmtContext _localctx = new ReturnStmtContext(_ctx, getState());
		enterRule(_localctx, 40, RULE_returnStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(231);
			match(T__20);
			setState(233);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,14,_ctx) ) {
			case 1:
				{
				setState(232);
				expr();
				}
				break;
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FunctionCallContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public ArgumentListContext argumentList() {
			return getRuleContext(ArgumentListContext.class,0);
		}
		public FunctionCallContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_functionCall; }
	}

	public final FunctionCallContext functionCall() throws RecognitionException {
		FunctionCallContext _localctx = new FunctionCallContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_functionCall);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(235);
			match(ID);
			setState(236);
			match(T__1);
			setState(238);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1148417904979476484L) != 0)) {
				{
				setState(237);
				argumentList();
				}
			}

			setState(240);
			match(T__2);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class WhileStmtContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public WhileStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_whileStmt; }
	}

	public final WhileStmtContext whileStmt() throws RecognitionException {
		WhileStmtContext _localctx = new WhileStmtContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_whileStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(242);
			match(T__21);
			setState(243);
			expr();
			setState(244);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IfStmtContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public List<BlockContext> block() {
			return getRuleContexts(BlockContext.class);
		}
		public BlockContext block(int i) {
			return getRuleContext(BlockContext.class,i);
		}
		public IfStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_ifStmt; }
	}

	public final IfStmtContext ifStmt() throws RecognitionException {
		IfStmtContext _localctx = new IfStmtContext(_ctx, getState());
		enterRule(_localctx, 46, RULE_ifStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(246);
			match(T__22);
			setState(247);
			expr();
			setState(248);
			block();
			setState(251);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__23) {
				{
				setState(249);
				match(T__23);
				setState(250);
				block();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class VarDeclContext extends ParserRuleContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public VarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_varDecl; }
	}

	public final VarDeclContext varDecl() throws RecognitionException {
		VarDeclContext _localctx = new VarDeclContext(_ctx, getState());
		enterRule(_localctx, 48, RULE_varDecl);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(253);
			match(T__24);
			setState(254);
			idList();
			setState(255);
			type();
			setState(258);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__17) {
				{
				setState(256);
				match(T__17);
				setState(257);
				exprList();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IdListContext extends ParserRuleContext {
		public List<TerminalNode> ID() { return getTokens(GolampiParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GolampiParser.ID, i);
		}
		public IdListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_idList; }
	}

	public final IdListContext idList() throws RecognitionException {
		IdListContext _localctx = new IdListContext(_ctx, getState());
		enterRule(_localctx, 50, RULE_idList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(260);
			match(ID);
			setState(265);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__3) {
				{
				{
				setState(261);
				match(T__3);
				setState(262);
				match(ID);
				}
				}
				setState(267);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprListContext extends ParserRuleContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public ExprListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_exprList; }
	}

	public final ExprListContext exprList() throws RecognitionException {
		ExprListContext _localctx = new ExprListContext(_ctx, getState());
		enterRule(_localctx, 52, RULE_exprList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(268);
			expr();
			setState(273);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__3) {
				{
				{
				setState(269);
				match(T__3);
				setState(270);
				expr();
				}
				}
				setState(275);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ShortVarDeclContext extends ParserRuleContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public ShortVarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_shortVarDecl; }
	}

	public final ShortVarDeclContext shortVarDecl() throws RecognitionException {
		ShortVarDeclContext _localctx = new ShortVarDeclContext(_ctx, getState());
		enterRule(_localctx, 54, RULE_shortVarDecl);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(276);
			idList();
			setState(277);
			match(T__25);
			setState(278);
			exprList();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AssignmentContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public AssignOpContext assignOp() {
			return getRuleContext(AssignOpContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public AssignmentContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_assignment; }
	}

	public final AssignmentContext assignment() throws RecognitionException {
		AssignmentContext _localctx = new AssignmentContext(_ctx, getState());
		enterRule(_localctx, 56, RULE_assignment);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(280);
			match(ID);
			setState(281);
			assignOp();
			setState(282);
			expr();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AssignOpContext extends ParserRuleContext {
		public AssignOpContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_assignOp; }
	}

	public final AssignOpContext assignOp() throws RecognitionException {
		AssignOpContext _localctx = new AssignOpContext(_ctx, getState());
		enterRule(_localctx, 58, RULE_assignOp);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(284);
			_la = _input.LA(1);
			if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 2013528064L) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TypeContext extends ParserRuleContext {
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public PrimitiveTypeContext primitiveType() {
			return getRuleContext(PrimitiveTypeContext.class,0);
		}
		public TypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_type; }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 60, RULE_type);
		try {
			setState(288);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__18:
				enterOuterAlt(_localctx, 1);
				{
				setState(286);
				arrayType();
				}
				break;
			case T__30:
			case T__31:
			case T__32:
			case T__33:
			case T__34:
				enterOuterAlt(_localctx, 2);
				{
				setState(287);
				primitiveType();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayTypeContext extends ParserRuleContext {
		public PrimitiveTypeContext primitiveType() {
			return getRuleContext(PrimitiveTypeContext.class,0);
		}
		public List<TerminalNode> INT() { return getTokens(GolampiParser.INT); }
		public TerminalNode INT(int i) {
			return getToken(GolampiParser.INT, i);
		}
		public ArrayTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayType; }
	}

	public final ArrayTypeContext arrayType() throws RecognitionException {
		ArrayTypeContext _localctx = new ArrayTypeContext(_ctx, getState());
		enterRule(_localctx, 62, RULE_arrayType);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(293); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(290);
				match(T__18);
				setState(291);
				match(INT);
				setState(292);
				match(T__19);
				}
				}
				setState(295); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==T__18 );
			setState(297);
			primitiveType();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PrimitiveTypeContext extends ParserRuleContext {
		public PrimitiveTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_primitiveType; }
	}

	public final PrimitiveTypeContext primitiveType() throws RecognitionException {
		PrimitiveTypeContext _localctx = new PrimitiveTypeContext(_ctx, getState());
		enterRule(_localctx, 64, RULE_primitiveType);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(299);
			_la = _input.LA(1);
			if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 66571993088L) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PrintStmtContext extends ParserRuleContext {
		public ArgumentListContext argumentList() {
			return getRuleContext(ArgumentListContext.class,0);
		}
		public PrintStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_printStmt; }
	}

	public final PrintStmtContext printStmt() throws RecognitionException {
		PrintStmtContext _localctx = new PrintStmtContext(_ctx, getState());
		enterRule(_localctx, 66, RULE_printStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(301);
			match(T__35);
			setState(302);
			match(T__36);
			setState(303);
			match(T__37);
			setState(304);
			match(T__1);
			setState(306);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1148417904979476484L) != 0)) {
				{
				setState(305);
				argumentList();
				}
			}

			setState(308);
			match(T__2);
			setState(310);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__9) {
				{
				setState(309);
				match(T__9);
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArgumentListContext extends ParserRuleContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public ArgumentListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_argumentList; }
	}

	public final ArgumentListContext argumentList() throws RecognitionException {
		ArgumentListContext _localctx = new ArgumentListContext(_ctx, getState());
		enterRule(_localctx, 68, RULE_argumentList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(312);
			expr();
			setState(317);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__3) {
				{
				{
				setState(313);
				match(T__3);
				setState(314);
				expr();
				}
				}
				setState(319);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprContext extends ParserRuleContext {
		public LogicalOrExprContext logicalOrExpr() {
			return getRuleContext(LogicalOrExprContext.class,0);
		}
		public ExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expr; }
	}

	public final ExprContext expr() throws RecognitionException {
		ExprContext _localctx = new ExprContext(_ctx, getState());
		enterRule(_localctx, 70, RULE_expr);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(320);
			logicalOrExpr();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LogicalOrExprContext extends ParserRuleContext {
		public List<LogicalAndExprContext> logicalAndExpr() {
			return getRuleContexts(LogicalAndExprContext.class);
		}
		public LogicalAndExprContext logicalAndExpr(int i) {
			return getRuleContext(LogicalAndExprContext.class,i);
		}
		public LogicalOrExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_logicalOrExpr; }
	}

	public final LogicalOrExprContext logicalOrExpr() throws RecognitionException {
		LogicalOrExprContext _localctx = new LogicalOrExprContext(_ctx, getState());
		enterRule(_localctx, 72, RULE_logicalOrExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(322);
			logicalAndExpr();
			setState(327);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__38) {
				{
				{
				setState(323);
				match(T__38);
				setState(324);
				logicalAndExpr();
				}
				}
				setState(329);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LogicalAndExprContext extends ParserRuleContext {
		public List<EqualityExprContext> equalityExpr() {
			return getRuleContexts(EqualityExprContext.class);
		}
		public EqualityExprContext equalityExpr(int i) {
			return getRuleContext(EqualityExprContext.class,i);
		}
		public LogicalAndExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_logicalAndExpr; }
	}

	public final LogicalAndExprContext logicalAndExpr() throws RecognitionException {
		LogicalAndExprContext _localctx = new LogicalAndExprContext(_ctx, getState());
		enterRule(_localctx, 74, RULE_logicalAndExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(330);
			equalityExpr();
			setState(335);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__39) {
				{
				{
				setState(331);
				match(T__39);
				setState(332);
				equalityExpr();
				}
				}
				setState(337);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class EqualityExprContext extends ParserRuleContext {
		public List<RelationalExprContext> relationalExpr() {
			return getRuleContexts(RelationalExprContext.class);
		}
		public RelationalExprContext relationalExpr(int i) {
			return getRuleContext(RelationalExprContext.class,i);
		}
		public EqualityExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_equalityExpr; }
	}

	public final EqualityExprContext equalityExpr() throws RecognitionException {
		EqualityExprContext _localctx = new EqualityExprContext(_ctx, getState());
		enterRule(_localctx, 76, RULE_equalityExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(338);
			relationalExpr();
			setState(343);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__40 || _la==T__41) {
				{
				{
				setState(339);
				_la = _input.LA(1);
				if ( !(_la==T__40 || _la==T__41) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(340);
				relationalExpr();
				}
				}
				setState(345);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class RelationalExprContext extends ParserRuleContext {
		public List<AdditiveExprContext> additiveExpr() {
			return getRuleContexts(AdditiveExprContext.class);
		}
		public AdditiveExprContext additiveExpr(int i) {
			return getRuleContext(AdditiveExprContext.class,i);
		}
		public RelationalExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_relationalExpr; }
	}

	public final RelationalExprContext relationalExpr() throws RecognitionException {
		RelationalExprContext _localctx = new RelationalExprContext(_ctx, getState());
		enterRule(_localctx, 78, RULE_relationalExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(346);
			additiveExpr();
			setState(351);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 131941395333120L) != 0)) {
				{
				{
				setState(347);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 131941395333120L) != 0)) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(348);
				additiveExpr();
				}
				}
				setState(353);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AdditiveExprContext extends ParserRuleContext {
		public List<MultiplicativeExprContext> multiplicativeExpr() {
			return getRuleContexts(MultiplicativeExprContext.class);
		}
		public MultiplicativeExprContext multiplicativeExpr(int i) {
			return getRuleContext(MultiplicativeExprContext.class,i);
		}
		public AdditiveExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_additiveExpr; }
	}

	public final AdditiveExprContext additiveExpr() throws RecognitionException {
		AdditiveExprContext _localctx = new AdditiveExprContext(_ctx, getState());
		enterRule(_localctx, 80, RULE_additiveExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(354);
			multiplicativeExpr();
			setState(359);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__46 || _la==T__47) {
				{
				{
				setState(355);
				_la = _input.LA(1);
				if ( !(_la==T__46 || _la==T__47) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(356);
				multiplicativeExpr();
				}
				}
				setState(361);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class MultiplicativeExprContext extends ParserRuleContext {
		public List<UnaryExprContext> unaryExpr() {
			return getRuleContexts(UnaryExprContext.class);
		}
		public UnaryExprContext unaryExpr(int i) {
			return getRuleContext(UnaryExprContext.class,i);
		}
		public MultiplicativeExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_multiplicativeExpr; }
	}

	public final MultiplicativeExprContext multiplicativeExpr() throws RecognitionException {
		MultiplicativeExprContext _localctx = new MultiplicativeExprContext(_ctx, getState());
		enterRule(_localctx, 82, RULE_multiplicativeExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(362);
			unaryExpr();
			setState(367);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 3940649673949184L) != 0)) {
				{
				{
				setState(363);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 3940649673949184L) != 0)) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(364);
				unaryExpr();
				}
				}
				setState(369);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class UnaryExprContext extends ParserRuleContext {
		public UnaryExprContext unaryExpr() {
			return getRuleContext(UnaryExprContext.class,0);
		}
		public PrimaryExprContext primaryExpr() {
			return getRuleContext(PrimaryExprContext.class,0);
		}
		public UnaryExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_unaryExpr; }
	}

	public final UnaryExprContext unaryExpr() throws RecognitionException {
		UnaryExprContext _localctx = new UnaryExprContext(_ctx, getState());
		enterRule(_localctx, 84, RULE_unaryExpr);
		try {
			setState(373);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__51:
				enterOuterAlt(_localctx, 1);
				{
				setState(370);
				match(T__51);
				setState(371);
				unaryExpr();
				}
				break;
			case T__1:
			case INT:
			case FLOAT:
			case STRING:
			case RUNE:
			case BOOL:
			case NIL:
			case ID:
				enterOuterAlt(_localctx, 2);
				{
				setState(372);
				primaryExpr();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PrimaryExprContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public LiteralContext literal() {
			return getRuleContext(LiteralContext.class,0);
		}
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public PrimaryExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_primaryExpr; }
	}

	public final PrimaryExprContext primaryExpr() throws RecognitionException {
		PrimaryExprContext _localctx = new PrimaryExprContext(_ctx, getState());
		enterRule(_localctx, 86, RULE_primaryExpr);
		try {
			setState(381);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__1:
				enterOuterAlt(_localctx, 1);
				{
				setState(375);
				match(T__1);
				setState(376);
				expr();
				setState(377);
				match(T__2);
				}
				break;
			case INT:
			case FLOAT:
			case STRING:
			case RUNE:
			case BOOL:
			case NIL:
				enterOuterAlt(_localctx, 2);
				{
				setState(379);
				literal();
				}
				break;
			case ID:
				enterOuterAlt(_localctx, 3);
				{
				setState(380);
				match(ID);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LiteralContext extends ParserRuleContext {
		public TerminalNode INT() { return getToken(GolampiParser.INT, 0); }
		public TerminalNode FLOAT() { return getToken(GolampiParser.FLOAT, 0); }
		public TerminalNode STRING() { return getToken(GolampiParser.STRING, 0); }
		public TerminalNode BOOL() { return getToken(GolampiParser.BOOL, 0); }
		public TerminalNode RUNE() { return getToken(GolampiParser.RUNE, 0); }
		public TerminalNode NIL() { return getToken(GolampiParser.NIL, 0); }
		public LiteralContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_literal; }
	}

	public final LiteralContext literal() throws RecognitionException {
		LiteralContext _localctx = new LiteralContext(_ctx, getState());
		enterRule(_localctx, 88, RULE_literal);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(383);
			_la = _input.LA(1);
			if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 567453553048682496L) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static final String _serializedATN =
		"\u0004\u0001>\u0182\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0002\u0019\u0007\u0019\u0002\u001a\u0007\u001a\u0002\u001b\u0007\u001b"+
		"\u0002\u001c\u0007\u001c\u0002\u001d\u0007\u001d\u0002\u001e\u0007\u001e"+
		"\u0002\u001f\u0007\u001f\u0002 \u0007 \u0002!\u0007!\u0002\"\u0007\"\u0002"+
		"#\u0007#\u0002$\u0007$\u0002%\u0007%\u0002&\u0007&\u0002\'\u0007\'\u0002"+
		"(\u0007(\u0002)\u0007)\u0002*\u0007*\u0002+\u0007+\u0002,\u0007,\u0001"+
		"\u0000\u0005\u0000\\\b\u0000\n\u0000\f\u0000_\t\u0000\u0001\u0000\u0001"+
		"\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001g\b"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0002\u0001\u0002\u0001"+
		"\u0002\u0005\u0002o\b\u0002\n\u0002\f\u0002r\t\u0002\u0001\u0003\u0001"+
		"\u0003\u0001\u0003\u0001\u0004\u0001\u0004\u0005\u0004y\b\u0004\n\u0004"+
		"\f\u0004|\t\u0004\u0001\u0004\u0001\u0004\u0001\u0005\u0001\u0005\u0001"+
		"\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001"+
		"\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001"+
		"\u0005\u0003\u0005\u008f\b\u0005\u0001\u0006\u0001\u0006\u0001\u0007\u0001"+
		"\u0007\u0001\b\u0001\b\u0001\b\u0003\b\u0098\b\b\u0001\t\u0001\t\u0001"+
		"\t\u0001\t\u0001\t\u0001\t\u0001\t\u0001\t\u0001\n\u0001\n\u0001\n\u0001"+
		"\n\u0001\u000b\u0001\u000b\u0001\u000b\u0001\f\u0001\f\u0003\f\u00ab\b"+
		"\f\u0001\r\u0001\r\u0003\r\u00af\b\r\u0001\u000e\u0001\u000e\u0001\u000e"+
		"\u0001\u000e\u0003\u000e\u00b5\b\u000e\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0005\u000f\u00bb\b\u000f\n\u000f\f\u000f\u00be\t\u000f\u0001"+
		"\u000f\u0003\u000f\u00c1\b\u000f\u0001\u000f\u0001\u000f\u0001\u0010\u0001"+
		"\u0010\u0001\u0010\u0001\u0010\u0005\u0010\u00c9\b\u0010\n\u0010\f\u0010"+
		"\u00cc\t\u0010\u0001\u0011\u0001\u0011\u0001\u0011\u0005\u0011\u00d1\b"+
		"\u0011\n\u0011\f\u0011\u00d4\t\u0011\u0001\u0012\u0001\u0012\u0001\u0012"+
		"\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0013\u0001\u0013\u0001\u0013"+
		"\u0001\u0013\u0001\u0013\u0004\u0013\u00e1\b\u0013\u000b\u0013\f\u0013"+
		"\u00e2\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0014\u0001\u0014\u0003"+
		"\u0014\u00ea\b\u0014\u0001\u0015\u0001\u0015\u0001\u0015\u0003\u0015\u00ef"+
		"\b\u0015\u0001\u0015\u0001\u0015\u0001\u0016\u0001\u0016\u0001\u0016\u0001"+
		"\u0016\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0003"+
		"\u0017\u00fc\b\u0017\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0003\u0018\u0103\b\u0018\u0001\u0019\u0001\u0019\u0001\u0019\u0005"+
		"\u0019\u0108\b\u0019\n\u0019\f\u0019\u010b\t\u0019\u0001\u001a\u0001\u001a"+
		"\u0001\u001a\u0005\u001a\u0110\b\u001a\n\u001a\f\u001a\u0113\t\u001a\u0001"+
		"\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001c\u0001\u001c\u0001"+
		"\u001c\u0001\u001c\u0001\u001d\u0001\u001d\u0001\u001e\u0001\u001e\u0003"+
		"\u001e\u0121\b\u001e\u0001\u001f\u0001\u001f\u0001\u001f\u0004\u001f\u0126"+
		"\b\u001f\u000b\u001f\f\u001f\u0127\u0001\u001f\u0001\u001f\u0001 \u0001"+
		" \u0001!\u0001!\u0001!\u0001!\u0001!\u0003!\u0133\b!\u0001!\u0001!\u0003"+
		"!\u0137\b!\u0001\"\u0001\"\u0001\"\u0005\"\u013c\b\"\n\"\f\"\u013f\t\""+
		"\u0001#\u0001#\u0001$\u0001$\u0001$\u0005$\u0146\b$\n$\f$\u0149\t$\u0001"+
		"%\u0001%\u0001%\u0005%\u014e\b%\n%\f%\u0151\t%\u0001&\u0001&\u0001&\u0005"+
		"&\u0156\b&\n&\f&\u0159\t&\u0001\'\u0001\'\u0001\'\u0005\'\u015e\b\'\n"+
		"\'\f\'\u0161\t\'\u0001(\u0001(\u0001(\u0005(\u0166\b(\n(\f(\u0169\t(\u0001"+
		")\u0001)\u0001)\u0005)\u016e\b)\n)\f)\u0171\t)\u0001*\u0001*\u0001*\u0003"+
		"*\u0176\b*\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0003+\u017e\b+\u0001"+
		",\u0001,\u0001,\u0000\u0000-\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010"+
		"\u0012\u0014\u0016\u0018\u001a\u001c\u001e \"$&(*,.02468:<>@BDFHJLNPR"+
		"TVX\u0000\u0007\u0002\u0000\u0012\u0012\u001b\u001e\u0001\u0000\u001f"+
		"#\u0001\u0000)*\u0001\u0000+.\u0001\u0000/0\u0001\u000013\u0001\u0000"+
		"5:\u0184\u0000]\u0001\u0000\u0000\u0000\u0002b\u0001\u0000\u0000\u0000"+
		"\u0004k\u0001\u0000\u0000\u0000\u0006s\u0001\u0000\u0000\u0000\bv\u0001"+
		"\u0000\u0000\u0000\n\u008e\u0001\u0000\u0000\u0000\f\u0090\u0001\u0000"+
		"\u0000\u0000\u000e\u0092\u0001\u0000\u0000\u0000\u0010\u0097\u0001\u0000"+
		"\u0000\u0000\u0012\u0099\u0001\u0000\u0000\u0000\u0014\u00a1\u0001\u0000"+
		"\u0000\u0000\u0016\u00a5\u0001\u0000\u0000\u0000\u0018\u00aa\u0001\u0000"+
		"\u0000\u0000\u001a\u00ae\u0001\u0000\u0000\u0000\u001c\u00b4\u0001\u0000"+
		"\u0000\u0000\u001e\u00b6\u0001\u0000\u0000\u0000 \u00c4\u0001\u0000\u0000"+
		"\u0000\"\u00cd\u0001\u0000\u0000\u0000$\u00d5\u0001\u0000\u0000\u0000"+
		"&\u00db\u0001\u0000\u0000\u0000(\u00e7\u0001\u0000\u0000\u0000*\u00eb"+
		"\u0001\u0000\u0000\u0000,\u00f2\u0001\u0000\u0000\u0000.\u00f6\u0001\u0000"+
		"\u0000\u00000\u00fd\u0001\u0000\u0000\u00002\u0104\u0001\u0000\u0000\u0000"+
		"4\u010c\u0001\u0000\u0000\u00006\u0114\u0001\u0000\u0000\u00008\u0118"+
		"\u0001\u0000\u0000\u0000:\u011c\u0001\u0000\u0000\u0000<\u0120\u0001\u0000"+
		"\u0000\u0000>\u0125\u0001\u0000\u0000\u0000@\u012b\u0001\u0000\u0000\u0000"+
		"B\u012d\u0001\u0000\u0000\u0000D\u0138\u0001\u0000\u0000\u0000F\u0140"+
		"\u0001\u0000\u0000\u0000H\u0142\u0001\u0000\u0000\u0000J\u014a\u0001\u0000"+
		"\u0000\u0000L\u0152\u0001\u0000\u0000\u0000N\u015a\u0001\u0000\u0000\u0000"+
		"P\u0162\u0001\u0000\u0000\u0000R\u016a\u0001\u0000\u0000\u0000T\u0175"+
		"\u0001\u0000\u0000\u0000V\u017d\u0001\u0000\u0000\u0000X\u017f\u0001\u0000"+
		"\u0000\u0000Z\\\u0003\u0002\u0001\u0000[Z\u0001\u0000\u0000\u0000\\_\u0001"+
		"\u0000\u0000\u0000][\u0001\u0000\u0000\u0000]^\u0001\u0000\u0000\u0000"+
		"^`\u0001\u0000\u0000\u0000_]\u0001\u0000\u0000\u0000`a\u0005\u0000\u0000"+
		"\u0001a\u0001\u0001\u0000\u0000\u0000bc\u0005\u0001\u0000\u0000cd\u0005"+
		";\u0000\u0000df\u0005\u0002\u0000\u0000eg\u0003\u0004\u0002\u0000fe\u0001"+
		"\u0000\u0000\u0000fg\u0001\u0000\u0000\u0000gh\u0001\u0000\u0000\u0000"+
		"hi\u0005\u0003\u0000\u0000ij\u0003\b\u0004\u0000j\u0003\u0001\u0000\u0000"+
		"\u0000kp\u0003\u0006\u0003\u0000lm\u0005\u0004\u0000\u0000mo\u0003\u0006"+
		"\u0003\u0000nl\u0001\u0000\u0000\u0000or\u0001\u0000\u0000\u0000pn\u0001"+
		"\u0000\u0000\u0000pq\u0001\u0000\u0000\u0000q\u0005\u0001\u0000\u0000"+
		"\u0000rp\u0001\u0000\u0000\u0000st\u0005;\u0000\u0000tu\u0003<\u001e\u0000"+
		"u\u0007\u0001\u0000\u0000\u0000vz\u0005\u0005\u0000\u0000wy\u0003\n\u0005"+
		"\u0000xw\u0001\u0000\u0000\u0000y|\u0001\u0000\u0000\u0000zx\u0001\u0000"+
		"\u0000\u0000z{\u0001\u0000\u0000\u0000{}\u0001\u0000\u0000\u0000|z\u0001"+
		"\u0000\u0000\u0000}~\u0005\u0006\u0000\u0000~\t\u0001\u0000\u0000\u0000"+
		"\u007f\u008f\u00030\u0018\u0000\u0080\u008f\u00036\u001b\u0000\u0081\u008f"+
		"\u00038\u001c\u0000\u0082\u008f\u0003.\u0017\u0000\u0083\u008f\u0003,"+
		"\u0016\u0000\u0084\u008f\u0003(\u0014\u0000\u0085\u008f\u0003*\u0015\u0000"+
		"\u0086\u008f\u0003B!\u0000\u0087\u008f\u0003&\u0013\u0000\u0088\u008f"+
		"\u0003$\u0012\u0000\u0089\u008f\u0003\u001e\u000f\u0000\u008a\u008f\u0003"+
		"\u0010\b\u0000\u008b\u008f\u0003\f\u0006\u0000\u008c\u008f\u0003\u000e"+
		"\u0007\u0000\u008d\u008f\u0003\u001c\u000e\u0000\u008e\u007f\u0001\u0000"+
		"\u0000\u0000\u008e\u0080\u0001\u0000\u0000\u0000\u008e\u0081\u0001\u0000"+
		"\u0000\u0000\u008e\u0082\u0001\u0000\u0000\u0000\u008e\u0083\u0001\u0000"+
		"\u0000\u0000\u008e\u0084\u0001\u0000\u0000\u0000\u008e\u0085\u0001\u0000"+
		"\u0000\u0000\u008e\u0086\u0001\u0000\u0000\u0000\u008e\u0087\u0001\u0000"+
		"\u0000\u0000\u008e\u0088\u0001\u0000\u0000\u0000\u008e\u0089\u0001\u0000"+
		"\u0000\u0000\u008e\u008a\u0001\u0000\u0000\u0000\u008e\u008b\u0001\u0000"+
		"\u0000\u0000\u008e\u008c\u0001\u0000\u0000\u0000\u008e\u008d\u0001\u0000"+
		"\u0000\u0000\u008f\u000b\u0001\u0000\u0000\u0000\u0090\u0091\u0005\u0007"+
		"\u0000\u0000\u0091\r\u0001\u0000\u0000\u0000\u0092\u0093\u0005\b\u0000"+
		"\u0000\u0093\u000f\u0001\u0000\u0000\u0000\u0094\u0098\u0003\u0012\t\u0000"+
		"\u0095\u0098\u0003\u0014\n\u0000\u0096\u0098\u0003\u0016\u000b\u0000\u0097"+
		"\u0094\u0001\u0000\u0000\u0000\u0097\u0095\u0001\u0000\u0000\u0000\u0097"+
		"\u0096\u0001\u0000\u0000\u0000\u0098\u0011\u0001\u0000\u0000\u0000\u0099"+
		"\u009a\u0005\t\u0000\u0000\u009a\u009b\u0003\u0018\f\u0000\u009b\u009c"+
		"\u0005\n\u0000\u0000\u009c\u009d\u0003F#\u0000\u009d\u009e\u0005\n\u0000"+
		"\u0000\u009e\u009f\u0003\u001a\r\u0000\u009f\u00a0\u0003\b\u0004\u0000"+
		"\u00a0\u0013\u0001\u0000\u0000\u0000\u00a1\u00a2\u0005\t\u0000\u0000\u00a2"+
		"\u00a3\u0003F#\u0000\u00a3\u00a4\u0003\b\u0004\u0000\u00a4\u0015\u0001"+
		"\u0000\u0000\u0000\u00a5\u00a6\u0005\t\u0000\u0000\u00a6\u00a7\u0003\b"+
		"\u0004\u0000\u00a7\u0017\u0001\u0000\u0000\u0000\u00a8\u00ab\u00036\u001b"+
		"\u0000\u00a9\u00ab\u00038\u001c\u0000\u00aa\u00a8\u0001\u0000\u0000\u0000"+
		"\u00aa\u00a9\u0001\u0000\u0000\u0000\u00ab\u0019\u0001\u0000\u0000\u0000"+
		"\u00ac\u00af\u00038\u001c\u0000\u00ad\u00af\u0003\u001c\u000e\u0000\u00ae"+
		"\u00ac\u0001\u0000\u0000\u0000\u00ae\u00ad\u0001\u0000\u0000\u0000\u00af"+
		"\u001b\u0001\u0000\u0000\u0000\u00b0\u00b1\u0005;\u0000\u0000\u00b1\u00b5"+
		"\u0005\u000b\u0000\u0000\u00b2\u00b3\u0005;\u0000\u0000\u00b3\u00b5\u0005"+
		"\f\u0000\u0000\u00b4\u00b0\u0001\u0000\u0000\u0000\u00b4\u00b2\u0001\u0000"+
		"\u0000\u0000\u00b5\u001d\u0001\u0000\u0000\u0000\u00b6\u00b7\u0005\r\u0000"+
		"\u0000\u00b7\u00b8\u0003F#\u0000\u00b8\u00bc\u0005\u0005\u0000\u0000\u00b9"+
		"\u00bb\u0003 \u0010\u0000\u00ba\u00b9\u0001\u0000\u0000\u0000\u00bb\u00be"+
		"\u0001\u0000\u0000\u0000\u00bc\u00ba\u0001\u0000\u0000\u0000\u00bc\u00bd"+
		"\u0001\u0000\u0000\u0000\u00bd\u00c0\u0001\u0000\u0000\u0000\u00be\u00bc"+
		"\u0001\u0000\u0000\u0000\u00bf\u00c1\u0003\"\u0011\u0000\u00c0\u00bf\u0001"+
		"\u0000\u0000\u0000\u00c0\u00c1\u0001\u0000\u0000\u0000\u00c1\u00c2\u0001"+
		"\u0000\u0000\u0000\u00c2\u00c3\u0005\u0006\u0000\u0000\u00c3\u001f\u0001"+
		"\u0000\u0000\u0000\u00c4\u00c5\u0005\u000e\u0000\u0000\u00c5\u00c6\u0003"+
		"F#\u0000\u00c6\u00ca\u0005\u000f\u0000\u0000\u00c7\u00c9\u0003\n\u0005"+
		"\u0000\u00c8\u00c7\u0001\u0000\u0000\u0000\u00c9\u00cc\u0001\u0000\u0000"+
		"\u0000\u00ca\u00c8\u0001\u0000\u0000\u0000\u00ca\u00cb\u0001\u0000\u0000"+
		"\u0000\u00cb!\u0001\u0000\u0000\u0000\u00cc\u00ca\u0001\u0000\u0000\u0000"+
		"\u00cd\u00ce\u0005\u0010\u0000\u0000\u00ce\u00d2\u0005\u000f\u0000\u0000"+
		"\u00cf\u00d1\u0003\n\u0005\u0000\u00d0\u00cf\u0001\u0000\u0000\u0000\u00d1"+
		"\u00d4\u0001\u0000\u0000\u0000\u00d2\u00d0\u0001\u0000\u0000\u0000\u00d2"+
		"\u00d3\u0001\u0000\u0000\u0000\u00d3#\u0001\u0000\u0000\u0000\u00d4\u00d2"+
		"\u0001\u0000\u0000\u0000\u00d5\u00d6\u0005\u0011\u0000\u0000\u00d6\u00d7"+
		"\u0005;\u0000\u0000\u00d7\u00d8\u0003<\u001e\u0000\u00d8\u00d9\u0005\u0012"+
		"\u0000\u0000\u00d9\u00da\u0003F#\u0000\u00da%\u0001\u0000\u0000\u0000"+
		"\u00db\u00e0\u0005;\u0000\u0000\u00dc\u00dd\u0005\u0013\u0000\u0000\u00dd"+
		"\u00de\u0003F#\u0000\u00de\u00df\u0005\u0014\u0000\u0000\u00df\u00e1\u0001"+
		"\u0000\u0000\u0000\u00e0\u00dc\u0001\u0000\u0000\u0000\u00e1\u00e2\u0001"+
		"\u0000\u0000\u0000\u00e2\u00e0\u0001\u0000\u0000\u0000\u00e2\u00e3\u0001"+
		"\u0000\u0000\u0000\u00e3\u00e4\u0001\u0000\u0000\u0000\u00e4\u00e5\u0005"+
		"\u0012\u0000\u0000\u00e5\u00e6\u0003F#\u0000\u00e6\'\u0001\u0000\u0000"+
		"\u0000\u00e7\u00e9\u0005\u0015\u0000\u0000\u00e8\u00ea\u0003F#\u0000\u00e9"+
		"\u00e8\u0001\u0000\u0000\u0000\u00e9\u00ea\u0001\u0000\u0000\u0000\u00ea"+
		")\u0001\u0000\u0000\u0000\u00eb\u00ec\u0005;\u0000\u0000\u00ec\u00ee\u0005"+
		"\u0002\u0000\u0000\u00ed\u00ef\u0003D\"\u0000\u00ee\u00ed\u0001\u0000"+
		"\u0000\u0000\u00ee\u00ef\u0001\u0000\u0000\u0000\u00ef\u00f0\u0001\u0000"+
		"\u0000\u0000\u00f0\u00f1\u0005\u0003\u0000\u0000\u00f1+\u0001\u0000\u0000"+
		"\u0000\u00f2\u00f3\u0005\u0016\u0000\u0000\u00f3\u00f4\u0003F#\u0000\u00f4"+
		"\u00f5\u0003\b\u0004\u0000\u00f5-\u0001\u0000\u0000\u0000\u00f6\u00f7"+
		"\u0005\u0017\u0000\u0000\u00f7\u00f8\u0003F#\u0000\u00f8\u00fb\u0003\b"+
		"\u0004\u0000\u00f9\u00fa\u0005\u0018\u0000\u0000\u00fa\u00fc\u0003\b\u0004"+
		"\u0000\u00fb\u00f9\u0001\u0000\u0000\u0000\u00fb\u00fc\u0001\u0000\u0000"+
		"\u0000\u00fc/\u0001\u0000\u0000\u0000\u00fd\u00fe\u0005\u0019\u0000\u0000"+
		"\u00fe\u00ff\u00032\u0019\u0000\u00ff\u0102\u0003<\u001e\u0000\u0100\u0101"+
		"\u0005\u0012\u0000\u0000\u0101\u0103\u00034\u001a\u0000\u0102\u0100\u0001"+
		"\u0000\u0000\u0000\u0102\u0103\u0001\u0000\u0000\u0000\u01031\u0001\u0000"+
		"\u0000\u0000\u0104\u0109\u0005;\u0000\u0000\u0105\u0106\u0005\u0004\u0000"+
		"\u0000\u0106\u0108\u0005;\u0000\u0000\u0107\u0105\u0001\u0000\u0000\u0000"+
		"\u0108\u010b\u0001\u0000\u0000\u0000\u0109\u0107\u0001\u0000\u0000\u0000"+
		"\u0109\u010a\u0001\u0000\u0000\u0000\u010a3\u0001\u0000\u0000\u0000\u010b"+
		"\u0109\u0001\u0000\u0000\u0000\u010c\u0111\u0003F#\u0000\u010d\u010e\u0005"+
		"\u0004\u0000\u0000\u010e\u0110\u0003F#\u0000\u010f\u010d\u0001\u0000\u0000"+
		"\u0000\u0110\u0113\u0001\u0000\u0000\u0000\u0111\u010f\u0001\u0000\u0000"+
		"\u0000\u0111\u0112\u0001\u0000\u0000\u0000\u01125\u0001\u0000\u0000\u0000"+
		"\u0113\u0111\u0001\u0000\u0000\u0000\u0114\u0115\u00032\u0019\u0000\u0115"+
		"\u0116\u0005\u001a\u0000\u0000\u0116\u0117\u00034\u001a\u0000\u01177\u0001"+
		"\u0000\u0000\u0000\u0118\u0119\u0005;\u0000\u0000\u0119\u011a\u0003:\u001d"+
		"\u0000\u011a\u011b\u0003F#\u0000\u011b9\u0001\u0000\u0000\u0000\u011c"+
		"\u011d\u0007\u0000\u0000\u0000\u011d;\u0001\u0000\u0000\u0000\u011e\u0121"+
		"\u0003>\u001f\u0000\u011f\u0121\u0003@ \u0000\u0120\u011e\u0001\u0000"+
		"\u0000\u0000\u0120\u011f\u0001\u0000\u0000\u0000\u0121=\u0001\u0000\u0000"+
		"\u0000\u0122\u0123\u0005\u0013\u0000\u0000\u0123\u0124\u00055\u0000\u0000"+
		"\u0124\u0126\u0005\u0014\u0000\u0000\u0125\u0122\u0001\u0000\u0000\u0000"+
		"\u0126\u0127\u0001\u0000\u0000\u0000\u0127\u0125\u0001\u0000\u0000\u0000"+
		"\u0127\u0128\u0001\u0000\u0000\u0000\u0128\u0129\u0001\u0000\u0000\u0000"+
		"\u0129\u012a\u0003@ \u0000\u012a?\u0001\u0000\u0000\u0000\u012b\u012c"+
		"\u0007\u0001\u0000\u0000\u012cA\u0001\u0000\u0000\u0000\u012d\u012e\u0005"+
		"$\u0000\u0000\u012e\u012f\u0005%\u0000\u0000\u012f\u0130\u0005&\u0000"+
		"\u0000\u0130\u0132\u0005\u0002\u0000\u0000\u0131\u0133\u0003D\"\u0000"+
		"\u0132\u0131\u0001\u0000\u0000\u0000\u0132\u0133\u0001\u0000\u0000\u0000"+
		"\u0133\u0134\u0001\u0000\u0000\u0000\u0134\u0136\u0005\u0003\u0000\u0000"+
		"\u0135\u0137\u0005\n\u0000\u0000\u0136\u0135\u0001\u0000\u0000\u0000\u0136"+
		"\u0137\u0001\u0000\u0000\u0000\u0137C\u0001\u0000\u0000\u0000\u0138\u013d"+
		"\u0003F#\u0000\u0139\u013a\u0005\u0004\u0000\u0000\u013a\u013c\u0003F"+
		"#\u0000\u013b\u0139\u0001\u0000\u0000\u0000\u013c\u013f\u0001\u0000\u0000"+
		"\u0000\u013d\u013b\u0001\u0000\u0000\u0000\u013d\u013e\u0001\u0000\u0000"+
		"\u0000\u013eE\u0001\u0000\u0000\u0000\u013f\u013d\u0001\u0000\u0000\u0000"+
		"\u0140\u0141\u0003H$\u0000\u0141G\u0001\u0000\u0000\u0000\u0142\u0147"+
		"\u0003J%\u0000\u0143\u0144\u0005\'\u0000\u0000\u0144\u0146\u0003J%\u0000"+
		"\u0145\u0143\u0001\u0000\u0000\u0000\u0146\u0149\u0001\u0000\u0000\u0000"+
		"\u0147\u0145\u0001\u0000\u0000\u0000\u0147\u0148\u0001\u0000\u0000\u0000"+
		"\u0148I\u0001\u0000\u0000\u0000\u0149\u0147\u0001\u0000\u0000\u0000\u014a"+
		"\u014f\u0003L&\u0000\u014b\u014c\u0005(\u0000\u0000\u014c\u014e\u0003"+
		"L&\u0000\u014d\u014b\u0001\u0000\u0000\u0000\u014e\u0151\u0001\u0000\u0000"+
		"\u0000\u014f\u014d\u0001\u0000\u0000\u0000\u014f\u0150\u0001\u0000\u0000"+
		"\u0000\u0150K\u0001\u0000\u0000\u0000\u0151\u014f\u0001\u0000\u0000\u0000"+
		"\u0152\u0157\u0003N\'\u0000\u0153\u0154\u0007\u0002\u0000\u0000\u0154"+
		"\u0156\u0003N\'\u0000\u0155\u0153\u0001\u0000\u0000\u0000\u0156\u0159"+
		"\u0001\u0000\u0000\u0000\u0157\u0155\u0001\u0000\u0000\u0000\u0157\u0158"+
		"\u0001\u0000\u0000\u0000\u0158M\u0001\u0000\u0000\u0000\u0159\u0157\u0001"+
		"\u0000\u0000\u0000\u015a\u015f\u0003P(\u0000\u015b\u015c\u0007\u0003\u0000"+
		"\u0000\u015c\u015e\u0003P(\u0000\u015d\u015b\u0001\u0000\u0000\u0000\u015e"+
		"\u0161\u0001\u0000\u0000\u0000\u015f\u015d\u0001\u0000\u0000\u0000\u015f"+
		"\u0160\u0001\u0000\u0000\u0000\u0160O\u0001\u0000\u0000\u0000\u0161\u015f"+
		"\u0001\u0000\u0000\u0000\u0162\u0167\u0003R)\u0000\u0163\u0164\u0007\u0004"+
		"\u0000\u0000\u0164\u0166\u0003R)\u0000\u0165\u0163\u0001\u0000\u0000\u0000"+
		"\u0166\u0169\u0001\u0000\u0000\u0000\u0167\u0165\u0001\u0000\u0000\u0000"+
		"\u0167\u0168\u0001\u0000\u0000\u0000\u0168Q\u0001\u0000\u0000\u0000\u0169"+
		"\u0167\u0001\u0000\u0000\u0000\u016a\u016f\u0003T*\u0000\u016b\u016c\u0007"+
		"\u0005\u0000\u0000\u016c\u016e\u0003T*\u0000\u016d\u016b\u0001\u0000\u0000"+
		"\u0000\u016e\u0171\u0001\u0000\u0000\u0000\u016f\u016d\u0001\u0000\u0000"+
		"\u0000\u016f\u0170\u0001\u0000\u0000\u0000\u0170S\u0001\u0000\u0000\u0000"+
		"\u0171\u016f\u0001\u0000\u0000\u0000\u0172\u0173\u00054\u0000\u0000\u0173"+
		"\u0176\u0003T*\u0000\u0174\u0176\u0003V+\u0000\u0175\u0172\u0001\u0000"+
		"\u0000\u0000\u0175\u0174\u0001\u0000\u0000\u0000\u0176U\u0001\u0000\u0000"+
		"\u0000\u0177\u0178\u0005\u0002\u0000\u0000\u0178\u0179\u0003F#\u0000\u0179"+
		"\u017a\u0005\u0003\u0000\u0000\u017a\u017e\u0001\u0000\u0000\u0000\u017b"+
		"\u017e\u0003X,\u0000\u017c\u017e\u0005;\u0000\u0000\u017d\u0177\u0001"+
		"\u0000\u0000\u0000\u017d\u017b\u0001\u0000\u0000\u0000\u017d\u017c\u0001"+
		"\u0000\u0000\u0000\u017eW\u0001\u0000\u0000\u0000\u017f\u0180\u0007\u0006"+
		"\u0000\u0000\u0180Y\u0001\u0000\u0000\u0000!]fpz\u008e\u0097\u00aa\u00ae"+
		"\u00b4\u00bc\u00c0\u00ca\u00d2\u00e2\u00e9\u00ee\u00fb\u0102\u0109\u0111"+
		"\u0120\u0127\u0132\u0136\u013d\u0147\u014f\u0157\u015f\u0167\u016f\u0175"+
		"\u017d";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}