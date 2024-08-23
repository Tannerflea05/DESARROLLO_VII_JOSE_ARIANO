<?php
$calificacion = 71;
if($calificacion >= 91 ){
    $nota = 'A';
}
else if($calificacion >= 81 ){
    $nota = 'B';
}
else if($calificacion >= 71  ){
    $nota = 'C';
}
else if($calificacion >= 61 ){
    $nota = 'D';
}
else{
    $nota = 'F';
}

echo "Tu calificacion es " . $nota.".<br>";
if($nota == 'D' || $nota == 'C' || $nota == 'B' || $nota == 'A'  ){
    $resultado = "Aprobado.<br>";
}
else{
    $resultado = "Reprobado.<br>";
}
echo $resultado;

switch ($nota) {
    case 'A':
        echo "Excelente trabajo.";
        break;
    case 'B':
        echo "Buen trabajo.";
        break;
    case 'C':
        echo "Trabajo aceptable.";
        break;
    case 'D':
        echo "Necesitas mejorar.";
        break;
    default:
        echo "Debes esforzarte más.";
}


?>