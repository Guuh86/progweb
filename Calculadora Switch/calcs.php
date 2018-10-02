<!DOCTYPE html>
<html>
<head>
	<title>Calculadora Switch</title>
</head>
<body>

    <?php

        $botao = @$_POST['b'];
        $n1 = @$_POST['n1'];
        $n2 = @$_POST['n2'];
    
    ?>

	<div align="center">
	<fieldset>
		<legend>Calculadora</legend>
	<form method="post">
		Digite um número: <input type="text" name="n1"><br/>
		Digite um número: <input type="text" name="n2"><br/>
		<p>
        <button name="b" value="1">Somar</button>
        <button name="b" value="2">Subtrair</button>
        <button name="b" value="3">Multiplicar</button>
        <button name="b" value="4">Dividir</button>
        <button name="b" value="5">Resto da Divisão</button>
    </p>
    <?php
    switch ($botao) {
            case '1':
                $soma = $n1 + $n2;
                echo "<font color='green'><p align='center'>A soma dos números é: $soma</p></font>";
                break;
            case '2':
                $subtrair = $n1 - $n2;
                echo "<font color='green'><p align='center'>A subtração dos número é: $subtrair</p></font>";
                break;
            case '3':
                $multi = $n1 * $n2;
                echo "<font color='green'><p align='center'>A multiplicação dos números é: $multi</p></font>";
                break;
            case '4':
                if ($n2 == '0'){
                    echo "<font color='red'><p align='center'>Você não pode realizar uma divisão por 0!</p></font>";
                }else{
                $dividir = $n1 / $n2;
                echo "<font color='green'><p align='center'>A divisão dos números é: $dividir</p></font>";
                break;
            }
            case '5':
                if ($n2 == '0'){
                    echo "<font color='red'><p align='center'>Você não pode realizar uma divisão por 0!</p></font>";
                }else{
                    $resto = $n1 % $n2;
                    echo "<font color='green'><p align='center'>O resto da divisão dos números é: $resto</p></font>";
                break;
            }
        }?>




    
        </fieldset>
    </div>

        

        

    
	</form>

</body>
</html>