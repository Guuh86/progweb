<!DOCTYPE html>
<html>
<head>
	<title>Exercício 02 - PHP</title>
</head>
<body>
	<form method="POST" action="exercicio2.php">
		Digite um número inteiro positivo <input type="text" name="num"><br/>
		<button>Enviar</button>

	</form>
	<?php

	$numero = @$_POST['num'];
	
	echo "Os divisores de $numero são:";
	for($i = 1; $i <= $numero; $i++){
		if($numero % $i == 0){
			echo"".$i;

		}
	}

	?>

</body>
</html>