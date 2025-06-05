<?php

// arreglo de nombres de asistentes
$nombres = [
    "Dua Lipa",
    "Louis Tomlinson",
    "Tom Holland",
    "Martin Vargas",
    "Pablo Villamil"
];

// Nombre del archivo donde se guardarán los nombres
$nombreArchivo = "asistentes.txt";

try {
    // tratamos de abrir el archivo para escritura
    // Si el archivo no existe, se creará automáticamente
    $RArchivo = fopen($nombreArchivo, "w");

    // Si no se pudo abrir el archivo, lanzamos una excepción
    if (!$RArchivo) {
        throw new Exception("No se pudo abrir el archivo.");
    }

    // Escribir nombres en el archivo
    foreach ($nombres as $nombre) {
        fwrite($RArchivo, $nombre . PHP_EOL); 
    }

    fclose($RArchivo);
    echo "Archivo creado y nombres escritos correctamente.";
} 
catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
} 
?>
