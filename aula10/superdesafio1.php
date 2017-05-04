<?php
$tempo_inicio = microtime(true);
//Exiba a soma de todos os números até o máximo informado pelo usuário pela URL;
$max = $_GET["max"];

$contador = 0;
$soma = 0;
while($contador <= $max) {
	$soma += $contador;
	$contador++;
}

echo "O Total da soma: ".$soma;

$tempo_final = microtime(true);
$tempo_decorrido = $tempo_final - $tempo_inicio;
echo "<br />Tempo: ".$tempo_decorrido;
?>
