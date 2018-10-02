<!DOCTYPE html>
<html>
<head>
	<title>Exercício 04 - PHP</title>
</head>
<body>
	<form method="POST" action="exercicio04.php">
		Digite seu sexo (M ou F): <input type="text" name="sex"><br/>
		Digite a sua altura: <input type="text" name="altura"><br/>
		<button>Calcular peso ideal</button><br/>

		<?php

		$sexo = @$_POST['sex'];
		$altura = @$_POST['altura'];

		if ($sexo == 'M') {
			$peso = 72.7 * $altura - 58;
			echo "Seu peso ideal é: $peso";
		}
		if ($sexo == 'F') {
			$peso = 62.1 * $altura - 44.7;
			echo "Seu peso ideal é: $peso";
		}

		?>
		
	</form>

</body>
</html>