<?php
session_start();

$nome = @$_POST['nome'];
$telefone = @$_POST['telefone'];
$rg =  @$_POST['rg'];
$modo = @$_POST['modo'];
$bt = @$_POST['enviar'];

if(empty($nome) || empty($telefone) || empty($rg) || empty($modo)){
	echo "<script type='text/javascript'>
	alert('Por favor, preencha todos os dados corretamente ;)');
</script>
";
}else if($bt == 'enviar' && $modo == '1'){
	$_SESSION['clash'] = 'clash';
	header("Location: clashroyale.php");
	$arq1 = fopen("CLASH.txt", "a+");
	fwrite($arq1, @$_POST['nome']." # ".@$_POST['telefone']." # ".@$_POST['rg']." ## "."\r\n");

}else if($bt == 'enviar' && $modo == '2'){
	$_SESSION['just'] = 'just';
	header("Location: justdance.php");
	$arq1 = fopen("JUSTDANCE.txt", "a+");
	fwrite($arq1, @$_POST['nome']." # ".@$_POST['telefone']." # ".@$_POST['rg']." ## "."\r\n");

}else if($bt == 'enviar' && $modo == '3'){
	$_SESSION['lip'] = 'lip';
	header("Location: lipbattle.php");
	$arq1 = fopen("LIPSYNC.txt", "a+");
	fwrite($arq1, @$_POST['nome']." # ".@$_POST['telefone']." # ".@$_POST['rg']." ## "."\r\n");

}else if($bt == 'enviar' && $modo == '4'){
	$_SESSION['sword'] = 'sword';
	header("Location: sword.php");
	$arq1 = fopen("SWORDPLAY.txt", "a+");
	fwrite($arq1, @$_POST['nome']." # ".@$_POST['telefone']." # ".@$_POST['rg']." ## "."\r\n");

}else if($bt == 'enviar' && $modo == '5'){
	$_SESSION['karaoke'] = 'karaoke';
	header("Location: karaoke.php");
	$arq1 = fopen("KARAOKE.txt", "a+");
	fwrite($arq1, @$_POST['nome']." # ".@$_POST['telefone']." # ".@$_POST['rg']." ## "."\r\n");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Campeonato</title>
</head>
<body>
	<link rel="shortcut icon" type="image/png" href="favicon.jpg">
	<div id="geral">
		<form method="post">
			<table align="center" class="pdt">
				<tr>
					<td colspan="2" class="dist"><center><p><font color='red'>REGISTRO CAMPEONATO - BANZAI 2018</p></center></font></td>
				</tr>
				<tr class="pd">
					<td class="pd">Nome Completo: </td>
					<td class="pd"><input type="text" name="nome"></td>
				</tr>
				<tr>
					<td class="pd">Telefone: </td>
					<td class="pd"><input type="number" name="telefone"></td>
				</tr>
				<tr>
					<td class="pd">RG (sem pontos): </td>
					<td class="pd"><input type="number" name="rg"></td>
				</tr>
				<tr>
					<td colspan="2" class="pd1">Selecione o campeonato que deseja participar: </td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
							<select name="modo">
								<option value="1">Clash Royale</option>
								<option value="2">Just Dance</option>
								<option value="3">Lip Sync Battle</option>
								<option value="4">Sword Play</option>
								
							</select>
						</center>
					</td>
				</tr>
					<td colspan="2" class="pd"><center><button type="submit" name="enviar" value="enviar">Inscrever-se!</button></center></td>
				</tr>
				<tr>
					<td colspan="2" class="fnl"><center> Para mais informações visite: <a href="https://www.facebook.com/portaldobanzai/">Facebook</a>/<a href="https://instagram.com/portaldobanzai">Instagram</a></center></td>
				</tr>
			</table>
		</form>
	</div>
<style type="text/css">
	#geral{
		border-style: solid;
		border-width: 1px;
		background-color: white;
		border-radius: 10px;
		margin-left: 20%;
		margin-right: 20%;
		margin-top: 15%;
	}

	.pdt{
		padding: 3% 3% 3% 3%;
	}
	.dist{
		padding: 15px 15px 15px 15px;
	}
	body{
		background-image: url('img/fundohog.jpg');
		background-repeat: no-repeat;
	}
	p{
		font-size: 20px;
		font-family: verdana;
	}
	.fnl{
		padding-top: 30px;
	}
</style>
</body>
</html>