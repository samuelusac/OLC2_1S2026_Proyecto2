<div class="console">
    <h3>Consola</h3>
    <pre>
<?php
if (!empty($errors)) {
    echo "ERRORES:\n";
    print_r($errors);
} else {
    echo $output ?: "Esperando compilación...";
}
?>
    </pre>
</div>