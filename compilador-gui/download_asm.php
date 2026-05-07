<?php

session_start();

$asm = $_SESSION['asm'] ?? '';

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="main.asm"');

echo $asm;
exit;