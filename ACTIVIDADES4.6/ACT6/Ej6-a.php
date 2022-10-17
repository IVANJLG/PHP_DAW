<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
            <table>
                <?php
                    $contador=1;
                    for($i=0;$i<3;$i++){
                        echo "<tr>";
                        for($j=0;$j<3;$j++){
                            echo "<th><a href='Ej6-b.php?num=".$contador."'><img src='Images/oculto.jpg'></a></th>";
                            $contador++;
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        
        <form method="get" action="Ej6-b.php">
            <input type="text" name="personaje">
            <input type="submit" value="Comprobar">
        </form>
    </body>
</html>