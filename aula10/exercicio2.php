<?php

$max = $_GET["max"];
if( is_null($max) ){
	$max = 10;
}

$contador = 0;
while($contador <= $max) {
	echo "Linha ".$contador."<br />";
	$contador++;
}

?>
