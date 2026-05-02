<?php
session_start();

require_once 'core/Compiler.php';

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

        // Guardamos el código (clave para debug)
        file_put_contents('storage/last_code.txt', $code);

        $compiler = new Compiler();

        $result = $compiler->prepare($code);

        $_SESSION['output'] = $result['message'];
        $_SESSION['errors'] = $result['errors'];
    }

    if ($action === 'clear_console') {
        $_SESSION['output'] = '';
        $_SESSION['errors'] = [];
    }

} catch (Throwable $e) {
    echo "<pre style='color:red'>";
    echo "ERROR PHP:\n";
    echo $e;
    echo "</pre>";
    exit;
}

header("Location: index.php");
exit;