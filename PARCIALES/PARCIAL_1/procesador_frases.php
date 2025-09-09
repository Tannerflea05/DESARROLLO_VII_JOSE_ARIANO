<?php
include 'operaciones_cadenas.php';

$frases = "LimbUS cOMPANY";
$palabras_repetidas = "Company angus angus RANGO RANGO RANGO";
$frases_completas = ["limbus company","tres Tristes Tigres ", "Continuar continuar ConTinuar", "test Test tEst"];

for($i = 0; $i <= count($frases_completas)-1; $i++ ){
    
    capitalizar_palabras($frases_completas[$i]);
    contar_palabras_repetidas($palabras_repetidas[$i]);
}



?>