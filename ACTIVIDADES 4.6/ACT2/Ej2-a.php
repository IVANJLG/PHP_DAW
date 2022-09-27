<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid black">
        <form action="Ej2-b.php" method="get">
        <?php 
        /*construye la tabla con bucle anidado*/
            $contador=1;
            for($i=0;$i<7;$i++){
                echo "<tr>";
                for($j=0;$j<7;$j++){
                    echo"<th><input type='checkbox' value=".($contador).">".$contador."</th>";
                    $contador++;
                }
                echo "</tr>";
            }
        ?>
            <tr>
                <th colspan="7">
                    <input type="submit">
                </th>
            </tr>
        </form>
    </table>
</body>
</html>