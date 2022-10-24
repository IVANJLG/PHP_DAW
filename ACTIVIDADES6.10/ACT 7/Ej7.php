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
    /*Pedir al usuario su fecha de nacimiento y una fecha futura, y mostrar la edad que tendrá en esa
    fecha (un año tiene 60*60*24*365.25 segundos)*/
    if(isset($_GET["DiaNac"])){
        $diaNac =  $_GET["DiaNac"];
        $MesNac =  $_GET["MesNac"];
        $AñoNac =  $_GET["AñoNac"];
        $DiaF =  $_GET["DiaF"];
        $MesF =  $_GET["MesF"];
        $AñoF =  $_GET["AñoF"];

        if(checkdate($MesNac,$diaNac,$AñoNac) && checkdate($MesF,$DiaF,$AñoF)){
            $fecha1 = date_Create($MesNac."/".$diaNac."/".$AñoNac);
            $fecha2 = date_Create($MesF."/".$DiaF."/".$AñoF);
            /*fallo: 
    echo "Diferencia: ".date("m-d-Y",strtotime(date_format($fecha1,"m-d-Y")."+$DiaF days $MesF month $AñoF years"));*/
            echo "FECHA NACIMIENTO: ".date($fecha1)."<br>";
            echo "FECHA FUTURA: ".$fecha2."<br>";
            echo date("d-F-Y",$Diferencia)."<br>";

        }else{
            echo "FECHAS INCORRECTAS. VUELVA A INTENTARLO.";
        }
    }else{
        echo "
        <table border='1px solid black'>
            <form method='get' action='Ej7.php'>
                <tr><th colspan=3>Fecha de nacimiento</th></tr>
                <tr>
                    <th><input type='number' name='DiaNac' min='1' max='31' placeholder='Dia' required></th>
                    <th><input type='number' name='MesNac' min='1' max='12' placeholder='Mes' required></th>
                    <th><input type='number' name='AñoNac' min='1' max='10000' placeholder='Año' required></th>
                </tr>
                <tr><th colspan=3>Fecha futura</th></tr>
                <tr>
                    <th><input type='number' name='DiaF' min='1' max='31' placeholder='Dia' required></th>
                    <th><input type='number' name='MesF' min='1' max='12' placeholder='Mes' required></th>
                    <th><input type='number' name='AñoF' min='1' max='10000' placeholder='Año' required></th>
                </tr>
                <tr>
                    <th colspan='4'><input type='submit'></th>
                </tr>
            </form>
        </table>
        ";
    }
    ?>
</body>
</html>