<?php
session_start();

$code = $_SESSION['code'] ?? '';
$output = $_SESSION['output'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Compilador OLC2</title>

<style>
/* (MISMO CSS QUE YA TENÍAS, NO CAMBIA) */
body { font-family: Arial; background: #dfe6ed; margin: 0; }
.header { background: #2f4f6f; color: white; padding: 10px; text-align: center; font-weight: bold; }
.toolbar { background: #e5e5e5; padding: 10px; border-bottom: 1px solid #bbb; }
.toolbar button { margin-right: 5px; padding: 5px 10px; }
.main { display: flex; padding: 10px; gap: 10px; }
.left { flex: 3; }
.right { flex: 1; background: #f5f5f5; padding: 10px; border: 1px solid #ccc; }
.panel { background: white; border: 1px solid #ccc; margin-bottom: 10px; }
.panel-title { background: #f0f0f0; padding: 5px; font-weight: bold; border-bottom: 1px solid #ccc; }
.editor { display: flex; height: 200px; }
.lines { background: #eee; padding: 5px; text-align: right; user-select: none; }
textarea { flex: 1; border: none; outline: none; padding: 5px; resize: none; }
.console { height: 120px; background: black; color: #00ff00; padding: 5px; font-family: monospace; }
.report-btn { display: block; width: 100%; margin-bottom: 10px; padding: 8px; }
</style>

</head>

<body>

<div class="header">
    Intérprete/Compilador de OLC2
</div>

<!-- 🔥 FORMULARIO GLOBAL -->
<form method="POST" action="compile.php" enctype="multipart/form-data">

<div class="toolbar">

    <button type="submit" name="action" value="new">Nuevo Archivo</button>

    <!-- 🔥 BOTÓN REAL -->
    <button type="button" onclick="openFile()">Abrir Archivo</button>

    <!-- input oculto -->
    <input type="file" id="fileInput" name="file" style="display:none" onchange="submitLoad()">

    <button type="button" onclick="saveFile()">Guardar Código</button>

    <button type="submit" name="action" value="compile">Ejecutar / Analizar</button>

    <button type="submit" name="action" value="clear">Limpiar Consola</button>

</div>

<div class="main">

    <!-- IZQUIERDA -->
    <div class="left">

        <!-- EDITOR -->
        <div class="panel">
            <div class="panel-title">Editor de Código</div>

            <div class="editor">
                <div class="lines" id="lines">1</div>
                <textarea id="code" name="code"><?= htmlspecialchars($code) ?></textarea>
            </div>
        </div>

        <!-- CONSOLA -->
        <div class="panel">
            <div class="panel-title">Consola de Salida</div>
            <div class="console">
                <?= nl2br(htmlspecialchars($output ?: "Esperando ejecución...")) ?>
            </div>
        </div>

    </div>

    <!-- DERECHA -->
    <div class="right">

        <b>Reportes</b><br><br>

        <button class="report-btn" type="button">Descargar Resultado</button>
        <button class="report-btn" type="button">Descargar Errores</button>
        <button class="report-btn" type="button">Tabla de Símbolos</button>
        <button class="report-btn" type="button">Descargar ASM</button>
    </div>

</div>

</form>

<script>
// líneas
const textarea = document.getElementById("code");
const lines = document.getElementById("lines");

function updateLines() {
    let count = textarea.value.split("\n").length;
    let nums = "";

    for (let i = 1; i <= count; i++) {
        nums += i + "<br>";
    }

    lines.innerHTML = nums;
}

textarea.addEventListener("input", updateLines);
window.onload = updateLines;

// guardar archivo
function saveFile() {
    const blob = new Blob([textarea.value], { type: "text/plain" });
    const a = document.createElement("a");
    a.href = URL.createObjectURL(blob);

    const date = new Date().toISOString().slice(0,10);
    a.download = "codigo_" + date + ".olc";

    a.click();
}
</script>

<script>
function openFile() {
    document.getElementById('fileInput').click();
}

function submitLoad() {
    const form = document.querySelector("form");

    // agregamos action dinámicamente
    let input = document.createElement("input");
    input.type = "hidden";
    input.name = "action";
    input.value = "load";

    form.appendChild(input);
    form.submit();
}
</script>

</body>
</html>