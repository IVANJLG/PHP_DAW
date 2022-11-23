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
        font-family:sans-serif;
        font-size:1.5em;
        width:fit-content;
        margin:40px auto;
    }

    th{
        font-weight:lighter;
        padding:30px;
    }

    input{
        width:230px;
        height:2em;
    }
</style>
<body>
    <?php if(isset($_POST["CodigoModificar"])){ ?>
        <table border="1px solid black">
            <form action="Ej4.php" method="post">
                <input type="hidden" name="CodigoModificar" value="<?php echo $_POST["CodigoModificar"];?>">
                <tr><th colspan=2>Modificacion de registro</th></tr>
                <tr>
                    <th>Codigo: </th>
                    <th><input type="text" name="CodigoNuevo" value="<?php echo $_POST["CodigoModificar"];?>" required></th>
                </tr>
                <tr>
                    <th>Descripcion: </th>
                    <th><input type="text" name="DescripcionNuevo" value="<?php echo $_POST["DescripcionModificar"];?>" required></th>
                </tr>
                <tr>
                    <th>Precio Compra: </th>
                    <th><input type="number" name="PCompraNuevo" value=<?php echo $_POST["PCompraModificar"];?> required></th>
                </tr>
                <tr>
                    <th>Precio Venta</th>
                    <th><input type="number" name="PVentaNuevo" value=<?php echo $_POST["PVentaModificar"];?> required></th>
                </tr>
                <tr>
                    <th>Stock</th>
                    <th><input type="number" name="StockNuevo" min=1 value=<?php echo $_POST["StockModificar"];?> required></th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Modificar registro"></th>
                </tr>
            </form>
        </table>
    <?php } ?>
</body>
</html>