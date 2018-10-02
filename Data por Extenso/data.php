<!DOCTYPE html>
<html>
<head>
	<title>Data por Extenso</title>
</head>
<body>

<form method="post">
	Insira uma data: <input type="date" name="data">
	<button>Enviar</button>
</form>

	<?php

    $dia = array("Doningo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");
    $mes = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

    $d = @$_POST['data'];
    $d2 = explode('-', $d);

    $dia_semana = date('w', strtotime($d));

    switch ($dia_semana) {
        case '0':
            echo "$dia[0], ";
            break;
            case '1':
                echo "$dia[1], ";
                break;
                case '2':
                    echo "$dia[2], ";
                    break;
                    case '3':
                        echo "$dia[3], ";
                        break;
                        case '4':
                            echo "$dia[4], ";
                            break;
                            case '5':
                                echo "$dia[5], ";
                                break;
                                case '6':
                                    echo "$dia[6], ";
                                    break;
    }

    //echo "$d2[2] ";
    //echo "$d2[1] ";
    //echo "$d2[0] ";

    echo "$d2[2] de ";

    if ($d2[1] == '01') {
        echo " $mes[0]";
    }else if($d2[1] == '02'){
        echo " $mes[1]";
    }else if($d2[1] == '03'){
        echo " $mes[2]";
    }else if($d2[1] == '04'){
        echo " $mes[3]";
    }else if($d2[1] == '05'){
        echo " $mes[4]";
    }else if($d2[1] == '06') {
        echo " $mes[5]";
    }else if($d2[1] == '07'){
        echo " $mes[6]";
    }else if($d2[1] == '08'){
        echo " $mes[7]";
    }else if($d2[1] == '09'){
        echo " $mes[8]";
    }else if($d2[1] == '10'){
        echo " $mes[9]";
    }else if($d2[1] == '11'){
        echo " $mes[10]";
    }else{
        echo " $mes[11]";
    }

    echo " de $d2[0].";
    

    
	?>

</body>
</html>