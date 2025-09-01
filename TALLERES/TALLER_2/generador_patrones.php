<?php
for ($i =0 ; $i <=5; $i++){
    for($j =0 ; $j < $i;    $j++){
        $piramide = "*";
    echo $piramide;
    }
    echo "<br>";
}

$n = 0;

echo "Numeros impares del 1 al 20 <br>";
while ($n < 20){

    $n++;
    if ($n % 2 == 0){
        continue;
    }
    echo $n." ";
    
}

$contador = 1;
echo "<br>Contando del 1 al 10 saltando el 5 <br>";
do {
    if($contador != 5){
    echo "$contador ";
    
    }
    $contador++;
} while ($contador <= 10);
echo "<br><br>";

?>