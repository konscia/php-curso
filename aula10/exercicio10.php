<?php
//Sorteie números aleatórios de 0 a 100, vá somando os números sorteados e imprimindo cada soma na tela. Só pare quando passar de 1.000;

$tentativas = 0;
$soma = 0;
while(true){
	$numero_sorteado = rand(0, 100);
	$tentativas++;
	$soma += $numero_sorteado;
	if($soma > 1000){
		echo "Passou de 1.000 com ".$tentativas." sorteios.";
		break;
	}

}

?>
