<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php include 'css/estiloListado.css'; ?>
    </style>
    <title>Listado de productos</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="7">Listado de productos</th>
        </tr>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th colspan="3"></th>
        </tr>
    <?php foreach($data["productos"] as $producto){
    //aqui mostramos en formato los productos ?>
        <tr>
            <td><?php echo $producto->getCodigo();?></td>
            <td><?php echo $producto->getNombre();?></td>
            <td><?php echo $producto->getPrecio();?></td>
            <td><?php echo $producto->getStock();?></td>
            <form action="../Controller/ProcesaProductos.php" method="post">
                <input type="hidden" name="AddCarrito">
                <td><input type="submit" value="Añadir al carrito"></td>
            </form>
            <!--SUMAR AL STOCK-->
            <form action="../Controller/ProcesaProductos.php" method="post">
                <input type="hidden" name="Reponer">
                <td><input type="submit" value="Reponer"></td>
            </form>
            <form action="../Controller/ProcesaProductos.php" method="post">
                <input type="hidden" name="Borrar">
                <td><input type="submit" value="BorrarProducto"></td>
            </form>
            
        </tr>
    <?php }?>
    </table>
</body>
</html>