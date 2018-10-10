<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - PHP</title>
</head>
<body>

	<?php

	echo "Aula 04 - Estrutura de Repetição <br/>";

	$a = 0;

	while ($a <= 10) {
		echo 'O valor de $a é: '.$a."<br/>";
		$a++; 
		
	}

	?>

	<table border="1">
		<tr>
			<?php
			$b = 0; 
			while ($b <= 10){
				echo "<td> Valor ".$b."</td>";
				$b++;
			}?>
			
		</tr>
	</table>

	<?php

	for($i=1;$i<7;$i++){
		echo "<h".$i."> Testando comando FOR </h".$i.">"; 
	}

	?>

</body>
</html>