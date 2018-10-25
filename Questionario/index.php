<?php
session_start();

$_SESSION['q1'] = @$_POST['q1'];
$_SESSION['q2'] = @$_POST['q2'];
$_SESSION['q3'] = @$_POST['q3'];
$_SESSION['q4'] = @$_POST['q4'];
$_SESSION['q5'] = @$_POST['q5'];

$bt = @$_POST['x1'];
 
 /*
if($bt == 'Resultado' && (@$_POST['q1'] == '' || @$_POST['q2'] == '' || @$_POST['q3'] == '' || @$_POST['q4'] == '' || @$_POST['q5'] == '')){
	echo "<script type='text/javascript'>
    	alert('Responda o questionário');
    </script>";
}else if ($bt == 'Resultado' && (@$_POST['q1'] != '' || @$_POST['q2'] != '' || @$_POST['q3'] != '' || @$_POST['q4'] != '' || @$_POST['q5'] != '')) {
	header("Location: resultado.php");
}
*/

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questionário</title>
</head>
<body>
	<form method="POST">
	<div align="center" id="geral">
		<h2><b>Questionário</b></h2>
		<hr>
		
			<p>Por favor, responda o questionário abaixo:</p>
			1. Qual tag é utilizada em HTML para centralizar?<br/>
	    <hr>
		<div id="q1">
			<table>
				<tr>
					<td><input type="radio" name="q1" value="1"></td>
					<td>&lt;div&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q1" value="2"></td>
					<td>&lt;center&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q1" value="3"></td>
					<td>&lt;form&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q1" value="4"></td>
					<td>&lt;hr&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q1" value="5"></td>
					<td>&lt;head&gt;</td>
				</tr>				
			</table>
	    </div>
	    <hr>
	        2. Qual atributo da tag &lt;font&gt; é usado para aumentar e diminuir o tamanho do texto?<br/>
	        <hr>
		<div id="q2">
			<table>
				<tr>
					<td><input type="radio" name="q2" value="1"></td>
					<td>"color"</td>
				</tr>
				<tr>
					<td><input type="radio" name="q2" value="2"></td>
					<td>"style"</td>
				</tr>
				<tr>
					<td><input type="radio" name="q2" value="3"></td>
					<td>"form"</td>
				</tr>
				<tr>
					<td><input type="radio" name="q2" value="4"></td>
					<td>"class"</td>
				</tr>
				<tr>
					<td><input type="radio" name="q2" value="5"></td>
					<td>"face"</td>
				</tr>				
			</table>
	    </div>
	    <hr>
	    3. Quantos tipos da tag &lt;hr&gt; existem em HTML?
	    <hr>
	    <div id="q3">
			<table>
				<tr>
					<td><input type="radio" name="q3" value="1"></td>
					<td>5</td>
				</tr>
				<tr>
					<td><input type="radio" name="q3" value="2"></td>
					<td>7</td>
				</tr>
				<tr>
					<td><input type="radio" name="q3" value="3"></td>
					<td>9</td>
				</tr>
				<tr>
					<td><input type="radio" name="q3" value="4"></td>
					<td>10</td>
				</tr>
				<tr>
					<td><input type="radio" name="q3" value="5"></td>
					<td>3</td>
				</tr>				
			</table>
	    </div>
	    <hr>
	    4. Qual tag em HTML é considerada uma tag "Genérica"?
	    <hr>
	    <div id="q4">
			<table>
				<tr>
					<td><input type="radio" name="q4" value="1"></td>
					<td>&lt;hr&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q4" value="2"></td>
					<td>&lt;div&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q4" value="3"></td>
					<td>&lt;center&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q4" value="4"></td>
					<td>&lt;head&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q4" value="5"></td>
					<td>&lt;span&gt;</td>
				</tr>				
			</table>
	    </div>
	    <hr>
	    5. Qual tag é usada para criar colunas em um formulário?
	    <hr>
	    <div id="q5">
			<table>
				<tr>
					<td><input type="radio" name="q5" value="1"></td>
					<td>&lt;input&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q5" value="2"></td>
					<td>&lt;tr&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q5" value="3"></td>
					<td>&lt;td&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q5" value="4"></td>
					<td>&lt;table&gt;</td>
				</tr>
				<tr>
					<td><input type="radio" name="q5" value="5"></td>
					<td>&lt;form&gt;</td>
				</tr>				
			</table>
	    </div>
	    <div id="res">
	    	<hr>
	    	<input type="submit" name="x1" value="Resultado">
	    </div>
		
	</div>
	</form>
	<style type="text/css">
	    #res{
	    	margin-bottom: 10px;
	    }
	    #geral{
	    	border-style: solid;
	    	border-width: 1px;
	    }
	    body{
	    	margin-left: 20%;
	    	margin-right: 20%;
	    }
		#q1{
			margin-right: 233px;
			margin-top: 10px;
		}
		#q2{
			margin-right: 246px;
			margin-top: 10px;
		}
		#q3{
			margin-right: 275px;
			margin-top: 10px;
		}
		#q4{
			margin-right: 233px;
			margin-top: 10px;
		}
		#q5{
			margin-right: 243px;
			margin-top: 10px;
		}
		hr{
			background-color: black;
			color: black;
		}
	</style>

</body>
</html>