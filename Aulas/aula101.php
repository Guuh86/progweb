<?php
session_start();
echo "Aula 04";

$_SESSION['usuario'] = 'Administrador';

#session_destroy();
?>

<a href="aula10.php">Ir para aula 05</a>