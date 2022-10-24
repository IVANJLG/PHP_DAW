<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Pedir un día de la semana en un formulario, seleccionándolo desde una lista desplegable.
    Mostrar la fecha correspondiente al próximo día de la semana elegido por el usuario.*/
    if(isset($_GET["DiaSemana"])){
        $dia =  $_GET["DiaSemana"];
        $diaNum = 0;
        switch($dia){
            case "Monday": $dianNum=0; break;
            case "Tuesday": $dianNum=1; break;
            case "Wednesday": $dianNum=2; break;
            case "Thursday": $dianNum=3; break;
            case "Friday": $dianNum=4; break;
            case "Saturday": $dianNum=5; break;
            case "Sunday": $dianNum=6; break;
        }
        $fecha = date_create();
        
        if($Num>$diaNum){
            echo "La proxima fecha para ese dia de la semana es ".date("d-m-Y",strtotime($fecha."+ 1 week"));
            
        }else{
            echo "La proxima fecha para ese dia de la semana es ".date("d, F Y",time());
        }
    }else{
        echo "
        <table border='1px solid black'>
            <form method='get' action='Ej5.php'>
                <tr>
                    <th>
                    <select name='DiaSemana' id='DiaSemana'>
                        <option value='Monday'>Lunes</option>
                        <option value='Tuesday'>Martes</option>
                        <option value='Wednesday'>Miercoles</option>
                        <option value='Thursday'>Jueves</option>
                        <option value='Friday'>Viernes</option>
                        <option value='Saturday'>Sabado</option>
                        <option value='Sunday'>Domingo</option>
                    </select>
                  </th>
                </tr>
                <tr><th colspan='4'><input type='submit'></th></tr>
            </form>
        </table>
        ";
    }
    ?>
</body>
</html>