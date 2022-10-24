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
    if(isset($_GET["Dia"])){
        $dia =  $_GET["Dia"];
        $mes =  $_GET["Mes"];
        $año =  $_GET["Año"];

        if(checkdate($mes,$dia,$año)){
            
        }else{
            echo "FECHA INCORRECTA. VUELVA A INTENTARLO.";
        }
    }else{
        echo "
        <table border='1px solid black'>
            <form method='get' action='Ej7.php'>
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