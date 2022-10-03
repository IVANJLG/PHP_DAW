<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img{
        width:50px;
    }
</style>
<body>
    <table>
        <?php
            for($i=0;$i<=10;$i++){
                echo "<tr>";
                for($j=0;$j<=10;$j++){
                    echo "<th><a href='Ej5-b.php?i=".$i."&j=".$j."'><img src='Images/ojocerrado.png'></a></th>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>