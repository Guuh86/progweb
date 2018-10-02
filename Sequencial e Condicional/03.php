<!DOCTYPE html>
<html>
<head>
<title>Questão 03</title>
</head>
<body>
<form method="post">
Digite um número para cada ponto do plano:<br/>
<br/>
P(x1)<input type="text" name="x1"><br/>
<br/>
P(y1)<input type="text" name="y1"><br/>
<br/>
P(x2)<input type="text" name="x2"><br/>
<br/>
P(y2)<input type="text" name="y2"><br/>
<br/>
<button>Enviar</button>
<br/>
	</form>

	<?php

$x1 = @$_POST['x1'];
$x2 = @$_POST['y1'];
$x3 = @$_POST['x2'];
$x4 = @$_POST['y2'];


$dist = (($x3 - $x1) ** 2) + (($x4 - $x2) ** 2);

$final = sqrt($dist);

echo "<br/><font color='red'>A distância entre os pontos é: $final</font>";





	?>

</body>
</html>