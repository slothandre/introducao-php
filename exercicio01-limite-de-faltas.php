<?php
$nomeCurso = readline("Qual é o nome do curso/uc? ");
$cargaHoraria = readline("Qual a duração dele em horas? ");
$horasDia = readline("Quantas horas de aula tem por dia? ");

$limiteFaltas = $cargaHoraria / $horasDia;

echo "O curso ".$nomeCurso." tem uma carga horária de ".$cargaHoraria." horas. O limite de faltas são ".$limiteFaltas." horas";
?>