<!DOCTYPE html>
<html>
<head>
	<title>Calculadora - Function</title>
</head>
<body>
	<div>
    <fieldset>
    	<legend>Calculadora</legend>
	<form method="post">
		Digite um número: <input type="text" name="n1"><br/>
		Digite um número: <input type="text" name="n2"><br/>
		<br/>
		<button name="b" value="btn1">Somar</button>
		<button name="b" value="btn2">Subtrair</button>
		<button name="b" value="btn3">Multiplicar</button>
		<button name="b" value="btn4">Dividir</button>
		<button name="b" value="btn5">Resto</button>

	</form>
		
	</fieldset>
	</div>

	<?php

    $n1 = @$_POST['n1'];
    $n2 = @$_POST['n2'];
	$botao = @$_POST['b'];

    if($botao == 'btn1'){
    	soma($n1, $n2);
    }else if($botao == 'btn2'){
    	subtracao($n1, $n2);
    }else if($botao == 'btn3'){
    	multiplicacao($n1, $n2);
    }else if($botao == 'btn4'){
    	divisao($n1, $n2);
    }else if($botao == 'btn5'){
    	resto($n1, $n2);
    }
    function soma($n1, $n2){
		global $n1;
		global $n2;
		echo "A soma dos números é: ".($n1 + $n2);
	}
	function subtracao($n1, $n2){
		global $n1;
		global $n2;
		echo "A subtração dos números é: ".($n1 - $n2);
	}
    function multiplicacao($n1, $n2){
		global $n1;
		global $n2;
		echo "A multiplicação dos números é: ".($n1 * $n2);
	}
	function divisao($n1, $n2){
		global $n1;
		global $n2;
		if($n2 == '0'){
			echo "Você não pode dividir por zero!";
		}else{
		echo "A divisão dos números é: ".($n1 / $n2);
	}
	}
	function resto($n1, $n2){
		global $n1;
		global $n2;
		echo "O resto dos números é: ".($n1 % $n2);
	}
	?>
	

</body>
</html>