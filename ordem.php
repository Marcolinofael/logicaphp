<?php

$numeros = array(10, 12, 80, 49, 37, 11, 26, 22);

foreach($numeros as $numero){
        echo $numero . "<br>";
}

echo "-----------Correção---------<br><br><br>";

echo "Numeros da ordem original: <br>";
$num_seq = implode(", ", $numeros);
echo $num_seq . "<br><br>";

echo "Números em ordem crescente: <br>";
sort($numeros);
$num_order = implode(", ", $numeros);
echo $num_order . "<br><br>";

echo "Números em ordem decrescente: <br>";
rsort($numeros);
$num_order_dec = implode(", ", $numeros);
echo $num_order_dec . "<br>";