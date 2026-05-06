<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.2
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GolampiParser}.
 */
interface GolampiListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GolampiParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::functionDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionDecl(Context\FunctionDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::functionDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionDecl(Context\FunctionDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::varDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterVarDecl(Context\VarDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::varDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitVarDecl(Context\VarDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterShortVarDecl(Context\ShortVarDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitShortVarDecl(Context\ShortVarDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterType(Context\TypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitType(Context\TypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::printStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPrintStmt(Context\PrintStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::printStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPrintStmt(Context\PrintStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::argumentList()}.
	 * @param $context The parse tree.
	 */
	public function enterArgumentList(Context\ArgumentListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::argumentList()}.
	 * @param $context The parse tree.
	 */
	public function exitArgumentList(Context\ArgumentListContext $context): void;
	/**
	 * Enter a parse tree produced by the `MulDiv`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterMulDiv(Context\MulDivContext $context): void;
	/**
	 * Exit a parse tree produced by the `MulDiv` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitMulDiv(Context\MulDivContext $context): void;
	/**
	 * Enter a parse tree produced by the `AddSub`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAddSub(Context\AddSubContext $context): void;
	/**
	 * Exit a parse tree produced by the `AddSub` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAddSub(Context\AddSubContext $context): void;
	/**
	 * Enter a parse tree produced by the `Parens`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterParens(Context\ParensContext $context): void;
	/**
	 * Exit a parse tree produced by the `Parens` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitParens(Context\ParensContext $context): void;
	/**
	 * Enter a parse tree produced by the `LiteralExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteralExpr(Context\LiteralExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `LiteralExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteralExpr(Context\LiteralExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
}