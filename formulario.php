<?php

$nome = "";
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe a entrada do usuário
    $input = htmlspecialchars($_POST["user_input"]);

    // Exibe a entrada do usuário
    echo "Digite seu Nome: " . $nome;
}