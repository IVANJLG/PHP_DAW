<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $Num1 = $_GET['Numero1'];
            $Num2 = $_GET['Numero2'];
            $nums = $_REQUEST["resultado"];
            echo "<h2>Tabla de numeros aleatorios</h2>";
            $contador=0;
            for($i=0;$i<5;$i++){
                echo "<br>";
                for($j=0;$j<20;$j++){
                    if($nums[$contador]==$Num1){
                    }
                    echo $nums[$contador]." ";
                    $contador++;
                }
                echo "<br>";
            }
        ?>
</body>
</html>