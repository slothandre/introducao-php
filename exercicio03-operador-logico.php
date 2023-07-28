<?php

echo PHP_EOL;
$preco = readline("Qual o valor do produto? ");

if ($preco >= 1000 && $preco <= 1500) {
	echo "\nO preço ".$preco." está no intervalo indicado, e terá um desconto de 10%";
} else {
	echo "\nO preço ".$preco." está fora do intervalo indicado, portanto terá um desconto de 5%";
}