<?php



?>
<html>
<head>
	<title>Sistema</title>
</head>
<body>
	<div id="teste">
		<span><b>Bem-vindo ao SisIFPI</b></span>
	</div>
	<div id="x">
		<form method="post">
		<span>
		<input type="submit" name="start" value="início" id="color">
		&nbsp;
		<input type="submit" name="end" value="sair" id="color">
	</form>
	    </span>
	</div>
	<div id="usuario">
		<?php
		session_start();
		if(isset($_SESSION['usuario'])){
			echo "Usuário: "."[".$_SESSION['usuario']."]"." Logado no sistema";

		}else{
			
	        header('Location: off.php');
			
		}

		$sair = @$_POST['end'];

		if ($sair == 'sair') {
			session_destroy();
			header('Location: index.php');	
		}
		?>
	</div>

	<style type="text/css">
        body{
        	margin-left: 20%;
        	margin-right: 20%;

        }
	    #teste{
			background-color: lightblue;
		}
		#usuario{
			margin-top: 10px;
		}
		span{
			text-indent: 15px;
			font-size: 30px;
		}
		#x{
			background-color: lightskyblue;
		}
		#color{
			background-color: lightskyblue;
			border-color: lightskyblue;
			border: 1px;
		}
	</style>



</body>
</html>