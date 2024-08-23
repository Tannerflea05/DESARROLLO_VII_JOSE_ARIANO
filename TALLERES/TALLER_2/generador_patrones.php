<?php
for ($i= 0; $i <5 ; $i++){
    for($j= 0 ; $j <= $i ;$j++){
        echo "*";
    }
    echo "<br>";
}

$contador = 1;
while ($contador <21){
    if($contador % 2 == 1){
        echo $contador . " ";
    }
    $contador++;
}
echo "<br><br>";
$regresivo = 10;
do{
    if($regresivo != 5){
        echo "$regresivo ";
        }
        $regresivo--;
} while($regresivo >= 1);
echo "<br><br>";
?>