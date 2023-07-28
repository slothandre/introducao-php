<?php // 04-condicional

/* Protótipo de Chatbot */
echo "\n== Chatbot da empresa Biribinha == \n";
echo "Opções válidas:\n\n";
echo "1 - Informação\n";
echo "2 - Reclamação\n";
echo "3 - Elogios\n";
echo "4 - Status\n";

echo PHP_EOL;
$opcao = readline("Digite uma opção: ");

// Condicional encadeada
if ($opcao == 1) {
	$resultado = "Legal, o que deseja saber?";
} elseif ($opcao == 2) {
	$resultado = "Puxa puxa que puxa... conte-me o que aconteceu";
} elseif ($opcao == 3) {
	$resultado = "Bacana! Pode falar :)";
} elseif ($opcao == 4) {
	$resultado = "Ok, um momento enquanto verifico..";
} else {
	$resultado = "Lascou, vou chamar a Valeska";
}

echo $resultado;