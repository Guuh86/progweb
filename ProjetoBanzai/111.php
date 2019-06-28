<?php
session_start();

$nome = @$_POST['nome'];
$data = @$_POST['data'];
$tel = @$_POST['tel'];
$rg =  @$_POST['rg'];
$modo = @$_POST['modo'];
$bt = @$_POST['enviar'];

if(empty($_POST['nome']) || empty($_POST['data']) || empty($_POST['tel']) || empty($_POST['tel']) || empty($_POST['rg']) || empty($_POST['modo'])){
	echo "<script type='text/javascript'>
	alert('Por favor, preencha todos os dados corretamente ;)');
</script>
";
}else if($bt == 'enviar' && $modo == '1'){
	$_SESSION['clash'] = 'clash';
	header("Location: clashroyale.php");
	$arq1 = fopen("CLASH.txt", "a");
	fwrite($arq1, $nome."#".$data."#".$tel."#".$rg."\n\r");
}else if($bt == 'enviar' && $modo == '2'){
	$_SESSION['just'] = 'just';
	header("Location: justdance.php");
	$arq1 = fopen("JUSTDANCE.txt", "a");
	fwrite($arq1, $nome."#".$data."#".$tel."#".$rg."\n\r");
}else if($bt == 'enviar' && $modo == '3'){
	$_SESSION['lip'] = 'lip';
	header("Location: lipbattle.php");
	$arq1 = fopen("LIPSYNC.txt", "a");
	fwrite($arq1, $nome."#".$data."#".$tel."#".$rg."\n\r");
}else if($bt == 'enviar' && $modo == '4'){
	$_SESSION['sword'] = 'sword';
	header("Location: sword.php");
	$arq1 = fopen("SWORDPLAY.txt", "a");
	fwrite($arq1, $nome."#".$data."#".$tel."#".$rg."\n\r");
}else if($bt == 'enviar' && $modo == '5'){
	$_SESSION['karaoke'] = 'karaoke';
	header("Location: karaoke.php");
	$arq1 = fopen("KARAOKE.txt", "a");
	fwrite($arq1, $nome."#".$data."#".$tel."#".$rg."\n\r");
}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Campeonato</title>
</head>
<body>
	<div align="center" id="topo">
		<h2><img src="title.png"></h2>
	</div>
	<div id="central">
		<form method="post" action="index.php">
			<table>
				<tr>
					<td>Nome Completo: </td>
					<td><input type="text" name="nome""></td>
				</tr>
				<tr>
					<td>Data de Nascimento: </td>
					<td><input type="date" name="data"></td>
				</tr>
				<tr>
					<td>Telefone: </td>
					<td><input type="number" name="tel"></td>
				</tr>
				<tr>
					<td>RG (sem pontos): </td>
					<td><input type="number" name="rg"></td>
				</tr>
				<tr>
					<td colspan="2" class="x1">Selecione abaixo em qual campeonato deseja participar:</td>
				</tr> 
				<tr>
					<td colspan="2" class="x1">
						<center>
						<select name="modo">
							<option value="1">Clash Royale</option>
							<option value="2">Just Dance</option>				    
						    <option value="3">Lip Sync Battle</option>
						    <option value="4">Sword Play</option>
						    <option value="5">Karaokê</option>
						</select>
						<center>
					</td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="submit" name="enviar" value="enviar">Inscrever-se!</button></center></td>
				</tr>				
			</table>
		</form>
	</div>
	<div align="center" id="baixo">
		<center><font color="red">* Note que nem todos os campeonatos do evento<br/>estão disponíveis para inscrição no site, portanto, você deve se inscrever no dia do evento ;)</font>
			<p>
				Para mais informações visite:
				<a href="https://www.facebook.com/portaldobanzai/">Facebook</a>&nbsp;/
				<a href="https://www.instagram.com/portaldobanzai/">Instagram</a>
			</p></center>
	</div>
</body>
</html>
<style type="text/css">
	body{
		background: url("img/fundo.jpg");
		width: 100%;
		background-repeat: no-repeat;
	}
	#central{
		border-style: solid;
		border-width: 1px;
		border-radius: 10px;
		background-color: white;
		margin-left: 20%;
		margin-right: 20%;
		margin-top: 95px;
		padding: 10px 10px 10px 225px;
	}
	#topo{
		margin-top: 45px;
	}
	#baixo{
		border-style: solid;
		border-width: 1px;
		border-radius: 10px;
		background-color: white;
		margin-left: 20%;
		margin-right: 20%;
		margin-top: 20px;
		padding: 10px 10px 10px 10px;
	}
	.x1{
		padding: 10px;
	}
</style>


