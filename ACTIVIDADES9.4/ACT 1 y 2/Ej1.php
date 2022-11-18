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

    .paginas td{
        padding:8px;
        padding-right:5px;
        text-align:center;
        background-color:rgba(150,150,150);
        color:white;
    }

    .paginas a{
        text-decoration:none;
        color:white;
    }

    form{
        width:fit-content;
        margin: 0 auto;
    }
</style>
<!-- 
    SI CON UN ONCLICK EN EL SUBMIT DE ELIMINAR REGISTRO LLAMAS A ESTA FUNCION, LA CONFIRMACION TE LA 
    PIDE VIA JAVASCRIPT CON UNA ALERTA
    <script>
    function Confirmacion(){
        event.preventDefault(); //-> Cancelamos el evento del submit.
        let confirmacion = prompt("¿Esta seguro de que desea continuar? si/no: ");
        console.log(confirmacion=="si");
        if(confirmacion=="si"){
            document.getElementById("DNIBorrar").submit(); //-> Reanudamos el evento del submit.
        }
    }
    </script> 
-->
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
        if(isset($_GET["si"])){
            echo "HAS ESCOGIDO ELIMINAR EL REGISTRO";
            $Eliminar = "DELETE from clientes WHERE DNI='".$_GET["DNIBorrar"]."'";
            $conexion->exec($Eliminar);
            header("location:Ej1.php");
        }

        //almaceno la consulta de conexion en la variable consulta para mostrar la tabla
        $consulta = $conexion -> query("SELECT * FROM clientes;");
        $tamano_pagina = $_SESSION['paginas'];
        $num_total_registros = $consulta->rowCount();
        $total_paginas = ceil($num_total_registros / $tamano_pagina);

        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"];
            $inicio = ($pagina - 1) * $tamano_pagina;
        } else {
            $pagina = 1;
            $inicio = 0;
        }

        $consulta2 = $conexion->query("select * from clientes limit " . $inicio . "," . $tamano_pagina);
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
            while($cliente = $consulta2-> fetchObject()){
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
                        <form method='post' action='Ej1ConfirmarDelete.php' id='DNIBorrar'>
                            <input type='hidden' name='DNIBorrar' value='".$cliente->DNI."'>
                            <input type='submit' value='Eliminar'>
                        </form>
                    </th>
                </tr>";
            }
        ?>
        <!--FORMULARIO AÑADIR REGISTRO-->
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

    <!--TABLA DE PASAR PAGINAS Y NUMERO DE PAGINAS-->
    <table class="paginas">
        <tr>
            <td><a href='Ej1.php?pagina=1'>inicio</a></td>
            <?php
            if ($total_paginas > 1) {
                for ($i = 1; $i <= $total_paginas; $i++) {
                    echo ("<td>");
                    if ($pagina == $i) {
                        //muestro el índice de la página actual, no coloco enlace 
                        echo $pagina;
                    } else {
                        //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página 
                        echo "<a href='Ej1.php?pagina=$i'>$i</a>";
                    }
                    echo ("</td>");
                }
            }
            ?>
            <td><a href='Ej1.php?pagina=<?= $total_paginas ?>'>final</a></td>
            <?php

            ?>

        </tr>
    </table>
    <form class="numPaginas" action="" method="post">
        Registros/página: <input type="number" name="paginas" size="3" value="<?= $tamano_pagina ?>">
        <!-- <input type="submit" value="Actualizar"> -->
    </form>
    <?php 
    //cierro la conexion al final
    $conexion = null;
    ?>
</body>
</html>