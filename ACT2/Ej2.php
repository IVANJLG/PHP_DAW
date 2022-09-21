<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th{
        margin:5px;
        border:1px solid black;
        font-size:1.3em;
    }
</style>
<body>
    <?php
        $num1= $_GET["num1"];
        $num2= $_GET["num2"];
        $num3= $_GET["num3"];
        $num4= $_GET["num4"];
        $num5= $_GET["num5"];
        $num6= $_GET["num6"];
        $numSerie= $_GET["numSerie"];
        $num1Generado = rand(1,49);
        $num2Generado = rand(1,49);
        $num3Generado = rand(1,49);
        $num4Generado = rand(1,49);
        $num5Generado = rand(1,49);
        $num6Generado = rand(1,49);
        $numSerieGenerado = rand(1,999);
    ?>
    <table>
        <tr><th colspan="7">Combinacion generada</th></tr>
        <tr>
            <th><?php echo $num1;?></th>
            <th><?php echo $num2;?></th>
            <th><?php echo $num3;?></th>
            <th><?php echo $num4;?></th>
            <th><?php echo $num5;?></th>
            <th><?php echo $num6;?></th>
            <th><?php echo $numSerie;?></th>
        </tr>
        <tr><th colspan="7">Combinacion introducida</th></tr>
        <tr>
            <th><?php echo $num1Generado;?></th>
            <th><?php echo $num2Generado;?></th>
            <th><?php echo $num3Generado;?></th>
            <th><?php echo $num4Generado;?></th>
            <th><?php echo $num5Generado;?></th>
            <th><?php echo $num6Generado;?></th>
            <th><?php echo $numSerieGenerado;?></th>
        </tr>
    </table>
</body>
</html>
