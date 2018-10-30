<form method="post">
	<table>
		<tr>
			<td>Nome: </td>
			<td><input type="text" name="livro"></td>
		</tr>
		<tr>
			<td>Autor: </td>
			<td><input type="text" name="autor"></td>
		</tr>
		<tr>
			<td>Ano: </td>
			<td><input type="text" name="ano"></td>
		</tr>
		<tr>
			<td colspan="2"><center><button type="submit" name="btn" value="btn1">Gravar</button>&nbsp;<button name="zerar" value="zerar">Limpar</button></center></td>
		</tr>


	
	
</form>
<?php
include_once('aula14.php');

$livro = new Livro();

$nome = @$_POST['livro'];
$autor = @$_POST['autor'];
$ano = @$_POST['ano'];

$zerar = @$_POST['zerar'];

if($zerar == 'zerar'){
	session_unset();
}

$_SESSION['1'] = array();
$_SESSION['2'] = array();
$_SESSION['3'] = array();

array_push($_SESSION['1'], $livro->getNome());
foreach ($_SESSION['1'] as $key) {
	echo $key;
}

array_push($_SESSION['2'], $livro->getAutor());
foreach ($_SESSION['2'] as $key) {
	echo $key;
}

array_push($_SESSION['3'], $livro->getAno());
foreach ($_SESSION['3'] as $key) {
	echo $key;
}

$livro->setNome($nome);
$livro->setAutor($autor);
$livro->setAno($ano);


echo "<table border='1' align='center'>";




echo "<th>Nome</th><th>Autor</th><th>Ano</th>";
echo "<tr><td>".$livro->getNome()."</td><td>".$livro->getAutor()."</td><td>".$livro->getAno()."</td></tr>";




?>
