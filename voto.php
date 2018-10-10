<?php
session_start();
$btn = @$_POST['btn'];

$p1 = 0;
$p2 = 0;

$_SESSION['p1'];
$_SESSION['p2'];

if ($btn == '1') {
	$_SESSION['p1'] = $_SESSION['p1'] + 1;
}else if($btn == '2'){
	$_SESSION['p2'] = $_SESSION['p2'] + 1;
}else if($btn == '3'){
	$_SESSION['p1'] = 0;
	$_SESSION['p2'] = 0;
}

?>
<html>
<head>
	<title>Votação</title>
</head>
<body>
     <font face="Arial">
	<center><h2><font color="green">Sis</font><font color="yellow">Voto</font></h2></center>
	<hr>
	<form method="post">
	<p>Partido 1 <button value="1" name="btn">Votar</button></p>
	<p>Partido 2 <button value="2" name="btn">Votar</button></p>
	<hr>
	<p>Resultado:</p>
	<p><?php echo "Partido 1 ".$_SESSION['p1']." Votos"; ?></p>
	<p><?php echo "Partido 1 ".$_SESSION['p2']." Votos"; ?></p>
	<div>
		<button value="3" name="btn">Limpar</button>
	</div>
	</form>
	</font>

	<style type="text/css">
		body{
			margin-left: 20%;
			margin-right: 20%;
			background-color: lightblue; 
		}
		hr{
			border-color: silver;
		}
		div{
			margin-left: 150px;
			margin-top: -55px;
		}
	</style>

</body>
</html>