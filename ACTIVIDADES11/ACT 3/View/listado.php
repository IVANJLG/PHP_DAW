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
        <form action="../Controller/ProcesaProductos.php" method="post"></form>
        <tr>
            <th colspan="6">Listado de productos</th>
        </tr>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th colspan="2"></th>
        </tr>
    <?php foreach($data["productos"] as $producto){
    //aqui mostramos en formato los productos ?>
        <tr>
            <td><?php echo $producto->getCodigo();?></td>
            <td><?php echo $producto->getNombre();?></td>
            <td><?php echo $producto->getPrecio();?></td>
            <td><?php echo $producto->getStock();?></td>
            <td><input type="button" value="Añadir al carrito"></td>
            <td><input type="button" value="Reponer"></td>
        </tr>
    <?php }?>
    </table>
</body>
</html>