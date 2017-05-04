<?php
//Exiba todos os pares de 500 até 10;

$contador = 500;
while($contador >= 10){
	if( $contador % 2 == 0 ){
		echo $contador;
		echo "<br />";
	}
	$contador--;
}

?>
