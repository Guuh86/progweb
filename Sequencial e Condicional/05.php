<!DOCTYPE html>
<html>
<head>
	<title>Questão 05</title>
</head>
<body>
	<form method="post">
		<table border="1">
			<tr>
				<td><b>Código</b></td>
				<td><b>Cargo</b></td>
			</tr>
			<tr>
				<td>101</td>
				<td>Gerente</td>
			</tr>
			<tr>
				<td>102</td>
				<td>Engenheiro</td>
			</tr>
			<tr>
				<td>103</td>
				<td>Técnico</td>
			</tr>
			<tr>
				<td>104</td>
				<td>Outro Cargo</td>
			</tr>
		</table>
		<table id="tabela">
			<tr>
				<td><b>Insira o seu salário:</b></td>
				<td><input type="text" name="salario"></td>
			</tr>
			<tr>
				<td><b>Insira o código de seu cargo:</b></td>
				<td><input type="number" name="cargo"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center><button><b>Calcular</b></button></center>
				</td>
			</tr>
		</table>

		<?php

		$salario = @$_POST['salario'];
		$cargo = @$_POST['cargo'];

		if($cargo == '101'){
			$x1 = ($salario * 10) / 100;
			$y1 = $salario + $x1;
			echo "<p><b>Antigo salário: $salario<br/>";
			echo "<p><b>Novo salário: $y1<br/>";
			echo "<p><b>Diferencial de: $x1";
		}else if ($cargo == '102') {
			$x2 = ($salario * 20) / 100;
			$y2 = $salario + $x2;
			echo "<p><b>Antigo salário: $salario<br/>";
			echo "<p><b>Novo salário: $y2<br/>";
			echo "<p><b>Diferencial de: $x2";
		}else if ($cargo == '103') {
			$x3 = ($salario * 30) / 100;
			$y3 = $salario + $x3;
			echo "<p><b>Antigo salário: $salario<br/>";
			echo "<p><b>Novo salário: $y3<br/>";
			echo "<p><b>Diferencial de: $x3";
		}else if ($cargo == '104') {
			$x4 = ($salario * 40) / 100;
			$y4 = $salario + $x4;
			echo "<p><b>Antigo salário: $salario<br/>";
			echo "<p><b>Novo salário: $y4<br/>";
			echo "<p><b>Diferencial de: $x4";
		}else{
			echo "<p><b>Seu cargo não foi encontrado.";
		}

		?>
	</form>

	<style type="text/css">
		#tabela{
			margin-left: 150px;
			margin-top: -85px;
		}
	</style>

</body>
</html>