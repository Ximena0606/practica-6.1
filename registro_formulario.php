<form method="post">
    Nombre: <input type="text" name="nombre" required>
    <input type="submit" value="Registrar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $archivo = "asistentes.txt";

    $file = fopen($archivo, "a"); // 'a' para agregar al final del archivo

    if ($file) {
        fwrite($file, $nombre . PHP_EOL); // escribir con salto de línea
        fclose($file);
        echo "Nombre registrado: $nombre";
    } else {
        echo "No se pudo abrir el archivo.";
    }
}
