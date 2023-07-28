<?php
// 02-calculo-de-desconto

// Entrada

// Versão 1
/*
echo "Informe o produto: ";
$produto = readline();
*/

// Versão 2
$produto = readline("Informe o produto: ");
$precoInicial = readline("Preço inicial: ");
$desconto = readline("Desconto em reais: ");

// Processamento
$precoFinal = $precoInicial - $desconto;

// Saída
echo "Preço final: ".$precoFinal;