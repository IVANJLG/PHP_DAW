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
    /*Crea un formulario donde el usuario introduce una fecha a través de 3 cajas de texto, si no es
    correcta se debe indicar en un mensaje; si es correcta se debe mostrar en el formato elegido.
    Crea una lista desplegable con todas las posibilidades de formato que se te ocurran.*/

    if(isset($_GET["Dia"])){
        $formato =  $_GET["formato"];
        $dia =  $_GET["Dia"];
        $mes =  $_GET["Mes"];
        $año =  $_GET["Año"];

        $mesLetra = "";
        if(checkdate($mes,$dia,$año)){
            switch($formato){
                case "Texto":
                    switch($mes){
                        case 1: $mesLetra="Enero"; break;
                        case 2: $mesLetra="Febrero"; break;
                        case 3: $mesLetra="Marzo"; break;
                        case 4: $mesLetra="Abril"; break;
                        case 5: $mesLetra="Mayo"; break;
                        case 6: $mesLetra="Junio"; break;
                        case 7: $mesLetra="Julio"; break;
                        case 8: $mesLetra="Agosto"; break;
                        case 9: $mesLetra="Septiembre"; break;
                        case 10: $mesLetra="Octubre"; break;
                        case 11: $mesLetra="Noviembre"; break;
                        case 12: $mesLetra="Diciembre"; break;
                    }

                    echo $dia." de ".$mesLetra." del año ".$año;
                break;
                case "Barras": echo $dia."/".$mes."/".$año; break;
                case "Guiones": echo $dia."-".$mes."-".$año; break;
                case "Americano": echo $mes."/".$dia."/".$año; break;
            }
        }else{
            echo "FECHA INCORRECTA. VUELVA A INTENTARLO.";
        }
    }else{
        echo "
        <table border='1px solid black'>
            <form method='get' action=''>
                <tr><th><label>Formato de fecha</label></th><th colspan='3'></th></tr>
                <tr>
                    <th>
                    <select name='formato' id='formato'>
                        <option value='Texto'>12 de Septiembre de 1984</option>
                        <option value='Barras'>12/9/1984</option>
                        <option value='Guiones'>12-9-1984</option>
                        <option value='Americano'>9/12/1984</option>
                    </select>
                    </th>
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