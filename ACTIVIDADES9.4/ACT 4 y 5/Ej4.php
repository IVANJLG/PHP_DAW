<?php
    session_start();
    if(isset($_POST["Destruir"])){
        session_destroy();
        session_start();
    }
    if (!isset($_SESSION['paginas'])) {
        $_SESSION['paginas'] = 5;
    }

    if(!isset($_SESSION["Carrito"])){
        $_SESSION["Carrito"] = array();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Ej4.css">
    <?php
        //establezco la conexion con la base de datos
        try{$conexion = new PDO("mysql:host=localhost;dbname=gestisimal","usuario","usuario");
        }catch(PDOException $p){print($e);}

        //almaceno la tabla de productos en una variable
        $consulta1 = $conexion->query("SELECT * FROM productos");

        //hacemos un delete para deshacernos de todos los productos con stock=0
        $borrar = "DELETE from productos where Stock=0";
        $conexion->exec($borrar);

        //con este codigo inicializo y trato las variables para paginar la consulta
        $tamano_pagina = $_SESSION['paginas'];
        $num_total_registros = $consulta1->rowCount();
        $total_paginas = ceil($num_total_registros / $tamano_pagina);
        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"];
            $inicio = ($pagina - 1) * $tamano_pagina;
        } else {
            $pagina = 1;
            $inicio = 0;
        }
        //consulta Paginada
        $consultaPaginada = $conexion->query("SELECT * FROM productos limit  ". $inicio . "," . $tamano_pagina);
    
        /*TRATAMIENTO BOTONES REGISTRO (MODIFICAR ELIMINAR INSERTAR...)*/

        //insertar registro (recogemos valores del formulario y hacemos un insert)
        if(isset($_POST["Codigo"])){
            //compruebo que este codigo no es de un producto ya existente
            $coincidencia = $conexion->query("SELECT * FROM productos WHERE Codigo='".$_POST["Codigo"]."'");
            if($coincidencia->rowCount()>0){
                echo "
                    <script>alert('Este codigo ya se encuentra registrado. Porfavor, pruebe de nuevo.');</script>
                ";
            }else{
                $insertar = "INSERT into productos values(
                    '".$_POST["Codigo"]."',
                    '".$_POST["Descripcion"]."',
                    ".$_POST["PVenta"].",
                    ".$_POST["PCompra"].",
                    ".$_POST["Stock"].")";
    
                $conexion->exec($insertar);
                header("location: Ej4.php");
            }
        }

        //borrar registro (delete from productos where codigo=post[codigo])
        if(isset($_POST["CodigoEliminar"])){
            $eliminar = "DELETE from productos where Codigo = '".$_POST["CodigoEliminar"]."'";
            $conexion->exec($eliminar);
            header("location: Ej4.php");
        }

        //modificar registro (llamar a los datos del formulario de modificacion si existen)
        if(isset($_POST["CodigoNuevo"])){
            //controlar que al modificar los datos no haya cambiado el codigo de producto original
            //por uno ya dado de alta
            $modificar = "UPDATE productos set 
            Codigo='".$_POST["CodigoNuevo"]."',
            Descripcion='".$_POST["DescripcionNuevo"]."',
            PrecioCompra=".$_POST["PCompraNuevo"].",
            PrecioVenta=".$_POST["PVentaNuevo"].",
            Stock=".$_POST["StockNuevo"]." 
            WHERE Codigo='".$_POST["CodigoModificar"]."'";

            $conexion->exec($modificar);
            header("location:Ej4.php");
        }

        //aumentar stock registro (update tabla set x where codigo = post[codigo])
        if(isset($_POST["CodigoEntrada"])){
            $consulta = "SELECT Stock from productos where Codigo = ".$_POST["CodigoSalida"];
            $aumentarStock = "UPDATE productos set stock=stock+".$_POST["Cantidad"]." WHERE Codigo = '".$_POST["CodigoEntrada"]."'";
            $conexion->exec($aumentarStock);
            header("location: Ej4.php");
        }

        //reducir stock registro (update tabla set x where codigo = post[codigo])
        if(isset($_POST["CodigoSalida"])){
            //compruebo que el usuario no intente sacar mas stock del que hay
            $consultaStock = $conexion->query("SELECT Stock from productos where Codigo = '".$_POST["CodigoSalida"]."'");
            $producto = $consultaStock->fetchObject();
            if($_POST["Cantidad"]<=$producto->Stock){
                $reducirStock = "UPDATE productos set Stock=Stock-".$_POST["Cantidad"]." WHERE Codigo = '".$_POST["CodigoSalida"]."'";
                $conexion->exec($reducirStock);
                header("location: Ej4.php");
            }
        }

        //Añadir producto al carrito
        if(isset($_POST["CodigoCarrito"])){
            $productoCarrito = $conexion->query("SELECT * FROM productos where Codigo = '".$_POST["CodigoCarrito"]."'");
            $Pcarrito = $productoCarrito->fetchObject();
            $PCarro = ["Codigo"=>$Pcarrito->Codigo,
            "Descripcion"=>$Pcarrito->Descripcion,
            "PCompra"=>$Pcarrito->PrecioCompra,
            "PVenta"=>$Pcarrito->PrecioVenta,
            "Stock"=>$Pcarrito->Stock,
            "Unidades"=>1
            ];
            if(in_array($_SESSION["Carrito"],$PCarro)){
                $_SESSION["Carrito"][$PCarro]["Unidades"]++;
            }else{
                $_SESSION["Carrito"][]= $PCarro;
            }
            
        }
    ?>
