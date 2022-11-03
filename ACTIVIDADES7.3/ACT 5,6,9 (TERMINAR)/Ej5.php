<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: darkcyan;
    }

    h1,h2 {
        text-align: center;
        font-family: sans-serif;
    }

    img {
        width: 180px;
        padding-left: 27%;
        padding-top: 5px;
    }

    form,
    form>input,
    p {
        margin: 0 auto 0 auto;
        text-align: center;
        padding: 10px;
    }

    .Catalogo {
        padding: 0 auto 0 auto;
        width: 400px;
        height: 600px;
        overflow-y: scroll;
        margin-left: 27%;
        background-color: cornflowerblue;
        display: inline-block;
    }

    .Carrito {
        padding: 0 auto 0 auto;
        width: 400px;
        height: 600px;
        overflow-y: scroll;
        background-color: cornflowerblue;
        display: inline-block;
        margin-left: 20px;
    }
</style>

<body>
    <?php
    session_start();

    /*Si ha comprado cualquier articulo comprueba que la sesion carrito existe. Si no existe, crea un array
        con los valores recogidos y si existe, añadelos al array (con la funcion array_push)*/
    echo var_dump($_SESSION);
    if (isset($_GET["articulo"])) {
        if (!isset($_SESSION["Carrito"])) {
            $_SESSION["Carrito"] = array();
        }
        if (!isset($_SESSION["PrecioTotal"])) {
            $_SESSION["PrecioTotal"] = $_GET["precio"];
        }
        if (!isset($_SESSION["unidades1"])) {
            $_SESSION["unidades1"] = 1;
        }
        if (!isset($_SESSION["unidades2"])) {
            $_SESSION["unidades2"] = 1;
        }
        if (!isset($_SESSION["unidades3"])) {
            $_SESSION["unidades3"] = 1;
        }
        if (!isset($_SESSION["unidades4"])) {
            $_SESSION["unidades4"] = 1;
        }
        if (!isset($_SESSION["unidades5"])) {
            $_SESSION["unidades5"] = 1;
        }
        echo var_dump($_SESSION);
        $_SESSION["PrecioTotal"] += $_GET["precio"];
        if(!in_array($_GET["articulo"],$_SESSION["Carrito"])){
            $_SESSION["Carrito"][] = $_GET["articulo"];
        }else{
            switch($_GET["articulo"]){
                case "articulo 1": $_SESSION["unidades1"]++; break;
                case "articulo 2": $_SESSION["unidades2"]++; break;
                case "articulo 3": $_SESSION["unidades3"]++; break;
                case "articulo 4": $_SESSION["unidades4"]++; break;
                case "articulo 5": $_SESSION["unidades5"]++; break;
            }
        }
            
     
    }
    ?>
    <h1>Tienda de estilografia</h1>
    <div class='Catalogo'>
        <h2>Catalogo</h2>
        <div class="articulo 1">
            <img src='./Artic1.jpg'>
            <p>Articulo 1</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 1'>
                <input type='hidden' name='precio' value=10>
                <input type='hidden' name='imagen' value="./Artic1.jpg">
                <input type='submit' value='Añadir al carrito'>
            </form>
            <form method="GET" action="Ej5-detalle.php">
                <input type="hidden" name="artic" value="articulo 1">
                <input type='submit' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 2">
            <img src='./Artic2.jpg'>
            <p>Articulo 2</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 2'>
                <input type='hidden' name='precio' value=20>
                <input type='hidden' name='imagen' value="./Artic2.jpg">
                <input type='submit' value='Añadir al carrito'>
            </form>
            <form method="GET" action="Ej5-detalle.php">
                <input type="hidden" name="artic" value="articulo 2">
                <input type='submit' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 3">
            <img src='./Artic3.jpg'>
            <p>Articulo 3</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 3'>
                <input type='hidden' name='precio' value=30>
                <input type='hidden' name='imagen' value="./Artic2.jpg">
                <input type='submit' value='Añadir al carrito'>
            </form>
            <form method="GET" action="Ej5-detalle.php">
                <input type="hidden" name="artic" value="articulo 3">
                <input type='submit' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 4">
            <img src='./Artic4.jpg'>
            <p>Articulo 4</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 4'>
                <input type='hidden' name='precio' value='40'>
                <input type='hidden' name='imagen' value="./Artic4.jpg">
                <input type='submit' value='Añadir al carrito'>
            </form>
            <form method="GET" action="Ej5-detalle.php">
                <input type="hidden" name="artic" value="articulo 4">
                <input type='submit' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 5">
            <img src='./Artic5.jpg'>
            <p>Articulo 5</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 5'>
                <input type='hidden' name='precio' value='50'>
                <input type='hidden' name='imagen' value="./Artic5.jpg">
                <input type='submit' value='Añadir al carrito'>
            </form>
            <form method="GET" action="Ej5-detalle.php">
                <input type="hidden" name="artic" value="articulo 5">
                <input type='submit' value='Ver detalle'>
            </form>
            <p>______________________________________</p>

        </div>
    </div>
    <?php
    if (isset($_SESSION["Carrito"])) {
        echo "<div class='Carrito'>";
        echo "<h2>Carrito</h2>";
        for ($i = 1; $i <= sizeof($_SESSION["Carrito"]); $i++) {
            echo "
                    <div class='".$_GET["articulo"]."'>
                        <img src='".$_GET["imagen"]."'>
                        <p>".$_GET["articulo"]."</p>
                        <p>Numero de unidades: ".$_SESSION["unidades".$i]."</p>
                    </div>
                    ";
        }
        echo "<p>Precio total: " . $_SESSION["PrecioTotal"] . "</p>";
        echo "</div>";
    }
    /* session_destroy(); */
    ?>
</body>

</html>