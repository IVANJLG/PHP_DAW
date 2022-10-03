<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img{width:50px;}
</style>
<body>
    <table>
    <?php
    header("refresh:2;url=Ej5-a.php");
        $fila = $_GET["i"];
        $columna = $_GET["j"];

        for($i=0;$i<=10;$i++){
            echo "<tr>";
            for($j=0;$j<=10;$j++){
                echo "<th>";
                if($i==$fila && $j==$columna){   
                    echo "<img src='Images/ojoabierto.png'>";
                }else{
                    echo "<img src='Images/ojocerrado.png'>";
                }
                echo "</th>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>