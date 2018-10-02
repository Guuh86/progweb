<!DOCTYPE html>
<html>
<head>
	<title>Questão 02</title>
</head>
<body>
	<form method="post">
		Informe sua data de nascimento: <input type="date" name="data">
		<br/>
		<button>Enviar</button>
	</form>

	<?php

	$data = @$_POST['data'];
	$datual = date('Y-m-d');

	//echo "$datual<br/>";
	//echo "$data<br/>";

	$dataex = explode("-", $data);
	$dataex2 = explode("-", $datual);

	$x1 = $dataex2[0] - $dataex[0];

	echo "Você tem $x1 anos, ";

	if ($dataex[1] > $dataex2[1]) {
		$x2 = $dataex - $dataex2;
		echo "$x2 meses, ";
	}else{
		$x2 = $dataex2[1] - $dataex[1];
		echo "$x2 meses ";
	}
	
	if ($dataex[2] > $dataex2[2]) {
		$x3 = $dataex[2] - $dataex2[2];
		echo "e $x3 dias";
	}else{
		$x3 = $dataex2[2] - $dataex[2];
		echo "e $x3 dias";
	}
	

	?>

</body>
</html>