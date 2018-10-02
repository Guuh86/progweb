<!DOCTYPE html>
<html>
<head>
	<title>Prato do Dia</title>
</head>
<body>
<?php 


$dia = date('D');
//$dia = '6';
if ($dia == 'Sun') {
	$dia = '0';
}else if ($dia == 'Mon') {
	$dia = '1';
}else if ($dia == "Tue") {
	$dia = '2';
}else if ($dia == "Wed") {
	$dia = '3';
}else if ($dia == "Thu") {
	$dia = '4';
}else if ($dia == "Fri") {
	$dia = '5';
}else if ($dia == "Sat") {
	$dia = '6';
}
?>
		
	<table border="1" align="center">
		<tr bgcolor="MediumSlateBlue">
			<td>Elemento</td>
			<td>Dia da Semana</td>
			<td>Prato do dia</td>
			<td>Preço</td>
		</tr>
		<tr bgcolor=<?php print $dia == '0'? "red":"white";?>>
			<td>0</td>
			<td>Domingo</td>
			<td>Lasanha a quatro queijos</td>
			<td>R$ 12,60</td>
		</tr>
		<tr bgcolor=<?php print $dia == '1'? "Goldenrod":"white";?>>
			<td>1</td>
			<td>Segunda-feira</td>
			<td>Frango ao molho madeira</td>
			<td>R$ 10,00</td>
		</tr>
		<tr bgcolor=<?php print $dia == '2'? "green":"white"; ?>>
			<td>2</td>
			<td>Terça-feira</td>
			<td>Arroz à grega</td>
			<td>R$ 09,40</td>
		</tr>
		<tr bgcolor=<?php print $dia == '3'? "blue":"white"; ?>>
			<td>3</td>
			<td>Quarta-feira</td>
			<td>Feijoada à moda da casa</td>
			<td>R$ 11,20</td>
		</tr>
		<tr bgcolor=<?php print $dia == '4'? "pink":"white"; ?>>
			<td>4</td>
			<td>Quinta-feira</td>
			<td>Nhoque paulista</td>
			<td>R$ 08,50</td>
		</tr>
		<tr bgcolor=<?php print $dia == '5'? "silver":"white"; ?>>
			<td>5</td>
			<td>Sexta-feira</td>
			<td>Bacalhau ao forno</td>
			<td>R$ 15,20</td>
		</tr>
		<tr bgcolor=<?php print $dia == '6'? "purple":"white"; ?>> 
			<td>6</td>
			<td>Sábado</td>
			<td>Feijão branco</td>
			<td>R$ 10,00</td>
		</tr>
	</table>
<?php

if ($dia == '0') {
	echo "<div id='texto'><font color='red'>Hoje é <b>Domingo</b><br/>Nossa sugestão para hoje é: <b>Lasanha a quatro queijos<br/>Preço:<b>R$ 12,60</b></div></font>";
}else if ($dia == '1') {
	echo "<div id='texto'><font color='Goldenrod'>Hoje é <b>Segunda-feira</b><br/>Nossa sugestão para hoje é: <b>Frango ao molho madeira<br/>Preço:<b>R$ 10,00</b></div></font>";
}else if ($dia == "2") {
	echo "<div id='texto'><font color='green'>Hoje é <b>Terça-feira</b><br/>Nossa sugestão para hoje é: <b>Arroz à grega<br/>Preço:<b>R$ 09,40</b></div></font>";
}else if ($dia == "3") {
	echo "<div id='texto'><font color='blue'>Hoje é <b>Quarta-feira</b><br/>Nossa sugestão para hoje é: <b>Feijoada à moda da casa<br/>Preço:<b>R$ 11,20</b></div></font>";
}else if ($dia == "4") {
	echo "<div id='texto'><font color='pink'>Hoje é <b>Quinta-feira</b><br/>Nossa sugestão para hoje é: <b>Nhoque paulista<br/>Preço:<b>R$ 08,50</b></div></font>";
}else if ($dia == "5") {
	echo "<div id='texto'><font color='silver'>Hoje é <b>Sexta-feira</b><br/>Nossa sugestão para hoje é: <b>Bacalhau ao forno<br/>Preço:<b>R$ 15,20</b></div></font>";
}else if ($dia == "6") {
	echo "<div id='texto'><font color='purple'>Hoje é <b>Sábado</b><br/>Nossa sugestão para hoje é: <b>Feijão branco<br/>Preço:<b>R$ 10,00</b></div></font>";
}

?>

<style type="text/css">
	#texto{
		margin-left: 390px;
		margin-top: 10px;
	}
</style>





</body>
</html>