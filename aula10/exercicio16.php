<?php
//Exiba uma tabela com 10 linhas e 5 colunas (em aula).

echo "<table border=1>";
for($linha = 1; $linha <= $_GET["linhas"]; $linha++){
	echo "<tr>";
	for($coluna = 1; $coluna <= $_GET["colunas"]; $coluna++){
		echo "<td>linha ".$linha." - coluna ".$coluna."</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>
