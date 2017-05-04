<?php

//Exiba a soma de todos os números ímpares de 0 a 100;
$contador = 0;
$soma = 0;
while($contador <= 100) {

	if($contador % 2 != 0) {
		$soma += $contador;		
	}

	$contador++;
}
echo "O Total é: ".$soma;

?>
