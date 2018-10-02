<!DOCTYPE html>
<html>
<head>
	<title>Questão 06</title>
</head>
<body>
	<form method="post">
		Digite a 1º nota do aluno: <input type="text" name="n1"><br/>
		Digite a 2º nota do aluno: <input type="text" name="n2"><br/>
		Digite a 3º nota do aluno: <input type="text" name="n3"><br/>
		Digite a média dos exercícios: <input type="text" name="me">
		<p><button>Enviar</button></p>
	</form>

	<?php

	$n1 = @$_POST['n1'];
	$n2 = @$_POST['n2'];
	$n3 = @$_POST['n3'];
	$me = @$_POST['me'];


	$ma = ($n1 + $n2 * 2 + $n3 * 3 + $me) / 7;

	if ($ma >= 9.0) {
		echo "Sua média de aproveitamento é: $ma e o seu conceito é: A";
	}else if($ma >= 7.5 && $ma < 9.0){
		echo "Sua média de aproveitamento é: $ma e o seu conceito é: B";
	}else if($ma >= 6.0 && $ma < 7.5){
		echo "Sua média de aproveitamento é: $ma e o seu conceito é: C";
	}else if($ma >= 4.0 && $ma < 6.0){
		echo "Sua média de aproveitamento é: $ma e o seu conceito é: D";
	}else if($ma < 4.0){
		echo "Sua média de aproveitamento é: $ma e o seu conceito é: E";
	}


	?>

</body>
</html>