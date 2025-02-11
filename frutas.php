<?php



$frutas = array("Maçã", "Banana", "Laranja", "Abacaxi", "Uva");

foreach($frutas as $fruta){
    echo $fruta . "<br>";
}

echo "-------------------------------<br>";
$frutas [] = "morango";
foreach($frutas as $fruta){
    echo $fruta . "<br>";
}

echo "-------------------------------<br>";
array_shift($frutas); //REMOVE O PRIMEIRO ELEMENTO DO ARRAY


foreach($frutas as $fruta){
    echo $fruta . "<br>";
}