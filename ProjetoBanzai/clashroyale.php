<?php
session_start();

if(isset($_SESSION['clash'])){
	echo ".";
?>
<?php

$sair = @$_POST['sair'];

if ($sair == 'sair1') {
	header('Location: index.php');
	session_unset();
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Inscrição Concluida!</title>
</head>
<body>
	<div id="geral">
		<span>
		<p>Sua inscrição no Campeonato de Clash Royale foi efetuada com sucesso!</p>
		<p>Lembre-se de confirmar sua inscrição efetuando o pagamento do valor de R$ 5,00 (cinco reais)<br/>
		   na portaria do evento não se esqueça de ter em mãos o seu RG. ;)</p>
		   <p>Boa sorte, Competidor! Nos vemos na arena!! :D</p>
		   <p>Confira o <a href="https://1drv.ms/w/s!AvITqymwLjMTh2EM_iQF64TLORHF">REGULAMENTO</a></p>
		   <form method="post">
		   <p><button type="submit" name="sair" value="sair1">Voltar</button></p>
		</form>
        </span>
	</div>

</body>
</html>
<?php

}else{
	echo "<script type='text/javascript'>
	alert('Você não tem permissão para acessar essa página!!');
</script>
";
}

?>
<style type="text/css">
	div{
		border-style: solid;
		border-width: 1px;
		border-radius: 10px;
		background-color: white;
		margin-left: 20%;
		margin-right: 20%;
		margin-top: 170px;
		padding: 10px 10px 10px 10px;
	}
	span{
		text-align: center;
	}
	body{
		background-image: url("img/fundoclash.jpg");
		background-size: 100%;
	}
</style>