
<?php
// Ejemplo de uso de file_get_contents() con un archivo local
$contenidoArchivo = file_get_contents("ejemplo.txt");
echo "Contenido del archivo ejemplo.txt:</br>$contenidoArchivo</br>";

// Ejercicio: Usa file_get_contents() para leer el contenido de tu propio archivo PHP
// Por ejemplo, lee el contenido de "strlen.php" que creaste anteriormente
$nombreArchivo = "strlen.php"; // Asegúrate de que este archivo existe
$contenidoPhp = file_get_contents($nombreArchivo);
echo "</br>Contenido del archivo $nombreArchivo:</br>$contenidoPhp</br>";

// Bonus: Usa file_get_contents() para obtener el contenido de una página web
$url = "https://desarrollo-vii-2024.surge.sh/talleres/taller-3/?classId=7376d9cb-320e-4904-bdfa-5cd7b8340eb9&assignmentId=58bb3a09-5b3e-422f-ac4c-1971496e69f1&submissionId=4cfdb497-a87e-5e53-ed01-d832beb2098f";
$contenidoWeb = file_get_contents($url);
echo "</br>Contenido de $url:</br>" . substr($contenidoWeb, 0, 500) . "...</br>"; // Mostramos solo los primeros 500 caracteres

// Extra: Manejo de errores al usar file_get_contents()
$archivoInexistente = "archivo_que_no_existe.txt";
$contenido = @file_get_contents($archivoInexistente); // El @ suprime los warnings

if ($contenido === false) {
    echo "</br>Error: No se pudo leer el archivo '$archivoInexistente'.</br>";
} else {
    echo "</br>Contenido del archivo '$archivoInexistente':</br>$contenido</br>";
}
?>
      
