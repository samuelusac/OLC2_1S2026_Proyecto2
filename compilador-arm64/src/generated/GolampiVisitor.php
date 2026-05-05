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
	 * Visit a parse tree produced by {@see GolampiParser::expr()}.
	 *
	 * @param Context\ExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpr(Context\ExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);
}