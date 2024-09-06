<?php
function contar_palabras($texto){
     echo strlen($texto) . "<br>";
     
}
function contar_vocales($texto){
        for($i=0;$i<=strlen($texto);$i++){
            if ($texto[$i] == 'a'|| $texto[$i] == 'e'|| $texto[$i] == 'i'|| $texto[$i] == 'o'|| $texto[$i] == 'u'){
               $conteo = $conteo + 1; 
            }
        }
        return $conteo;
}
function invertir_palabras($texto){
    
    $array_palabra = explode(" ",$texto);
    for($i = count($array_palabra);$i>=0;$i--){
        echo $array_palabra[$i];
    }
}



?>