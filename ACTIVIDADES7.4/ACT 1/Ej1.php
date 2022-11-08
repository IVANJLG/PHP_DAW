<?php session_Start(); 
    if(isset($_POST["destruir"])){
        session_destroy();
        session_Start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        <?php
            if(isset($_POST["red"])){
                $Color = "rgb(".$_POST["red"].", ".$_POST["green"].", ".$_POST["blue"].")";
                echo "background-color:".$Color;
                
                if(isset($_SESSION["colores"])){
                    array_push($_SESSION["colores"],$Color);
                }else{
                    $_SESSION["colores"]=[];
                }
            }else{
                echo "background-color:rgb(255,255,255);";
            }
        ?>
        
    }

    input{
        margin:20px;
    }
</style>
<body>
    <?php
    /* Crear una página principal con un botón 'Añadir color' para generar un color aleatorio que además se
    establecerá como color de fondo de la página, cada vez que se pulsa irá generando un color nuevo (actualizando
    el fondo), que se irán almacenando en un array de sesión. Habrá un segundo botón 'Mostrar paleta creada' que
    dirige a una segunda página que mostrará una paleta con los colores generados. Esta paleta no es más que una
    tabla con un máximo de 5 celdas por cada fila, y en cada celda se muestra un color de los generados. Debajo
    de la tabla tendremos 2 botones uno para volver a la página principal y seguir añadiendo colores a la paleta y
    otro para destruir la sesión y generar una paleta nueva. Además al pulsar en cada celda de la tabla el color de
    fondo de la página cambiará al color de la celda pulsada. */

    ?>

    <form action="Ej1.php" method="post">
        <input type="hidden" name="red" value="<?php echo rand(0,255);?>">
        <input type="hidden" name="green" value="<?php echo rand(0,255);?>">
        <input type="hidden" name="blue" value="<?php echo rand(0,255);?>">
        <input type="submit" value="Añadir color">
    </form>
    <form action="Ej1Paleta.php" method="post">
    <input type="submit" value="Ver paleta">
    </form>
</body>
</html>