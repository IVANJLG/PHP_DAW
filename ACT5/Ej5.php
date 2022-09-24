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
        $diametro = $_POST["diametro"];
        $altura = $_POST["altura"];
        $caudal = $_POST["caudal"];
        $radio = $diametro/2;
        /*volumen del cilindro en metros cubicos. 1dm cubico = 1 litro => 0.001m cubico = 1L. caudal = x L/min
            por tanto si el caudal es x L/min se llenan 0.00x m / min. volumen / 0.00x = minutos. */
        $volumen = pi()*$radio*$radio*$altura;
        /*calculo el tiempo en segundos y luego filtrando el resultado por 2 bucles lo transformo en 3 variables. 
        1 de horas, otra de minutos y otra de segundos*/
        $segundos = ($volumen / ($caudal/1000))*60;
        $minutos = 0;
        $horas = 0;
         while($segundos > 59){
            $segundos = $segundos - 60;
            $minutos = $minutos+1;
        }
        while($minutos > 59){
            $minutos = $minutos - 60;
            $horas = $horas+1;
        } 
    ?>
    <br>
    <table border="1px solid black">
        <tr>
            <th colspan="3">TIEMPO</th>
        </tr>
        <tr>
            <th>HORAS</th>
            <th>MINUTOS</th>
            <th>SEGUNDOS</th>
        </tr>
        <tr>
            <th><?php echo $horas?></th>
            <th><?php echo $minutos?></th>
            <th><?php echo $segundos?></th>
        </tr>
    </table>
</body>
</html>