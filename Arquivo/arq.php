<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
</head>
<body>
	<center><h2>Agenda PHP</h2></center>
	<hr>
	<div align="center">
	<table>
		<form method="post">
		<tr>
			<td>Nome: </td>
			<td><input type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Telefone: </td>
			<td><input type="text" name="tel"></td>
		</tr>
		<tr>
			<td>E-Mail: </td>
			<td><input type="text" name="mail"></td>
		</tr>
		<td>
			<td>
				<button name="x" value="1">Salvar</button>&nbsp;
				<button type="reset">Limpar</button>
			</td>
        </td>
    </form>
	</table>
    </div>
    <hr>
    <center><h2>Agenda</h2></center>
<div align="center">
<?php
    
    $nome = @$_POST['nome'];
    $telefone = @$_POST['tel'];
    $mail = @$_POST['mail'];
    $x = @$_POST['x'];

    $arquivo = fopen("agenda.txt", "a+");
    fwrite($arquivo, $nome."|".$telefone."|".$mail."|"."\r\n");
    $arquivo1 = fopen("agenda.txt", "r");
    $agenda = explode("|", fread($arquivo1, filesize("agenda.txt")));
    echo "<table border='1'><tr>";
    echo "<td><b>Nome</b></td>
          <td><b>Telefone</b></td>
          <td><b>E-Mail</b></td>
          </tr>";

    $cont = 0;

    for ($i = 0; $i < sizeof($agenda)-1; $i++) {
    	if($cont == 3){
    	echo "<tr>";
    	$cont = 0;
    }
    echo "<td>".$agenda[$i]."</td>";
	$cont++;
	}

?>
</div>

</body>
</html>