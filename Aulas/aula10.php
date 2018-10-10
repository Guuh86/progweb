<?php

session_start();
if(isset($_SESSION['usuario'])){


echo "Aula 05";

echo $_SESSION['usuario'];

?>

<a href="aula101.php">Ir para próxima página</a>

<?php

}else{
	echo "Error na página - Sem sessão";
}
?>