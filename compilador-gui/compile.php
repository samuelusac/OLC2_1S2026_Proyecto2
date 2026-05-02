<?php
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

        // 🔥 AQUÍ SIMULAMOS RESULTADO
        $_SESSION['output'] = "Código recibido:\n\n" . $code;
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