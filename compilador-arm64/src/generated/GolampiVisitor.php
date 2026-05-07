<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.2
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GolampiParser}.
 */
interface GolampiVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GolampiParser::program()}.
	 *
	 * @param Context\ProgramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProgram(Context\ProgramContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::functionDecl()}.
	 *
	 * @param Context\FunctionDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionDecl(Context\FunctionDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::parameterList()}.
	 *
	 * @param Context\ParameterListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameterList(Context\ParameterListContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::parameter()}.
	 *
	 * @param Context\ParameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter(Context\ParameterContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::block()}.
	 *
	 * @param Context\BlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlock(Context\BlockContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::statement()}.
	 *
	 * @param Context\StatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatement(Context\StatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::breakStmt()}.
	 *
	 * @param Context\BreakStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBreakStmt(Context\BreakStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::continueStmt()}.
	 *
	 * @param Context\ContinueStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContinueStmt(Context\ContinueStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forStmt()}.
	 *
	 * @param Context\ForStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForStmt(Context\ForStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forClassic()}.
	 *
	 * @param Context\ForClassicContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForClassic(Context\ForClassicContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forConditional()}.
	 *
	 * @param Context\ForConditionalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForConditional(Context\ForConditionalContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forInfinite()}.
	 *
	 * @param Context\ForInfiniteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForInfinite(Context\ForInfiniteContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forInit()}.
	 *
	 * @param Context\ForInitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForInit(Context\ForInitContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forUpdate()}.
	 *
	 * @param Context\ForUpdateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForUpdate(Context\ForUpdateContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::unaryUpdate()}.
	 *
	 * @param Context\UnaryUpdateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryUpdate(Context\UnaryUpdateContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::switchStmt()}.
	 *
	 * @param Context\SwitchStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchStmt(Context\SwitchStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::switchCase()}.
	 *
	 * @param Context\SwitchCaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchCase(Context\SwitchCaseContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::defaultCase()}.
	 *
	 * @param Context\DefaultCaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefaultCase(Context\DefaultCaseContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::constDecl()}.
	 *
	 * @param Context\ConstDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstDecl(Context\ConstDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::arrayAssignment()}.
	 *
	 * @param Context\ArrayAssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAssignment(Context\ArrayAssignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::returnStmt()}.
	 *
	 * @param Context\ReturnStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnStmt(Context\ReturnStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::functionCall()}.
	 *
	 * @param Context\FunctionCallContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionCall(Context\FunctionCallContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::whileStmt()}.
	 *
	 * @param Context\WhileStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhileStmt(Context\WhileStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::ifStmt()}.
	 *
	 * @param Context\IfStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStmt(Context\IfStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::varDecl()}.
	 *
	 * @param Context\VarDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarDecl(Context\VarDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::idList()}.
	 *
	 * @param Context\IdListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdList(Context\IdListContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::exprList()}.
	 *
	 * @param Context\ExprListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprList(Context\ExprListContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 *
	 * @param Context\ShortVarDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortVarDecl(Context\ShortVarDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::assignment()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::assignOp()}.
	 *
	 * @param Context\AssignOpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignOp(Context\AssignOpContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::type()}.
	 *
	 * @param Context\TypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType(Context\TypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::arrayType()}.
	 *
	 * @param Context\ArrayTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayType(Context\ArrayTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::primitiveType()}.
	 *
	 * @param Context\PrimitiveTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrimitiveType(Context\PrimitiveTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::printStmt()}.
	 *
	 * @param Context\PrintStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrintStmt(Context\PrintStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::argumentList()}.
	 *
	 * @param Context\ArgumentListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArgumentList(Context\ArgumentListContext $context);

	/**
	 * Visit a parse tree produced by the `LogicalNot` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\LogicalNotContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogicalNot(Context\LogicalNotContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayAccess` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\ArrayAccessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAccess(Context\ArrayAccessContext $context);

	/**
	 * Visit a parse tree produced by the `AddSub` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\AddSubContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddSub(Context\AddSubContext $context);

	/**
	 * Visit a parse tree produced by the `MulDiv` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\MulDivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulDiv(Context\MulDivContext $context);

	/**
	 * Visit a parse tree produced by the `Parens` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\ParensContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParens(Context\ParensContext $context);

	/**
	 * Visit a parse tree produced by the `IdentifierExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\IdentifierExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifierExpr(Context\IdentifierExprContext $context);

	/**
	 * Visit a parse tree produced by the `LogicalAnd` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\LogicalAndContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogicalAnd(Context\LogicalAndContext $context);

	/**
	 * Visit a parse tree produced by the `Relational` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\RelationalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelational(Context\RelationalContext $context);

	/**
	 * Visit a parse tree produced by the `LiteralExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\LiteralExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteralExpr(Context\LiteralExprContext $context);

	/**
	 * Visit a parse tree produced by the `Equality` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\EqualityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEquality(Context\EqualityContext $context);

	/**
	 * Visit a parse tree produced by the `LogicalOr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 *
	 * @param Context\LogicalOrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogicalOr(Context\LogicalOrContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);
}