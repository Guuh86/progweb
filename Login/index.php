<?php
session_start();
$user = @$_POST['user'];
$pass = @$_POST['pass'];
$botao = @$_POST['btao'];

$_SESSION['user'] = 'admin';
$_SESSION['pass'] = '12345';


if( $botao == 'bt' && $user == $_SESSION['user'] && $pass == $_SESSION['pass']) {
	$_SESSION['usuario'] = 'Administrador';
	header('Location: 01.php');
}else if($botao == 'bt' && $user != $_SESSION['user'] && $pass != $_SESSION['pass']){
	echo "<script type='text/javascript'>
		alert('Insira um usuário válido!');
	</script>";
}
?>


<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
	<table border="1" align="center">
		<tr>
			<td colspan="2" bgcolor="lightblue"><p><b>Login</b></p></td>
		</tr>
		<tr bgcolor="silver">
			<td><b>Usuário: </b></td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr bgcolor="silver">
			<td><b>Senha: </b></td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr bgcolor="silver">
			<td colspan="2"><center><button name="btao" value="bt">Entrar</button></center></td>
		</tr>
	</table>
    </form>
    <style type="text/css">
        body{
        	font-family: verdana;
        }
    	p{
    		text-align: center;
    		font-size: 20px;
    	}
    	table{
    		border-bottom: 15px;
    		border-right: 15px;
    		border-left: 15px;
    		border-top: 15px;
    	}
    	
    </style>

</body>
</html>