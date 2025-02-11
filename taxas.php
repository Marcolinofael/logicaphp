<?php

$valor_real = 5.50;

$moedas = array(
    "Dólar" => 5.10,
    "Euro" => 5.50,
    "Libra" => 6.30,
    "Peso Argentino" => 0.05,

);

echo "Valor em Dolar: R$ "  . number_format($valor_real / $moedas["Dólar"], 2, ',', '.') <br>";
echo "Valor em Euro: R$ " . number_format($valor_real / $moedas["Dólar"], 2, ',', '.') <br>";
echo "Valor em Libra: R$ " . number_format($valor_real / $moedas["Dólar"], 2, ',', '.') <br>";
echo "Valor em Peso Argentino: R$ "  . number_format($valor_real / $moedas["Dólar"], 2, ',', '.') <br>";