<?php
    if(isset($_POST["VaciarCarrito"])){
        
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
    table{
        display:block;
        margin:0 auto;
        width:fit-content;
    }
    th{
        padding:5px 20px 5px 20px;
        font-family: sans-serif;
        font-weight:lighter;
    }

    tr:nth-child(even){
        background-color:rgba(190,190,190,.7);
    }

    tr:nth-child(1) > th,tr:nth-child(2) > th{
        font-weight:bold;
    }

    tr:nth-child(1) > th{
        font-size:1.7em;
    }

    img{
        width:200px;
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
    
</body>
</html>