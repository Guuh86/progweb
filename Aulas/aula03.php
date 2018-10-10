<!DOCTYPE html>
<html>
<head>
	<title>Aula 03 PHP</title>
</head>
<body>
	<?php
	$var = 20;
	$a = "<h1 align='center'>Aula 03 - PHP $var" .$var.'</h1>';
	echo $a;
	echo date('d-m-y    ');
    
    // Contando caracter em String
	$cont = strlen($a);

	echo "<font color='red'>$cont";

	// Tira espaços na String

	$nome = " Luiz Gustavo ";
	$sobrenome = " Brito Oliveira ";

	$nome1 = strtoupper($nome);
	echo $nome1.$sobrenome;

	echo '<br/>';
	echo '<hr>';

    $texto = 'O ifpi | esta | localizado | na | br 402';

    $texto1 = explode('|', $texto);

    print_r($texto1)

	?>


</body>
</html>