<!DOCTYPE html>
<html>
<head>
	<title>Aula 07</title>
</head>
<body>
	<?php
    $a = 1;
	//echo $a >2? $a = 1: $a = 0;echo "<br/>";

	$botao = @$_GET['btn'];
	if($botao == 'btn1'){
		soma(10);
	}

	function soma($b){
		global $a;
		echo "soma: ".($a + $b);
	}
	/*
	Função com parâmetros
	function soma($a, $b){
	    echo "soma: ". ($a + $b);
	}
	soma(2,5);
	*/
	?>

	<form method="get">
		<button name="btn" value="btn1">Somar</button>
	</form>

</body>
</html>