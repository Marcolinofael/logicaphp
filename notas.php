<?php
$nota_1bi = 10;
$nota_2bi = 3;
$nota_3bi = 5;
$nota_4bi = 6;

$media = ($nota_1bi + $nota_2bi + $nota_3bi + $nota_4bi) / 4;
echo "Média: $media\n <br><br>";



if($media >= 7){
    echo " <strong>Aprovado";
}
else if($media < 7 && $media >= 5){
    echo " <strong>Está em Recuperação";
} else{
    echo " <strong>Reprovado";
}