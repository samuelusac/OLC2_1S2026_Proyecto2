<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Compilador OLC2</title>

<style>
body {
    font-family: Arial;
    background: #dfe6ed;
    margin: 0;
}

/* HEADER */
.header {
    background: #2f4f6f;
    color: white;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}

/* TOOLBAR */
.toolbar {
    background: #e5e5e5;
    padding: 10px;
    border-bottom: 1px solid #bbb;
}

.toolbar button {
    margin-right: 5px;
    padding: 5px 10px;
}

/* LAYOUT */
.main {
    display: flex;
    padding: 10px;
    gap: 10px;
}

/* IZQUIERDA */
.left {
    flex: 3;
}

/* DERECHA (REPORTES) */
.right {
    flex: 1;
    background: #f5f5f5;
    padding: 10px;
    border: 1px solid #ccc;
}

/* PANEL */
.panel {
    background: white;
    border: 1px solid #ccc;
    margin-bottom: 10px;
}

.panel-title {
    background: #f0f0f0;
    padding: 5px;
    font-weight: bold;
    border-bottom: 1px solid #ccc;
}

/* EDITOR */
.editor {
    display: flex;
    height: 200px;
}

.lines {
    background: #eee;
    padding: 5px;
    text-align: right;
    user-select: none;
}

textarea {
    flex: 1;
    border: none;
    outline: none;
    padding: 5px;
    resize: none;
}

/* CONSOLA */
.console {
    height: 120px;
    background: black;
    color: #00ff00;
    padding: 5px;
    font-family: monospace;
}

/* BOTONES REPORTES */
.report-btn {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 8px;
}
</style>

</head>

<body>

<div class="header">
    Intérprete/Compilador de OLC2
</div>

<div class="toolbar">
    <button>Nuevo Archivo</button>
    <button>Abrir Archivo</button>
    <button>Guardar Código</button>
    <button>Ejecutar / Analizar</button>
    <button>Limpiar Consola</button>
</div>

<div class="main">

    <!-- IZQUIERDA -->
    <div class="left">

        <!-- EDITOR -->
        <div class="panel">
            <div class="panel-title">Editor de Código</div>

            <div class="editor">
                <div class="lines" id="lines">1</div>
                <textarea id="code"></textarea>
            </div>
        </div>

        <!-- CONSOLA -->
        <div class="panel">
            <div class="panel-title">Consola de Salida</div>
            <div class="console">
                Hola Mundo!<br>
                Resultado: 20<br>
                Ejecución finalizada.
            </div>
        </div>

    </div>

    <!-- DERECHA -->
    <div class="right">

        <b>Reportes</b><br><br>

        <button class="report-btn">Descargar Resultado</button>
        <button class="report-btn">Descargar Errores</button>
        <button class="report-btn">Descargar Tabla de Símbolos</button>
        <button class="report-btn">Descargar AST</button>

    </div>

</div>

<script>
const textarea = document.getElementById("code");
const lines = document.getElementById("lines");

textarea.addEventListener("input", () => {
    let count = textarea.value.split("\n").length;
    let nums = "";

    for (let i = 1; i <= count; i++) {
        nums += i + "<br>";
    }

    lines.innerHTML = nums;
});
</script>

</body>
</html>