<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    <?php
        session_start();
    ?>
    div{
        width:100px;
        height:100px;
        line-height:100px;
        font-family:sans-serif;
        display:inline-block;
        border:2px solid white;
        margin-top:-3px;
    }

    input{
        margin:20px;
    }
</style>
<body>
    <h1>Paleta de colores</h1>
    <?php
        if(isset($_SESSION["colores"])){
            $contador = 0;
            for ($i=count($_SESSION["colores"])-1; $i >= 0 ; $i--) {
                if($contador==5){
                    echo "<br>";
                    $contador = 0;
                }
                echo "<div style='background-color:".$_SESSION["colores"][$i]."'></div>";
                $contador++;
            }
        }else{
            echo "<h2>Aun no se ha introducido ningun color...</h2>";
        }
    ?>

    <form action="Ej1.php">
        <input type="submit" value="Seguir añadiendo colores">
    </form>

    <form method="post" action="Ej1.php">
        <input type="hidden" name="destruir" value="True">
        <input type="submit" value="Borrar paleta de colores">
    </form>
</body>
</html>