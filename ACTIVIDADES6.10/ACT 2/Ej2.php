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
        //Realiza un ejercicio similar al anterior, pero para la hora.
        if(isset($_GET["Hora"])){
            $formato =  $_GET["formato"];
            $Hora = $_GET["Hora"];
            $Minuto = $_GET["Minuto"];
            $Segundo = $_GET["Segundo"];
                if($formato=="24Horas"){
                    echo $Hora.":".$Minuto.":".$Segundo;
                }else{
                    if($Hora>=12){
                        $Hora-=12;
                        echo $Hora.":".$Minuto.":".$Segundo." pm";
                    }else{
                        echo $Hora.":".$Minuto.":".$Segundo." am";
                    }
                }
        }else{
            echo "
            <table border='1px solid black'>
                <form method='get' action=''>
                    <tr><th><label>Formato de fecha</label></th><th colspan='3'></th></tr>
                    <tr>
                        <th>
                        <select name='formato' id='formato'>
                            <option value='24Horas'>13:30:57</option>
                            <option value='12Horas'>1:30:57pm</option>
                        </select>
                        </th>
                        <th><input type='number' name='Hora' min='0' placeholder='Hora' required></th>
                        <th><input type='number' name='Minuto' min='0' max='59' placeholder='Minuto' required></th>
                        <th><input type='number' name='Segundo' min='0' max='59' placeholder='Segundo' required></th>
                    </tr>
                    <tr><th colspan='4'><input type='submit'></th></tr>
                </form>
            </table>
            ";
        }
    ?>
</body>
</html>