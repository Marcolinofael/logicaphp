<?php

$valorArroba = 325;
$arroba = 15;
$peso_lado1 = 50.5;
$peso_lado2 = 49.7;
$quilo_boi = ($peso_lado1 + $peso_lado2);
$arroba_boi = ($quilo_boi / 15);
$valor_pago = ($arroba_boi * $valorArroba);


echo "O boi tem:<strong> " . $quilo_boi . " Kg </strong><br><br>";
echo "O boi tem:<strong> " . $arroba_boi . " Arrobas </strong><br><br>";
echo "Será pago ao produtor:<strong> R$ " . $valor_pago . "</strong><br><br>";
echo "O valor do lado 1 é:<strong> " . $peso_lado1 . " KG</strong><br><br>";
echo "O valor do lado 2 é:<strong> " . $peso_lado2 . " KG</strong><br><br><br><br><br><br>";


//Revisão do Professor

$produtor = "Seu Manoel";
$peso_a = 80;
$peso_b = 90;
$valor_arroba = 234.67;
$arroba = 15;

$arroba_animal = ($peso_a + $peso_b) / $arroba;
$valor_arroba_animal = $arroba_animal * $valor_arroba;
echo "O Valor a pagar para o produtor " . $produtor . " é de R$ " . number_format($valor_arroba_animal, 2, ",", ".");




//avançado
//foreach | For | While




