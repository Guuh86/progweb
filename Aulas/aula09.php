<!DOCTYPE html>
<html>
<head>
	<title>Aula 09 - PHP</title>
</head>
<body>
	<?php

	$n = 2;

	print time();

	?>

	<table border="1" bordercolor="blue">
		<tr bgcolor=<?php print $n == 1? "silver":"white";?>>
			<td>Valor 01</td>
		</tr>
		<tr bgcolor=<?php print $n == 2? "silver":"white";?>>
			<td>Valor 02</td>
		</tr>
		<tr bgcolor=<?php print $n == 3? "silver":"white";?>>
			<td>Valor 03</td>
		</tr>
	</table>



</body>
</html>