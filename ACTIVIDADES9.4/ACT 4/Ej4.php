<?php
    session_start();
    if (!isset($_SESSION['paginas'])) {
        $_SESSION['paginas'] = 5;
    }
    if (isset($_POST['paginas'])) {
        $_SESSION['paginas'] = $_POST['paginas'];
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
    ?>
</head>
<body>
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
            <th colspan=4></th>
        </tr>
        <!--A partir de aqui pintamos los valores de la tabla productos con un bucle-->
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
                    <input type="submit" value="Eliminar">
                </form>
            </th>
            <th>
                <form action="Ej4.php" method="post">
                    <input type="hidden" name="Modificar">
                    <input type="submit" value="Modificar">
                </form>
            </th>
            <th>
                <form action="Ej4.php" method="post">
                    <input type="hidden" name="Entrada">
                    <input type="submit" value="Entrada">
                </form>
            </th>
            <th>
                <form action="Ej4.php" method="post">
                    <input type="hidden" name="Salida">
                    <input type="submit" value="Salida">
                </form>
            </th>
        </tr>        
        <?php } ?>
    </table>
    <!--En esta tabla de una fila están las opciones de pasar paginas-->
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
</body>
</html>