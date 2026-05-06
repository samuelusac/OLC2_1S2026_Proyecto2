<?php
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
session_start();

$action = $_POST['action'] ?? '';

try {

    if ($action === 'new') {
        $_SESSION = [];
    }

    if ($action === 'load' && isset($_FILES['file'])) {
        $code = file_get_contents($_FILES['file']['tmp_name']);
        $_SESSION['code'] = $code;
    }

    if ($action === 'compile') {
        $code = $_POST['code'] ?? '';
        $_SESSION['code'] = $code;

        try {

            require_once __DIR__ . '/vendor/autoload.php';

            // tu listener (propio)
            require_once __DIR__ . '/core/AntlrErrorListener.php';

            // 🔥 cargar TODO lo generado por ANTLR
            $basePath = __DIR__ . '/../compilador-arm64/src/generated/';

            // 1. Interfaces primero
            require_once $basePath . 'GolampiListener.php';
            require_once $basePath . 'GolampiVisitor.php';

            // 2. Base classes
            require_once $basePath . 'GolampiBaseListener.php';
            require_once $basePath . 'GolampiBaseVisitor.php';

            // 3. Lexer y Parser
            require_once $basePath . 'GolampiLexer.php';
            require_once $basePath . 'GolampiParser.php';

            require_once __DIR__ . '/../compilador-arm64/src/SymbolTable.php';
            require_once __DIR__ . '/../compilador-arm64/src/StackFrame.php';
            require_once __DIR__ . '/../compilador-arm64/src/ErrorManager.php';

            require_once __DIR__ . '/../compilador-arm64/src/IRVisitor.php';




            $input = InputStream::fromString($code);
            $lexer = new GolampiLexer($input);
            $tokens = new CommonTokenStream($lexer);
            $parser = new GolampiParser($tokens);

            // quitamos default listeners
            $parser->removeErrorListeners();

            // agregamos el nuestro
            $errorListener = new AntlrErrorListener();
            $parser->addErrorListener($errorListener);

            $tree = $parser->program();

            // // 👇 Por ahora solo confirmamos que parseó
            // $_SESSION['output'] = "✅ Parse OK";

            if (!empty($errorListener->errors)) {

                $output = "❌ Errores de sintaxis:\n\n";

                foreach ($errorListener->errors as $err) {
                    $output .= "Línea {$err['line']}, Col {$err['column']}: {$err['message']}\n";
                }

                $_SESSION['output'] = $output;

                $visitor = new IRVisitor();

                $ir = $visitor->visit($tree);

                $semanticErrors = $visitor->getErrors();

                $allErrors = [];

                // sintácticos
                foreach ($errorListener->errors as $err) {

                    $allErrors[] = [
                        "type" => "Sintáctico",
                        ...$err
                    ];
                }

                // semánticos
                $allErrors = array_merge($allErrors, $semanticErrors);

                $_SESSION['errors'] = $allErrors;

            } else {
                // $_SESSION['output'] = "✅ Parse OK";
                $visitor = new IRVisitor();
                $ir = $visitor->visit($tree);

                $symbols = $visitor->getSymbolTable();
                $_SESSION['symbols'] = $symbols;

                $semanticErrors = $visitor->getErrors();

                $_SESSION['output'] = json_encode($ir, JSON_PRETTY_PRINT);
            }

        } catch (Throwable $e) {
            $_SESSION['output'] = "❌ Error:\n" . $e->getMessage();
        }
    }

    if ($action === 'clear') {
        $_SESSION['output'] = '';
    }

} catch (Throwable $e) {
    echo "<pre>";
    echo "ERROR PHP:\n";
    echo $e;
    echo "</pre>";
    exit;
}

header("Location: index.php");
exit;