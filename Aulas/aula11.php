<?php

$vetor = array(1,2,3,4,5);
$vetor[] = 8;
echo $vetor[1];

if(array_search(5, $vetor)){
	echo "Existe o número no vetor";
}else{
	echo "Não existe o número";
}
echo "<hr>";
$flag = 0;

for($i = 0; $i < sizeof($vetor); $i++){
	if($vetor[$i] == 4){
		echo "O valor ".$vetor[$i]." indice".$i." existe no vetor";
		$flag = 1;
		break;
	}else{
		$flag = 0;
		echo " Valor não encontrado. ";
	}
}





?>