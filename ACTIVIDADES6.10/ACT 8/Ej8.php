<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Pedir al usuario su fecha de nacimiento y una fecha futura, y mostrar
     la edad que tendrá en esa fecha (un año tiene 60*60*24*365.25 segundos) -->
    <?php
    if(isset($_POST["fecha1"])){
        $nombre1=$_POST['nombre1'];
        $fecha1=$_POST['fecha1'];
        $nombre2=$_POST['nombre2'];
        $fecha2=$_POST['fecha2'];
        $yearActual=date("Y");

        $fechaComoEntero1 = strtotime($fecha1); //paso primera fecha, recojo el año y la edad
        $year1 = date("Y", $fechaComoEntero1);
        $edad1=$yearActual-$year1;

        $fechaComoEntero2 = strtotime($fecha2); //igual con la segunda fecha
        $year2 = date("Y", $fechaComoEntero2);
        $edad2=$yearActual-$year2;

        echo $nombre1, " tiene ", $edad1, " años y ", $nombre2, " tiene ", $edad2, " años.<br>";
        if($edad1>$edad2){
            echo $nombre1," es mayor.";
        }else if($edad1==$edad2){
            echo "Tienen la misma edad";
        }else{
            echo $nombre2," es mayor.";
        }
       
       

    }else{
    echo "
        <table border='1px solid black'>
            <form method='POST' action='Ej8.php'>
                <tr>
                    <th>Nombre de persona</th>
                    <th>Fecha</th>
                </tr>
                <tr>
                    <th><input type='text' name='nombre1' placeholder='Nombre de persona 1' required></th>
                    <th><input type='date' name='fecha1'  required></th>
                </tr>
                <tr>
                    <th><input type='text' name='nombre2' placeholder='Nombre de persona 2' required></th>
                    <th><input type='date' name='fecha2' required></th>
                </tr>
                <tr><th colspan=2><input type='submit' value='Enviar'></th></tr>
            </form>
        </table>
        ";
    }
    ?>
</body>
</html>