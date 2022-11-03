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
        background-color: <?php echo $_GET["ColorNuevo"];?>;
    }
</style>
<body>
    <?php
        if(isset($_GET["ColorNuevo"])){
            if(!isset($_SESSION["Colores"])){
                $_SESSION["Colores"] = [];
            }
            array_push($_SESSION["Colores"],$_GET["ColorNuevo"]);
            setcookie("Colores",serialize($_SESSION["Colores"]),time() + 365*24*2600);
            echo var_dump($_COOKIE);
        }
    ?>
    <h1>Añadir color: </h1>
    <form method="GET" action="Ej1.php">
        <!--Enviamos un string en forma de rgb para luego guardarlo en el array colores-->
        <input type="hidden" name="ColorNuevo" value="rgb(<?php echo mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255);?>)">
        <input type="submit" value="Añadir color">
    </form>

    <form method="GET" action="MostrarPaleta.php">
        <!--ENVIAR ARRAY COLORES POR FORMULARIO-->
        <input type="submit" value="Mostrar paleta creada">
    </form>

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
</body>
</html>