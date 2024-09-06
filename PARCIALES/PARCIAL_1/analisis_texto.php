<?php
include "utilidades_texto.php";
$frases = ["hola mundo", "loco mundo", "feliz mundo"];
for($i=0;$i<count($frases);$i++){
    contar_palabras( $frases[$i]);
    contar_vocales($frases[$i]);
    invertir_palabras($frases[$i]);
    
}



?>