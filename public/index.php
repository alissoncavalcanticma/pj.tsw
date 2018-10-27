<?php

namespace App;

include '../app/InterfaceCalculadoraINSS.php';
include '../app/InterfaceEmpregado.php';
include '../app/CalculadoraINSS.php';
include '../app/Empregado.php';

/* echo "<br>";

$emp = new Empregado('Alisson', 1971.99);

echo $emp->getNome();
echo "<br>";
echo $emp->getSalario();
echo "<br>";
echo $emp->getContribuicaoINSS();
echo "<br>";
echo $emp->getContribuicaoINSSEmpregador();
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Folha empregados</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Registro de empregados</h3>
	<form>
		<fieldset>
			<legend>
				Nome:		
			</legend>
			<input type="text" name="nome"><br />
			<legend>
				Salário:
			</legend>
			<input type="text" name="salario"><br /><br />
			<input type="submit" value="Adicionar">


		</fieldset>
	</form>
</body>
</html>