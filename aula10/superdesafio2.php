<?php
/* Criei um array com o nome de alguns alunos da sala e, utilizando for, imprima-os em uma tabela HTML.*/
$alunos = array(
	"Cledson"
	,"Eric"
	,"Manoela"
	,"Sabina Day"
	,"Ingrid"
	,"Paula"
	,"Bruno"
);

echo "<table border=1>";
for($i = 0; $i < count($alunos); $i++){
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$alunos[$i]."</td>";
	echo "</tr>";
}
echo "</table>";


?>
