<?php
//Exiba a soma de todos os n�meros at� o m�ximo informado pelo usu�rio pela URL;
$max = $_GET["max"];

$contador = 0;
$soma = 0;
while($contador <= $max) {
	$soma += $contador;
	$contador++;
}

echo "O Total da soma: ".$soma;
?>
