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
        background-color:darkcyan;
    }

    h1{
        text-align:center;
        font-family:sans-serif;
    }

    img{
        width:180px;
        padding-left:27%;
        padding-top:5px;
    }

    form, form > input,p{
        margin: 0 auto 0 auto;
        text-align:center;
        padding:10px;
    }

    .Catalogo{
        padding:0 auto 0 auto;
        width:400px;
        height:600px;
        overflow-y:scroll;
        margin-left:23%;
        background-color: cornflowerblue;
        display:inline-block;
    }

    .Carrito{
        padding:0 auto 0 auto;
        width:400px;
        height:600px;
        overflow-y:scroll;
        background-color: cornflowerblue;
        display:inline-block;
        margin-left:20px;
    }
</style>
<body>
    <?php  

        /*
        EJERCICIO 6: 

        Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, 
        cada uno de los productos del catálogo deberá tener un botón Detalle que, al ser accionado, debe 
        llevar al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en 
        cuestión. Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista 
        de detalle.
        */


        session_start();

        /*Si ha comprado cualquier articulo comprueba que la sesion carrito existe. Si no existe, crea un array
        con los valores recogidos y si existe, añadelos al array (con la funcion array_push)*/

        if(isset($_GET["articulo"])){
            if(!isset($_SESSION["Carrito"])){
                $_SESSION["Carrito"] = [];
            }
            if(!isset($_SESSION["PrecioTotal"])){
                $_SESSION["PrecioTotal"] = 0;
            }
            
            $_SESSION["PrecioTotal"] +=
            $_SESSION["Carrito"] = array_push($_SESSION["Carrito"],$_GET["articulo"]);
                
        }
    ?>
    <h1>Tienda de estilografia</h1>
    <div class='Catalogo'>
        <!--Cada articulo se compone de imagen, nombre y boton de Añadir al carrito-->
        <div class="articulo 1">
            <img src='./Artic1.jpg'>
            <p>Articulo 1</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 1'>
                <input type='hidden' name='precio' value=10>
                <input type='submit' value='Añadir al carrito'>
                <input type='button' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 2">
            <img src='./Artic2.jpg'>
            <p>Articulo 2</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 2'>
                <input type='hidden' name='precio' value=20>
                <input type='submit' value='Añadir al carrito'>
                <input type='button' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 3">
            <img src='./Artic3.jpg'>
            <p>Articulo 3</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 3'>
                <input type='hidden' name='precio' value=30>
                <input type='submit' value='Añadir al carrito'>
                <input type='button' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 4">
            <img src='./Artic4.jpg'>
            <p>Articulo 4</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 4'>
                <input type='hidden' name='precio' value='40'>
                <input type='submit' value='Añadir al carrito'>
                <input type='button' value='Ver detalle'>
            </form>
            <p>______________________________________</p>
        </div>
        <div class="articulo 5">
            <img src='./Artic5.jpg'>
            <p>Articulo 5</p>
            <form method='GET' action='Ej5.php'>
                <input type='hidden' name='articulo' value='articulo 5'>
                <input type='hidden' name='precio' value='50'>
                <input type='submit' value='Añadir al carrito'>
                <input type='button' value='Ver detalle'>
            </form>
            <p>______________________________________</p>

        </div>
    </div>
    <?php
        if(isset($_SESSION["Carrito"])){
            echo "<div class='Carrito'>";
            echo "<h2>Carrito</h2>";
                for ($i=1; $i <= sizeof($_SESSION["Carrito"]); $i++) { 
                    echo "
                    <div class='articulo ".$i."'>
                        <img src='./Artic".$i.".jpg'>
                        <p>Articulo ".$i."</p>
                        <p>Numero de unidades: 0</p>
                        <p>Precio: 0</p>
                    </div>
                    ";
                }
            echo "<p>Precio total: ".$_SESSION["PrecioTotal"]."</p>";
            echo "</div>";
        }
        /* session_destroy(); */
    ?>
</body>
</html>