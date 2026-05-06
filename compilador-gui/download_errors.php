<?php

session_start();

$errors = $_SESSION['errors'] ?? [];

$html = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Errores</title>

<style>
body {
    font-family: Arial;
    padding: 20px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid black;
    padding: 8px;
}

th {
    background: #ddd;
}
</style>
</head>
<body>

<h1>Reporte de Errores</h1>

<table>
<tr>
    <th>Tipo</th>
    <th>Línea</th>
    <th>Columna</th>
    <th>Mensaje</th>
</tr>
';

foreach ($errors as $err) {

    $html .= '<tr>';

    $html .= '<td>' . htmlspecialchars($err['type']) . '</td>';
    $html .= '<td>' . htmlspecialchars($err['line']) . '</td>';
    $html .= '<td>' . htmlspecialchars($err['column']) . '</td>';
    $html .= '<td>' . htmlspecialchars($err['message']) . '</td>';

    $html .= '</tr>';
}

$html .= '
</table>

</body>
</html>
';

header('Content-Type: text/html');
header('Content-Disposition: attachment; filename="errores.html"');

echo $html;
exit;