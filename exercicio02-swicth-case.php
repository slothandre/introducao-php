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
switch ($opcao) {
	case 1:
		$resultado = "Legal, o que deseja saber?";
		break;
	case 2:
		$resultado = "Puxa puxa que puxa... conte-me o que aconteceu";
		break;
	case 3:
		$resultado = "Bacana! Pode falar :)";
		break;
	case 4:
		$resultado = "Ok, um momento enquanto verifico..";
		break;
	default:
		$resultado = "Lascou, vou chamar a Valeska";
		break;
}

echo $resultado;