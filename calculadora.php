<?php

$numeros = array(5, 10, 15, 20, 25);
$resultado = $numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4];
foreach($numeros as $numero){
    echo "Total de Números: ";
    echo $numero . "<br>";
}


echo "A soma dos números é: <strong>" . $resultado . "</strong><br><br><br>";


echo "-----------Correção---------<br><br><br>";

$numeros = array(5, 10, 15, 20, 25);
$total = 0;
foreach($numeros as $numero){
    $total = $total + $numero; 
}

echo "Total de Números é :<strong> $total </strong><br>";