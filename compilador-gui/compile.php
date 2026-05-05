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

            // 👇 IMPORTANTE: rutas hacia tu parser
            require_once __DIR__ . '/../compilador-arm64/src/generated/GolampiLexer.php';
            require_once __DIR__ . '/../compilador-arm64/src/generated/GolampiParser.php';

            

            $input = InputStream::fromString($code);
            $lexer = new GolampiLexer($input);
            $tokens = new CommonTokenStream($lexer);
            $parser = new GolampiParser($tokens);

            $tree = $parser->program();

            // 👇 Por ahora solo confirmamos que parseó
            $_SESSION['output'] = "✅ Parse OK";

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