<!DOCTYPE html>
<html>
<head>
	<title>Aula 08 - PHP</title>
</head>
<body>

<?php

echo "Aula 08 - PHP";

function azul(){
	echo "<font color='blue'> Texto da cor azul";
}

function cor($cor){
	echo "<font color=$cor> Texto da cor: ". $cor."</font>";

}

$botao = @$_POST['btn'];
if($botao == 'btn1'){
	cor(@$_POST['cor']);
}
?>

<form method="post">
	Cor: <input type="text" name="cor">
	<button name="btn" value="btn1">Enviar a cor</button>
</form>

</body>
</html>