<?php
session_start();
function apagar(){
	session_destroy();
	header("Location: 000.php");
}

if(!isset($_SESSION['vetor'])){
	$_SESSION['vertor'] = array();
}
array_push($_SESSION['vetor'], @$_POST['nome']);
foreach ($_SESSION['vetor'] as $value) {
	echo $value."<br/>";
}
?>
<form method="post">
	Nome: <input type="text" name="nome">
	<button type="submit" name="btn">Enviar</button>
	<button type="submit" name="btn" value="btn1">Apagar</button>
</form>