<?php

include_once('aula16.php');



$dados = new Dados();


if(@$_POST['b'] == 'b1'){
	$nome = @$_POST['nome'];
	Add($nome);
}



function Add($nome){
	global $dados;
	
	$arq = fopen('dados.txt', 'a');

    $dados->setNome($nome);
    $texto = $dados->getNome();
    fwrite($arq, $texto."\r\n");
    Mostrar();
}

function Mostrar(){
	//global $dados;
	
	$arq = fopen('dados.txt', 'a');
	$ler = file('dados.txt');
	$n = 1;
	foreach ($ler as $value) {
		echo " ". $n . " ".$value."<br/>";
		$n++;
	}
}







?>


<form method="post">
	Nome: <input type="text" name="nome">
	<button type="submit" name="b" value="b1">Enviar</button>
</form>