<?php
$nombre_completo = "Jose Ariano";
$edad = 26;
$correo_eletronico = "jose.ariano@utp.ac.pa";
$telefono = "6344-7402";

define("Ocupacion", "Estudiante");

$mensaje1 = "Mi nombre es $nombre_completo <br> con".$edad." años de edad <br> con ocupacion de ". Ocupacion;
print ($mensaje1 ."<br>");
Printf("Se me puede contactar mediante el correo %s y el numero %s   <br>", $correo_eletronico, $telefono);

var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo_eletronico);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(Ocupacion);
echo "<br>";

?>