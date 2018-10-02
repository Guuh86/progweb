<!DOCTYPE html>
<html>
<head>
	<title>
		Jogo Mega-Sena
	</title>
</head>
<body>
	<form method="POST" action="01.php">
		Digite um número de 0 a 50: <input type="text" name="x"><br/>
		Digite um número de 0 a 50: <input type="text" name="y"><br/>
		Digite um número de 0 a 50: <input type="text" name="z"><br/>

		<button>ENVIAR</button>


	</form>
	<?php

	$x = @$_POST['x'];
	$y = @$_POST['y'];
	$z = @$_POST['z'];

	$sorteio1 = rand(0, 50);
	$sorteio2 = rand(0, 50);
	$sorteio3 = rand(0, 50);
	$sorteio4 = rand(0, 50);
	$sorteio5 = rand(0, 50);
	$sorteio6 = rand(0, 50);

	if ($x == $sorteio1 || $x == $sorteio2 || $x == $sorteio3 || $x == $sorteio4 || $x == $sorteio5 || $x == $sorteio6) {
		echo "O número $x foi sorteado!<br/>";
	}else{
		echo "O número $x não foi sorteado.<br/>";
	}
	if ($y == $sorteio1 || $y == $sorteio2 || $y == $sorteio3 || $y == $sorteio4 || $y == $sorteio5 || $y == $sorteio6) {
		echo "O número $y foi sorteado!<br/>";
	}else{
		echo "O número $y não foi sorteado.<br/>";
	}
	if ($z == $sorteio1 || $z == $sorteio2 || $z == $sorteio3 || $z == $sorteio4 || $z == $sorteio5 || $z == $sorteio6) {
		echo "O número $z foi sorteado!<br/>";
	}else{
		echo "O número $z não foi sorteado.<br/>";
		echo "Os números sorteados foram: $sorteio1, 
		                                  $sorteio2, 
		                                  $sorteio3, 
		                                  $sorteio4, 
		                                  $sorteio5, 
		                                  $sorteio6.";
	}








	?>

</body>
</html>
