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
            for($i=0;$i<100;$i++){
                $nums[$i]=rand(0,20);
            }
            echo "<h2>Tabla de numeros aleatorios</h2>";
            $contador=0;
            for($i=0;$i<5;$i++){
                echo "<br>";
                for($j=0;$j<20;$j++){
                    echo $nums[$contador]." ";
                    $contador++;
                }
                echo "<br>";
            }
        ?>
        <br><br>
        <form action="Ej4-b.php" method="get">
            
        <?php
            foreach($nums as $valor){
            echo '<input type="hidden" name=resultado[] value="'.$nums[$valor].'">';
            }
        ?>

            <tr><th>Numero 1: <input type="number" name="Numero1" min="0" max="100"></th></tr>
            <tr><th>Numero 2:<input type="number" name="Numero2" min="0" max="100"></th></tr>
            <tr><th><input type="submit"></th></tr>
        </form>
</body>
</html>