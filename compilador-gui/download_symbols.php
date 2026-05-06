<?php

session_start();

$symbols = $_SESSION['symbols'] ?? [];

$html = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tabla de Símbolos</title>

<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #ddd;
    }

    h1 {
        margin-bottom: 20px;
    }
</style>
</head>
<body>

<h1>Tabla de Símbolos</h1>

<table>
    <tr>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Clase</th>
        <th>Scope</th>
        <th>Offset</th>
    </tr>
';

foreach ($symbols as $sym) {

    $html .= '<tr>';

    $html .= '<td>' . htmlspecialchars($sym['name']) . '</td>';
    $html .= '<td>' . htmlspecialchars($sym['type'] ?? '') . '</td>';
    $html .= '<td>' . htmlspecialchars($sym['kind'] ?? '') . '</td>';
    $html .= '<td>' . htmlspecialchars($sym['scope']) . '</td>';
    $html .= '<td>' . htmlspecialchars($sym['offset'] ?? '') . '</td>';

    $html .= '</tr>';
}

$html .= '
</table>

</body>
</html>
';

header('Content-Type: text/html');
header('Content-Disposition: attachment; filename="tabla_simbolos.html"');

echo $html;
exit;