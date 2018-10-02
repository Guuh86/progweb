<!DOCTYPE html>
<html>
<head>
	<title>Exercício 01</title>
</head>
<body>
	<form method="POST" action="exercicio1.php">
		Digite a primeira nota <input type="text" name="n1"><br/>
		Digite a segunda nota <input type="text" name="n2"><br/>
		<button>Calcular média</button>
		
	</form>

	<?php
	$nota1 = @$_POST['n1'];
	$nota2 = @$_POST['n2'];

	echo "A média é: ".($nota1+$nota2)/2;

	?>




</body>
</html>