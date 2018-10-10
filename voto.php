<?php
session_start();

$btn = @$_POST['btn'];
$p1 = 0;
$p2 = 0;

if ($btn == '1') {
	$_SESSION['p1'] += 1;
}elseif ($btn == '2') {
	$_SESSION['p2'] += 1;
}elseif ($btn == '3') {
	$_SESSION['p1'] = 0;
	$_SESSION['p2'] = 0;
}

?>
<html>
<head>
	<title>Votação</title>
</head>
<body>
	<center><h2>SisVoto</h2></center>
	<hr>
	<form method="post">
	<p>Partido 1 <button value="1" name="btn">Votar</button></p>
	<p>Partido 2 <button value="2" name="btn">Votar</button></p>
	</form>
	<hr>
	<p>Resultado:</p>
	<p>Partido 1 <?php echo $_SESSION['p1'] ?> Votos</p>
	<p>Partido 2 <?php echo $_SESSION['p2'] ?> Votos</p>
	<div>
		<button value="3" name="btn">Limpar</button>
	</div>

	<style type="text/css">
		body{
			margin-left: 20%;
			margin-right: 20%; 
		}
		hr{
			background-color: silver;
			color: silver;
		}
		div{
			margin-left: 150px;
			margin-top: -55px;
		}
	</style>

</body>
</html>