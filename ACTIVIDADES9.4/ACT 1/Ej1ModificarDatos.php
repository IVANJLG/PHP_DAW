<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family:sans-serif;
    }
    th{
        font-weight:normal;
    }
    table{
        margin:40px auto 0 auto;
        border:1px solid black;
        padding:10px;
        height:40vh;
    }
</style>
<body>
    <table>
        <form action="Ej1.php" method="post">
            <tr>
                <th colspan=2>Modificacion de cliente</th>
            </tr>
            <tr>
                <th>DNI</th>
                <th><input type="text" name="DNINuevo" value="<?php echo $_POST["DNIModificar"];?>" required></th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th><input type="text" name="NombreNuevo" value="<?php echo $_POST["NombreModificar"];?>" required></th>
            </tr>
            <tr>
                <th>Direccion</th>
                <th><input type="text" name="DireccionNuevo" value="<?php echo $_POST["DireccionModificar"];?>" required></th>
            </tr>
            <tr>
                <th>Telefono</th>
                <th><input type="text" name="TelefonoNuevo" value="<?php echo $_POST["TelefonoModificar"];?>" required></th>
            </tr>
            <tr>
                <input type='hidden' name='DNIModificar' value="<?php echo $_POST["DNIModificar"];?>">
                <th colspan="2"><input type="submit" value="Modificar registro"></th>
            </tr>
        </form>
    </table>
</body>
</html>