<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Crear una clase cubo que contenga información sobre la capacidad y su contenido actual 
        en litros. Se podrá consultar tanto la capacidad como el contenido en cualquier momento. 
        Dotar a la clase de la capacidad de verter el contenido de un cubo en otro (hay que 
        tener en cuenta si el contenido del cubo origen cabe en el cubo destino, si no cabe, se 
        verterá solo el contenido que quepa). Hacer una página principal para probar el 
        funcionamiento con un par de cubos.
    -->

    <?php
        include_once "Cubo.php";
        $cubo1 = new cubo(150,50);
        $cubo2 = new cubo(300,200);

        echo "cubo 1: <br>".$cubo1."<br><br>";
        echo "cubo 2: <br>".$cubo2."<br><br>";
        echo "";
    ?>
</body>
</html>