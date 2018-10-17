<?php

echo "<center><h2>Arquivo em PHP... </h2></center>";

$nome = "Luiz";
$idade = " 22";
$ano = " 1996";

$arq = fopen("arquivo.txt", "a+");

fwrite($arq, $nome."|".$idade."|".$ano."|"."\r\n");

$arq1 = fopen("arquivo.txt", "r");

$dados = explode("|", fread($arq1, filesize("arquivo.txt")));

echo "<table border='1'><tr>";
echo "<td><b>Nome</b></td>
      <td><b>Idade</b></td>
      <td><b>Ano</b></td>
      </tr>";

$cont = 0;

for ($i = 0; $i < sizeof($dados)-1; $i++) {
    if($cont == 3){
    	echo "<tr>";
    	$cont = 0;
    } 
	echo "<td>".$dados[$i]."</td>";
	$cont++;
}



?>