<html>
<head>
	<title>04</title>
</head>
<body>

<form method="POST" action="04.php">
	Insira sua idade em anos: <input type="" name="idade">
	<button>Enviar</button>
</form>

<?php

$idade = @$_POST['idade'];

if ($idade >= 5 and $idade <= 7) {
	echo "Sua categoria é: INFANTIL A";
}else if ($idade >= 8 and $idade <= 10) {
	echo "Sua categoria é: INFANTIL B";
}else if ($idade >= 11 and $idade <= 13) {
	echo "Sua categoria é: JUVENIL A";
}else if ($idade >= 14 and $idade <= 17) {
	echo "Sua categoria é: JUVENIL B";
}else if ($idade >= 17) {
	echo "Sua categoria é: ADULTO";
}
?>

</body>
</html>