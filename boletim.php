<?php

$dados_alunos = array(
    array("nome" => "João", "materia" => "matematica", "nota" => 6),
    array("nome" => "Maria", "materia" => "portugues", "nota" => 8),
    array("nome" => "Pedro", "materia" => "historia", "nota" => 5),
    array("nome" => "Ana", "materia" => "geografia", "nota" => 7),
    array("nome" => "Paulo", "materia" => "ciencias", "nota" => 4),
    array("nome" => "Lucas", "materia" => "fisica", "nota" => 9),
    array("nome" => "Julia", "materia" => "quimica", "nota" => 3),
    array("nome" => "Carla", "materia" => "biologia", "nota" => 10),
    array("nome" => "Marcos", "materia" => "ed. fisica", "nota" => 2),
);


foreach ($dados_alunos as $aluno) {
    echo "<strong>Nome:</strong> " . $aluno["nome"], " - <strong>Matéria: </strong> " . $aluno["materia"], " - <strong>Nota:</strong> " . $aluno["nota"] . "<br>";

    if ($aluno["nota"] >= 7) {
        echo "<strong>Situação:</strong><strong><span style='color: green;'>Aluno Aprovado</span></strong><br>";
    } elseif ($aluno["nota"] >= 5 && $aluno["nota"] < 7) {
        echo "<strong>Situação:</strong><strong><span style='color: orange;'>Aluno em Recuperação</span></strong><br>";
    } else {
        echo "<strong>Situação:</strong><strong><span style='color: red;'>Aluno Reprovado</span></strong><br>";
    }
}
