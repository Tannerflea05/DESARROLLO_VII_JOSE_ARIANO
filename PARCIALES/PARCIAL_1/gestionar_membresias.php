<?php

include 'funciones_gimnasio.php';
$membresias = [
    'basica' => 80,
    'premiun' => 120,
    'vip' => 180,
    'familiar' => 250,
    'corporativa' => 300
];


$miembros = [
        'Juan Perez' => ['tipo'=> 'premiun','antiguedad'=>15],
        'Ana Garcia' => ['tipo'=> 'basica','antiguedad'=>2],
        'Carlos Lopez' => ['tipo'=> 'vip','antiguedad'=>30],
        'Maria Rodriguez' => ['tipo'=> 'familiar','antiguedad'=>8],
        'Luis Martinez' => ['tipo'=> 'corporativa','antiguedad'=>18]
];
foreach($membresias as $mem => $antiguo){
    $miembros [$mem] = $antiguo + $membresias[$mem]; 
    print_r(" <br>".$miembros[$mem]);
    $descuento =  calcular_promocion($miembros[$men]);
    
}
?>