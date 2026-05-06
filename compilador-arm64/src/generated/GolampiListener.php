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
	 * Enter a parse tree produced by {@see GolampiParser::parameterList()}.
	 * @param $context The parse tree.
	 */
	public function enterParameterList(Context\ParameterListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::parameterList()}.
	 * @param $context The parse tree.
	 */
	public function exitParameterList(Context\ParameterListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter(Context\ParameterContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter(Context\ParameterContext $context): void;
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
	 * Enter a parse tree produced by {@see GolampiParser::constDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterConstDecl(Context\ConstDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::constDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitConstDecl(Context\ConstDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::arrayAssignment()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAssignment(Context\ArrayAssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayAssignment()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAssignment(Context\ArrayAssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionCall(Context\FunctionCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionCall(Context\FunctionCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::whileStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterWhileStmt(Context\WhileStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::whileStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitWhileStmt(Context\WhileStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStmt(Context\IfStmtContext $context): void;
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
	 * Enter a parse tree produced by {@see GolampiParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function enterIdList(Context\IdListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function exitIdList(Context\IdListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::exprList()}.
	 * @param $context The parse tree.
	 */
	public function enterExprList(Context\ExprListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::exprList()}.
	 * @param $context The parse tree.
	 */
	public function exitExprList(Context\ExprListContext $context): void;
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
	 * Enter a parse tree produced by {@see GolampiParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayType(Context\ArrayTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayType(Context\ArrayTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::primitiveType()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimitiveType(Context\PrimitiveTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::primitiveType()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimitiveType(Context\PrimitiveTypeContext $context): void;
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
	 * Enter a parse tree produced by the `LogicalNot`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalNot(Context\LogicalNotContext $context): void;
	/**
	 * Exit a parse tree produced by the `LogicalNot` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalNot(Context\LogicalNotContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArrayAccess`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAccess(Context\ArrayAccessContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArrayAccess` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAccess(Context\ArrayAccessContext $context): void;
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
	 * Enter a parse tree produced by the `IdentifierExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifierExpr(Context\IdentifierExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `IdentifierExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifierExpr(Context\IdentifierExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `LogicalAnd`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalAnd(Context\LogicalAndContext $context): void;
	/**
	 * Exit a parse tree produced by the `LogicalAnd` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalAnd(Context\LogicalAndContext $context): void;
	/**
	 * Enter a parse tree produced by the `Relational`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterRelational(Context\RelationalContext $context): void;
	/**
	 * Exit a parse tree produced by the `Relational` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitRelational(Context\RelationalContext $context): void;
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
	 * Enter a parse tree produced by the `Equality`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterEquality(Context\EqualityContext $context): void;
	/**
	 * Exit a parse tree produced by the `Equality` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitEquality(Context\EqualityContext $context): void;
	/**
	 * Enter a parse tree produced by the `LogicalOr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalOr(Context\LogicalOrContext $context): void;
	/**
	 * Exit a parse tree produced by the `LogicalOr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalOr(Context\LogicalOrContext $context): void;
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