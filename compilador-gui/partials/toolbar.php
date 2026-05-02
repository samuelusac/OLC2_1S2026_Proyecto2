<form method="POST" action="compile.php" enctype="multipart/form-data">
    <div class="toolbar">

        <button type="submit" name="action" value="new">Nuevo / Limpiar</button>

        <input type="file" name="file">
        <button type="submit" name="action" value="load">Cargar archivo</button>

        <button type="button" onclick="saveFile()">Guardar código</button>

        <button type="submit" name="action" value="compile">Compilar</button>

        <button type="submit" name="action" value="clear_console">Limpiar consola</button>

    </div>

    <!-- Editor -->
    <div class="editor-container">
        <div id="lineNumbers"></div>
        <textarea id="editor" name="code"><?= htmlspecialchars($code) ?></textarea>
    </div>
</form>