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
	 * Visit a parse tree produced by {@see GolampiParser::varDecl()}.
	 *
	 * @param Context\VarDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarDecl(Context\VarDeclContext $context);

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
	 * Visit a parse tree produced by {@see GolampiParser::type()}.
	 *
	 * @param Context\TypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType(Context\TypeContext $context);

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