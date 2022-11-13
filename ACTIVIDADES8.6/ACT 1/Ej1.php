<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th{
        border:1px solid black;
    }

    table{
        margin:20px;
    }

    th{
        font-weight:normal;
    }
</style>
<body>
    <?php
        session_Start();
        if(isset($_POST["SessionDestroy"])){
            if(isset($_SESSION["Mascotas"])){
                $Mascotas = fopen("Mascotas.txt","a+");
                fwrite($Mascotas,"#".date("d-F-Y",time())."#\n");
                for ($i=0; $i < count($_SESSION["Mascotas"]); $i++) {
                    fwrite($Mascotas,$_SESSION["Mascotas"][$i]["Nombre"]."-".$_SESSION["Mascotas"][$i]["Tipo"]."-".$_SESSION["Mascotas"][$i]["Edad"]."\n");                    
                }
                fclose($Mascotas);
                session_Destroy();
                session_Start();
            }
        }
        

        if(isset($_POST["Nombre"])){
            if(!isset($_SESSION["Mascotas"])){
                $_SESSION["Mascotas"] = array();
            }
            $nombre = $_POST["Nombre"];
            $tipo = $_POST["Tipo"];
            $edad = $_POST["Edad"];
            //almaceno los valores en un array asociativo y luego lo inserto en la sesion con un push 
            //(o en el elemento vacio del array)
            $mascota = ["Nombre" => $nombre,"Tipo" => $tipo,"Edad" => $edad];
            $_SESSION["Mascotas"][] = $mascota;
        }
    ?>
    
    <table>
        <form method="post" action="Ej1.php">
            <tr><th colspan="3">Datos de la mascota</th></tr>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Edad</th>
            </tr>
            <tr>
                <th><input type="text" name="Nombre" placeholder="Nombre de la mascota" required></th>
                <th><select name="Tipo" id="Tipo">
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                        <option value="Hamster">Hamster</option>
                        <option value="Canario">Canario</option>
                    </select></th>
                <th><input type="number" name="Edad" min="1" max="25" required></th>
            </tr>
            <tr><th colspan="3"><input type="submit" value="Añadir"></th></tr>
        </form>
    </table>
    
    <table>
        <tr><th colspan="3">Mascotas almacenadas</th></tr>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Edad</th>
        </tr>
        <!--Añadir aqui registros mascotas con sesiones-->
        <?php
            if(isset($_SESSION["Mascotas"])){
                for ($i=0; $i < count($_SESSION["Mascotas"]); $i++) { 
                    echo "<tr>";
                    echo "<th>".$_SESSION["Mascotas"][$i]["Nombre"]."</th>";
                    echo "<th>".$_SESSION["Mascotas"][$i]["Tipo"]."</th>";
                    echo "<th>".$_SESSION["Mascotas"][$i]["Edad"]."</th>";
                    echo "</tr>";
                }
            }
        ?>
        <tr>
            <th colspan="3">
                <form action="Ej1.php" method="post">
                    <input type="hidden" name="SessionDestroy" value="">
                    <input type="submit" value="Añadir al fichero">
                </form>
            </th>
        </tr>

    </table>
</body>
</html>