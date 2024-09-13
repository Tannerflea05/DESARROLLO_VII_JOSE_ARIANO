<?php
include 'funciones_tienda.php';
$productos = ["camisa"=> 50 , "pantalon" => 70, "zapatos" => 80, "calcetines"=> 10, "gorra"=> 25];
$total= 0;
$carrito = ["camisa"=> 2, "pantalon" => 1, "zapatos" => 1, "calcetines"=> 3, "gorra"=> 0];
for ($i=0; $i < count($productos); $i++){
    echo $productos[$i] ."<br>";
    echo $carrito[$i] ."<br>";
}
for ($i=0; $i < count($productos); $i++){
    $costo = $productos[$i];
    $cantidad = $carrito[$i];
    $resultado = $costo * $cantidad;
    $total = $total + $resultado;
}



echo $total;
?>