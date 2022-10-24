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
    /*Mostrar el día de la semana que correspondería, una vez transcurridos un número de años,
    meses, y días elegidos por el usuario, a partir de la fecha actual.*/
    if(isset($_GET["Dia"])){
        $dia =  $_GET["Dia"];
        $mes =  $_GET["Mes"];
        $año =  $_GET["Año"];

        $fecha = date_create();
        echo "FECHA ACTUAL<br>";
        echo date_format($fecha,"d-F-Y")."<br>";
        echo "FECHA ACTUAL +".$dia." DIAS<br>";
        $fecha = strtotime("+$dia days +$mes month +$año years");
        echo date("d-F-Y",$fecha)."<br>";
        echo "Y corresponde al ".date("l",$fecha);
        
    }else{
        echo "
        <table border='1px solid black'>
            <form method='get' action='Ej6.php'>
                <tr><th colspan=3>Numero de dias, meses y años transcurridos tras la fecha actual</th></tr>
                <tr>
                    <th><input type='number' name='Dia' min='1' max='31' placeholder='Dia' required></th>
                    <th><input type='number' name='Mes' min='1' max='12' placeholder='Mes' required></th>
                    <th><input type='number' name='Año' min='1' max='10000' placeholder='Año' required></th>
                </tr>
                <tr><th colspan='4'><input type='submit'></th></tr>
            </form>
        </table>
        ";
    }
    ?>
</body>
</html>