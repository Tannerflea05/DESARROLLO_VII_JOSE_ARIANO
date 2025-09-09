<?php

function contar_palabras_repetidas($texto) {
    $array = explode(" ",$texto);
    $minuscula = [];
    print_r($array);
    for($i = 0 ; $i <= count($array)-1;$i++){
        $minuscula[$i] = strtolower($array[$i]);
        
    }
    for($i = 0 ; $i <= count($minuscula)-1 ; $i++){
        print( $minuscula[$i]);
    }

}

function capitalizar_palabras($texto)
{
    $cadena  = explode(" ", $texto);
    $extrato1 = strtolower(substr($cadena[0],0,1)); 
    $extrato2 = strtoupper(substr($cadena[0],1));
    echo $extrato1 . $extrato2;
    
    
}
?>