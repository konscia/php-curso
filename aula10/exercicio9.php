<?php
//Sorteie n�meros aleat�rios de 0 a 50, imprima todos na tela e s� pare quando o n�mero sorteado for 37

$tentativas = 0;
while(true){
	$numero_sorteado = rand(0, 50);
	$tentativas++;
	echo "N�mero ".$numero_sorteado."<br />";
	if($numero_sorteado == 37){
		echo "N�mero Encontrado em ".$tentativas." tentativas.";
		break;
	}

}

?>
