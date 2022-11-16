<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de usuarios</title>
</head>
<style>
    table tr:nth-child(even){
        background-color:rgba(190,190,190,.3);
    }
    table{
        width: 75%;
        font-family:sans-serif;
        margin: 20px auto 0 auto;
    }

    th{
        font-weight:normal;
    }
</style>
<body>
    <?php 
        //inicio la conexion en un try-catch
        try{$conexion = new PDO("mysql:host=localhost;dbname=banco","usuario","usuario");
        }catch(PDOException $e){print($e);}

        //inserto el registro enviado por el usuario si lo ha enviado
        if(isset($_POST["DNI"])){
            $coincidencia = $conexion->query("SELECT * FROM clientes WHERE DNI='".$_POST["DNI"]."'");
            if($coincidencia->rowCount() > 0){
                header("location: Ej1ValidarRegistro.php");
            }else{
                //aqui realiza la operacion de insercion
                $insercion = "INSERT into clientes VALUES(
                    '".$_POST["DNI"]."','".$_POST["Nombre"]."','".$_POST["Direccion"]."','".$_POST["Telefono"]."'
                    )";
                $conexion->exec($insercion);
                header("location: Ej1.php");
            }
        }

        //modifico el registro seleccionado
        if(isset($_POST["DNINuevo"])){
            $Modificar = "UPDATE clientes set 
            DNI = '".$_POST["DNINuevo"]."',
            Nombre='".$_POST["NombreNuevo"]."',
            Direccion='".$_POST["DireccionNuevo"]."',
            Telefono='".$_POST["TelefonoNuevo"]."' 
            WHERE DNI='".$_POST["DNIModificar"]."'";
            $conexion->exec($Modificar);
            header("location:Ej1.php");
        }

        //Elimino el registro selecionado
        if(isset($_POST["Eliminar"])){
            $Eliminar = "DELETE from clientes WHERE DNI='".$_POST["DNIBorrar"]."'";
            $conexion->exec($Eliminar);
            header("location:Ej1.php");
        }

        //almaceno la consulta de conexion en la variable consulta para mostrar la tabla
        $consulta = $conexion -> query("SELECT * FROM clientes;");
    ?>
    <!--Muestro la tabla-->
    <table>
        <tr><th colspan="6"><h3>Mantenimiento de clientes</h3></th></tr>
        <tr>
            <th><b>DNI</b></th>
            <th><b>Nombre</b></th>
            <th><b>Direccion</b></th>
            <th><b>Telefono</b></th>
            <th></th>
            <th></th>
        </tr>
        <?php
            while($cliente = $consulta-> fetchObject()){
                echo "
                <tr>
                    <th>".$cliente->DNI."</th>
                    <th>".$cliente->Nombre."</th>
                    <th>".$cliente->Direccion."</th>
                    <th>".$cliente->Telefono."</th>
                    <th>
                        <form method='post' action='Ej1ModificarDatos.php'>
                            <input type='hidden' name='Modificar'>
                            <input type='hidden' name='DNIModificar' value='".$cliente->DNI."'>
                            <input type='hidden' name='NombreModificar' value='".$cliente->Nombre."'>
                            <input type='hidden' name='DireccionModificar' value='".$cliente->Direccion."'>
                            <input type='hidden' name='TelefonoModificar' value='".$cliente->Telefono."'>
                            <input type='submit' value='Modificar'>
                        </form>
                    </th>
                    <th>
                        <form method='post' action='Ej1.php'>
                            <input type='hidden' name='Eliminar'>
                            <input type='hidden' name='DNIBorrar' value='".$cliente->DNI."'>
                            <input type='submit' value='Eliminar'>
                        </form>
                    </th>
                </tr>";
            }
        ?>
        <tr>
            <form action="Ej1.php" method="post">
                <th><input type="text" name="DNI" minlenght=9 maxlenght=9 required></th>
                <th><input type="text" name="Nombre" maxlenght=25 required></th>
                <th><input type="text" name="Direccion" maxlenght=25 required></th>
                <th><input type="text" name="Telefono" minlenght=9 maxlenght=9 required></th>
                <th colspan=2><input type="submit" value="Añadir"></th>
            </form>
        </tr>
    </table>
    
    <?php 
    //cierro la conexion al final
    $conexion = null;
    ?>
</body>
</html>