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
        <form method='get' action='Ej7-b.php'>
        <?php 
            $contador = 1;
            for($i=0;$i<7;$i++){
                echo "<tr>";
                for($j=0;$j<7;$j++){
                    echo "<th>
                                <input type='checkbox' value='".$contador."' name='".$contador."' >".$contador."
                         </th>";
                    $contador++;
                }
                echo "</tr>";
            }
            echo "<tr>
                    <th colspan='7'>
                            <input type='number' min='1' max='999' name='Serie'>
                            <input type='submit'>
                        </form>
                    </th>
                </tr>";
        ?>
        </form>
    </table>
</body>
</html>