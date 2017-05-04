<?php
//Sorteie números aleatórios de 0 a 50, imprima todos na tela e só pare quando o número sorteado for 37

$tentativas = 0;
while(true){
	$numero_sorteado = rand(0, 50);
	$tentativas++;
	echo "Número ".$numero_sorteado."<br />";
	if($numero_sorteado == 37){
		echo "Número Encontrado em ".$tentativas." tentativas.";
		break;
	}

}

?>
