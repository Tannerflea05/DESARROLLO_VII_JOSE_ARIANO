<?php
$calificacion = 78;

if($calificacion>90){
    $letra = "A ";
} elseif ($calificacion>80){
    $letra = "B ";
} elseif ($calificacion>70){
    $letra = "C ";
} elseif ($calificacion>60){
    $letra = "D ";
} else{
    $letra = "F ";
}

echo "Tu calificacion es igual a $letra<br>";

if ($letra == "A" || $letra == "B" || $letra == "C" || $letra == "D"){
    $resultado = "Aprobado";
} else {
    $resultado = "Reprobado";
}
    switch(true){
        case ($letra == "A"):
            echo $letra.  ":Excelente trabajo";
            break;
        case ($letra == "B"):
            echo $letra. ":Buen trabajo";
            break;
        case ($letra == "C"):
            echo $letra. ":Trabajo aceptable";
            break;
        case ($letra == "D"):
            echo $letra . ":Necesitas mejorar";
            break;
        default:
            echo $letra . ":Debes esforzarte más";
    }
?>