</head>
<body>
    <!--productos consulta paginada-->
    <table>
        <tr>
            <th colspan="10">GESTISIMAL</th>
        </tr>
        <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio de compra</th>
            <th>Precio de venta</th>
            <th>Margen</th> <!--MARGEN = P.VENTA - P.COMPRA-->
            <th>Stock</th>
            <th colspan=5></th>
        </tr>
        
        <?php
            while($cliente = $consultaPaginada -> fetchObject()){
                //aqui pintamos cada registro
        ?>
        <tr>
            <th><?php echo $cliente->Codigo;?></th>
            <th><?php echo $cliente->Descripcion;?></th>
            <th><?php echo $cliente->PrecioCompra;?></th>
            <th><?php echo $cliente->PrecioVenta;?></th>
            <th><?php echo $cliente->PrecioVenta-$cliente->PrecioCompra;?></th>
            <th><?php echo $cliente->Stock;?></th>
            <th>
                <form action="Ej4.php" method="post">
                    <input type="hidden" name="Eliminar">
                    <input type="hidden" name="CodigoEliminar" value="<?php echo $cliente->Codigo;?>">
                    <input type="submit" value="Eliminar">
                </form>
            </th>
            <th>
                <form action="Ej4Modificar.php" method="post">
                    <input type="hidden" name="Modificar">
                    <input type="hidden" name="CodigoModificar" value="<?php echo $cliente->Codigo;?>">
                    <input type="hidden" name="DescripcionModificar" value="<?php echo $cliente->Descripcion;?>">
                    <input type="hidden" name="PCompraModificar" value="<?php echo $cliente->PrecioCompra;?>">
                    <input type="hidden" name="PVentaModificar" value="<?php echo $cliente->PrecioVenta;?>">
                    <input type="hidden" name="StockModificar" value="<?php echo $cliente->Stock;?>">
                    <input type="submit" value="Modificar">
                </form>
            </th>
            <th>
                <form action="Ej4.php" method="post">
                    <input type="hidden" name="Entrada">
                    <input type="number" min=1 name="Cantidad" required>
                    <input type="hidden" name="CodigoEntrada" value="<?php echo $cliente->Codigo;?>">
                    <input type="submit" value="Entrada">
                </form>
            </th>
            <th>
                <form action="Ej4.php" method="post">
                    <input type="hidden" name="Salida">
                    <input type="number" min=1 name="Cantidad" required>
                    <input type="hidden" name="CodigoSalida" value="<?php echo $cliente->Codigo;?>">
                    <input type="submit" value="Salida">
                </form>
            </th>
            <th>
                <form action="Ej4.php" method="post">
                    <input type="hidden" name="CodigoCarrito" value="<?php echo $cliente->Codigo;?>">
                    <input type="submit" value="Añadir al carrito">
                </form>
            </th>
        </tr>        
        <?php }?>
    </table>

    <!--opciones para pasar paginas-->
    <table class="paginas">
        <tr>
            <td><a href='Ej4.php?pagina=1'>inicio</a></td>
            <?php
            if ($total_paginas > 1) {
                for ($i = 1; $i <= $total_paginas; $i++) {
                    echo ("<td>");
                    if ($pagina == $i) {
                        //muestro el índice de la página actual, no coloco enlace 
                        echo $pagina;
                    } else {
                        //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página 
                        echo "<a href='Ej4.php?pagina=$i'>$i</a>";
                    }
                    echo ("</td>");
                }
            }
            ?>
            <td><a href='Ej4.php?pagina=<?= $total_paginas ?>'>final</a></td>
        </tr>
    
    </table>

    <!--formulario insercion de articulos-->
    <table>
        <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio Compra</th>
            <th>Precio Venta</th>
            <th>Stock</th>
            <th></th>
        </tr>
        <tr>
            <form action="Ej4.php" method="post">
                <th><input type="text" name="Codigo" placeholder="Codigo" required></th>
                <th><input type="text" name="Descripcion" placeholder="Descripcion" required></th>
                <th><input type="number" name="PCompra" min=1 placeholder="Precio de compra" required></th>
                <th><input type="number" name="PVenta" min=1 placeholder="Precio de venta" required></th>
                <th><input type="number" name="Stock" min=1 placeholder="Stock" required></th>
                <th><input type="submit" value="Añadir articulo"></th>
            </form>
        </tr>
    </table>

    <!--carrito con productos-->
    <table>
        <tr>
            <th colspan="5">Carrito Productos</th>
        </tr>
        <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio Compra</th>
            <th>Precio Venta</th>
            <th>Stock</th>
            <th>Unidades</th>
        </tr>
        <?php
            for ($i=0; $i < count($_SESSION["Carrito"]); $i++) { 
        ?>
            <tr>
                <th><?php echo $_SESSION["Carrito"][$i]["Codigo"];?></th>
                <th><?php echo $_SESSION["Carrito"][$i]["Descripcion"];?></th>
                <th><?php echo $_SESSION["Carrito"][$i]["PCompra"];?></th>
                <th><?php echo $_SESSION["Carrito"][$i]["PVenta"];?></th>
                <th><?php echo $_SESSION["Carrito"][$i]["Stock"];?></th>
                <th><?php echo $_SESSION["Carrito"][$i]["Unidades"];?></th>
            </tr>
        <?php } ?>
            <tr>
                <th colspan=6>
                    <form action="Ej4.php" method="post">
                        <input type="hidden" name="Destruir">
                        <input type="submit" value="Vaciar carrito">
                    </form>
                </th>
            </tr>
    </table>

    <?php 
    //cierro la conexion al final
    $conexion = null;
    ?>
</body>
</html>