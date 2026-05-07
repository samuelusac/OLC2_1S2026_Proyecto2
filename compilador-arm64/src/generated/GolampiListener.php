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
	 * Enter a parse tree produced by {@see GolampiParser::returnType()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnType(Context\ReturnTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::returnType()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnType(Context\ReturnTypeContext $context): void;
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
	 * Enter a parse tree produced by {@see GolampiParser::breakStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterBreakStmt(Context\BreakStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::breakStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitBreakStmt(Context\BreakStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::continueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterContinueStmt(Context\ContinueStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::continueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitContinueStmt(Context\ContinueStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForStmt(Context\ForStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForStmt(Context\ForStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forClassic()}.
	 * @param $context The parse tree.
	 */
	public function enterForClassic(Context\ForClassicContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forClassic()}.
	 * @param $context The parse tree.
	 */
	public function exitForClassic(Context\ForClassicContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forConditional()}.
	 * @param $context The parse tree.
	 */
	public function enterForConditional(Context\ForConditionalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forConditional()}.
	 * @param $context The parse tree.
	 */
	public function exitForConditional(Context\ForConditionalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forInfinite()}.
	 * @param $context The parse tree.
	 */
	public function enterForInfinite(Context\ForInfiniteContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forInfinite()}.
	 * @param $context The parse tree.
	 */
	public function exitForInfinite(Context\ForInfiniteContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forInit()}.
	 * @param $context The parse tree.
	 */
	public function enterForInit(Context\ForInitContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forInit()}.
	 * @param $context The parse tree.
	 */
	public function exitForInit(Context\ForInitContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forUpdate()}.
	 * @param $context The parse tree.
	 */
	public function enterForUpdate(Context\ForUpdateContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forUpdate()}.
	 * @param $context The parse tree.
	 */
	public function exitForUpdate(Context\ForUpdateContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::unaryUpdate()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryUpdate(Context\UnaryUpdateContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::unaryUpdate()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryUpdate(Context\UnaryUpdateContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::switchCase()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchCase(Context\SwitchCaseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::switchCase()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchCase(Context\SwitchCaseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::defaultCase()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultCase(Context\DefaultCaseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::defaultCase()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultCase(Context\DefaultCaseContext $context): void;
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
	 * Enter a parse tree produced by {@see GolampiParser::assignOp()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignOp(Context\AssignOpContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::assignOp()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignOp(Context\AssignOpContext $context): void;
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
	 * Enter a parse tree produced by {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExpr(Context\ExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExpr(Context\ExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::logicalOrExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalOrExpr(Context\LogicalOrExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::logicalOrExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalOrExpr(Context\LogicalOrExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::logicalAndExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalAndExpr(Context\LogicalAndExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::logicalAndExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalAndExpr(Context\LogicalAndExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::equalityExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterEqualityExpr(Context\EqualityExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::equalityExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitEqualityExpr(Context\EqualityExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::relationalExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterRelationalExpr(Context\RelationalExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::relationalExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitRelationalExpr(Context\RelationalExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::additiveExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterAdditiveExpr(Context\AdditiveExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::additiveExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitAdditiveExpr(Context\AdditiveExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::multiplicativeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterMultiplicativeExpr(Context\MultiplicativeExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::multiplicativeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitMultiplicativeExpr(Context\MultiplicativeExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::unaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpr(Context\UnaryExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::unaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpr(Context\UnaryExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::primaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimaryExpr(Context\PrimaryExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::primaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimaryExpr(Context\PrimaryExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::arrayAccess()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAccess(Context\ArrayAccessContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayAccess()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAccess(Context\ArrayAccessContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::arrayLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayLiteral(Context\ArrayLiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayLiteral(Context\ArrayLiteralContext $context): void;
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