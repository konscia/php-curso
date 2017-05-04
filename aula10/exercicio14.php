<?php
//Exiba a soma de todos os múltiplos de 7 de 0 a 1000;
$soma = 0;
for($contador = 0; $contador < 1000; $contador += 7){
	$soma += $contador;
}
echo "Soma: ".$soma;

?>
