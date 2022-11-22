<?php
    //inicio la session y la destruyo en caso de querer vaciar el carrito
    session_start();
    if(isset($_POST["VaciarCarrito"])){
        session_destroy();
        session_start();
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
    <?php
        //si existe el array de sesion productos insertale el producto, y si no existe crealo antes
        if(isset($_POST["ProductoCodigo"])){
            
            if(!isset($_SESSION["Productos"])){
                //productos va a ser un array que por cada producto contendrá su codigo y las unidades
                //que el cliente compra. un array bidimensional
                $_SESSION["Productos"] = array();
            }
            //*si el producto ya ha sido metido al carrito sumale 1 a las unidades. Si no, añadelo con un push

            //*añadele un nuevo campo llamado unidades e inicializalo siempre en 1 en caso de que no exista
            if(in_array($_SESSION["Productos"],$_POST["ProductoCodigo"])){
            }else{
                $_SESSION["Productos"][] = $_POST["ProductoCodigo"];
            }
            
        }
    ?>

<style>
    table{
        display:block;
        margin:0 auto;
        width:fit-content;
    }
    tr{
        background-color:rgba(190,190,190,.3);
    }
    th{
        padding:5px 20px 5px 20px;
        font-family: sans-serif;
        font-weight:lighter;
    }

    tr:nth-child(1) > th,tr:nth-child(2) > th{
        font-weight:bold;
        background-color:rgba(190,190,190,.7);
    }

    tr:nth-child(1) > th{
        font-size:1.7em;
    }

    img{
        width:200px;
        height:100px;
    }
</style>

<body>
    <?php
        //inicio la conexion en un try-catch
            try{$conexion = new PDO("mysql:host=localhost;dbname=tiendaphp","usuario","usuario");
            }catch(PDOException $e){print($e);}

        //almaceno la tabla de productos en una variable
            $consulta1 = $conexion->query("SELECT * FROM productos");
    ?>

    <table>
        <tr><th colspan=8>Tienda online</th></tr>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th colspan=2></th>
        </tr>
        <?php
            while($producto = $consulta1 -> fetchObject()){
                echo "
                <tr>
                    <th>".$producto->Codigo."</th>
                    <th>".$producto->Nombre."</th>
                    <th><img src='".$producto->Imagen."'></th>
                    <th>".$producto->Descripcion."</th>
                    <th>".$producto->Precio."€</th>
                    <th>".$producto->Stock."</th>
                    <th>
                        <form method='post' action='Ej3.php'>
                            <input type='hidden' name='ProductoCodigo' value='".$producto->Codigo."'>
                            <input type='submit' value='Añadir al carrito'>
                        </form>
                    </th>
                </tr>";
            }
        ?>
    </table>

    <?php
        if(isset($_SESSION["Productos"])){
    ?>
            <table>
                <tr><th colspan=7>Cesta de productos</th></tr>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                </tr>
                <?php
                    for ($i=0; $i < count($_SESSION["Productos"]); $i++) { 
                        $consultaProducto = $conexion->query("SELECT * from productos where Codigo = '".$_SESSION["Productos"][$i]."'");
                        while($producto = $consultaProducto -> fetchObject()){
                            echo "
                            <tr>
                                <th>".$producto->Codigo."</th>
                                <th>".$producto->Nombre."</th>
                                <th><img src='".$producto->Imagen."'></th>
                                <th>".$producto->Descripcion."</th>
                                <th>".$producto->Precio."</th>
                            </tr>";
                        } 
                    }
                ?>
                <tr>
                    <th colspan=8>
                        <form action="Ej3.php" method='post'>
                            <input type="hidden" name="VaciarCarrito">
                            <input type="submit" value="Vaciar Carrito">
                        </form>
                    </th>
                </tr>
            </table>
    <?php
        }
    ?>
</body>
</html>