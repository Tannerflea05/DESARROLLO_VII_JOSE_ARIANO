<?php
calcular_descuento($total_compra){

    if($total_compra > 100 && $total_compra <= 500){
        return $total_compra * 0.05;
    }
    else if($total_compra > 500 && $total_compra <=1000){
        return $total_compra * 0.1;
    }
    else if($total_compra > 1000){
        return $total_compra * 0.15;
    }
    else {
        return 0;
    }
}

aplicar_impuestos($subtotal){
    return $subtotal * 0.07;
}

calcular_total($subtotal, $descuento ,  $impuestos){
    return ($subtotal - $descuento) + $impuestos;
}



?>