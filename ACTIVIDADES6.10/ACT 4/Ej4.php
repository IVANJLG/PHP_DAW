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
    /*Pedir una fecha en un formulario con un input de fecha y mostrarla en el formato “12 de Enero
    de 2018” (en español).*/
    if(isset($_GET["Dia"])){
        $dia =  $_GET["Dia"];
        $mes =  $_GET["Mes"];
        $año =  $_GET["Año"];

        if(checkdate($mes,$dia,$año)){
            $fecha = date_Create($mes."/".$dia."/".$año);
            $formato = date_Format($fecha,"l")." ".date_format($fecha,"d")." of ".date_format($fecha,"F").",  ".date_format($fecha,"Y");
            echo $formato;
        }else{
            echo "FECHA INCORRECTA. VUELVA A INTENTARLO.";
        }
    }else{
        echo "
        <table border='1px solid black'>
            <form method='get' action=''>
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