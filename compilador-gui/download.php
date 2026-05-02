<?php

$type = $_GET['type'];

$map = [
    'code' => 'storage/last_code.txt',
    'errors' => 'storage/errors.json'
];

$file = $map[$type] ?? null;

if ($file && file_exists($file)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    readfile($file);
}