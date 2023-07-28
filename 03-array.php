<?php
// 03-arrays

/* Objetivos: como declarar, atribuir e acessar dados de vetores */

// Declaração do array (OPCIONAL)
$pessoas = []; // ou $pessoas = array()

// Processo de atribuição de dados
$pessoas[0] = readline("Digite o primeiro nome: ");
$pessoas[1] = readline("Digite o segundo nome: ");
$pessoas[2] = readline("Digite o terceiro nome: ");

// Saída dos dados
echo "Primeira pessoa: ".$pessoas[0].PHP_EOL;
echo "Segunda pessoa: ".$pessoas[1].PHP_EOL;
echo "Terceira pessoa: ".$pessoas[2].PHP_EOL;

echo PHP_EOL;

echo "\nPrimeira pessoa: ".$pessoas[0];
echo "\nSegunda pessoa: ".$pessoas[1];
echo "\nTerceira pessoa: ".$pessoas[2];

?>