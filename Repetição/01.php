<html>
<head>
	<meta charset="utf-8">
	<title>Questão 01</title>
</head>
<body>
	<form method="POST">
		Digite um número entre 2 e 20: <input type="text" name="numero">
		<button>ENVIAR</button><br/>
	</form>

<?php

$n = @$_POST['numero'];

for($c = 1; $c <= $n; $c++){
	for($y = 1; $y <= $c; $y++){
		echo "$y";
	}
}

?>

	
</body>
</html>