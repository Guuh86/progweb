<?php
session_start();

$nome = @$_POST['nome'];
$tel = @$_POST['tel'];
$rg =  @$_POST['rg'];
$modo = @$_POST['modo'];
$bt = @$_POST['enviar'];
/*
if(empty($nome) || empty($tel) || empty($rg)){
	echo "<script type='text/javascript'>
	alert('Por favor, preencha todos os dados corretamente ;)');
</script>
";
}else*/
if($bt == 'enviar' && $modo == '1'){
	$_SESSION['clash'] = 'clash';
	$arq1 = fopen("CLASH.txt", "a");
	fwrite($arq1, $nome."#".$data."#".$tel."#".$rg."\n\r");
	header("Location: clashroyale.php");
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
	<div id="geral">
		<form method="post">
			<table align="center" class="pdt">
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
								<option value="5">Karaokê</option>
							</select>
						</center>
					</td>
				</tr>
					<td colspan="2" class="pd"><center><button type="submit" name="enviar" value="enviar">Inscrever-se!</button></center></td>
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
</style>
</body>
</html>