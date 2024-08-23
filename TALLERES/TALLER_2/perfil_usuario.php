<?php
$nombre = "Jose Ariano";
$edad = 25;
$correo = "jose.ariano@utp.ac.pa";
$telefono = "6344-7402";


define("PROFESION" , "Estudiante");

$mensaje1 = "Buen dia, mi nombre es " . $nombre . " y tengo " . $edad . "años";
$mensaje2 = "Me pueden contactar mediante mi correo que es " . $correo . " y mi telefono " . $telefono . " y soy " . PROFESION . ".";

echo $mensaje1 . "<br>";
print($mensaje2 . "<br>");

printf("En resumen: %s, %d años, %s, %s<br>", $nombre, $edad, $correo, $telefono, PROFESION);

echo "<br> Valores de debugging: <br>";
var_dump($nombre);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(PROFESION);
echo "<br>";
?>