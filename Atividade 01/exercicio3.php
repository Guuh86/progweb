<!DOCTYPE html>
<html>
<head>
	<title>Exercício 03 - PHP</title>
</head>
<body>
	<form method="POST" action="exercicio3.php">
		Digite o seu salário: <input type="text" name="salario"><br/>
		<button>Calcular Reajuste</button>
		
	</form>
	<?php

	$sal = @$_POST['salario'];

	if($sal <= 300){
		$sal += $sal * 0.5;
	}else{
		$sal += $sal * 0.3;
	}

	echo "Seu novo salário (com reajuste) é: $sal";



	?>

</body>
</html>