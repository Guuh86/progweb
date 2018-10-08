<?php
session_start();

$voto = @$_POST['voto'];

$v1 = 0;
$v2 = 0;
$v3 = 0;
$v4 = 0;



?>

<html>
<head>
	<title>Votação</title>
</head>
<body>
	<style type="text/css">
		#geral{
			background-color: silver;
			
		}
		#final{
			margin-top: 50px;
		}
		#bt{
			margin-left: 10px;
			margin-top: 10px;
		}
		.sis{
			font-size: 10px;
		}
		.x1{
			font-size: 30px;
			text-align: center;
		}
		body{
			margin-left: 20%;
			margin-right: 20%;
		}
		span{
			font-size: 20px;
		}

	</style>
	<div id="geral">
		<p class="x1">Prova Prática - Enquete</p>
	</div>
	<div>
		<fieldset>
			<legend><span>Enquete</span></legend>
			<p><span>1. Qual a linguagem de programação você mais gosta?</span></p>
				<form method="post">
					<input type="radio" name="voto" value="1"><span> Python</span><br/>
					<input type="radio" name="voto" value="2"><span> PHP</span><br/>
					<input type="radio" name="voto" value="3"><span> Java</span><br/>
					<input type="radio" name="voto" value="4"><span> C++</span><br/>
					<div id="bt"><button>Enviar Voto</button></div>
				</form>
		</fieldset>
		<hr>
		<fieldset>
			<legend><span>Resultado</span></legend>
			<ul>
				<li type="disc"><span> Python - <?php echo " votos"; ?></span></li>
				<li type="disc"><span> PHP - <?php echo " votos"; ?></span></li>
				<li type="disc"><span> Java - <?php echo " votos"; ?></span></li>
				<li type="disc"><span> C++ - <?php echo " votos"; ?></span></li>
			</ul>
		</fieldset>
		<center><p class="sis">© Sistema de Enquete - IFPI 2018</p></center>
	</div>
	<hr>
	<div id="final">
		<p>Dados do banco:</p>
		<b>- Database:</b> enquete<br/>
		<b>- Name table:</b> votos <br/>
		<b>- Campos: </b> id, nome, voto
	</div>

</body>
</html>