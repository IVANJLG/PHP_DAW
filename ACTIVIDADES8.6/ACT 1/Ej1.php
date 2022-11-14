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
            $Hoy = date("d-F-Y",time());
            if(isset($_SESSION["Mascotas"])){
                $Mascotas = fopen("Mascotas.txt","a+");
                /*Con un bucle leo el valor de la ultima linea escrita. Si la 
                ultima fecha escrita es la de hoy, no la escribas*/
                while(!feof($Mascotas)){
                    /*si la linea empieza con # significa que es una fecha, por tanto, guarda su valor
                    en la variable UltimaFecha. Ira machacando el valor de la variable hasta llegar
                    a la ultima fecha*/
                    $Line = fgets($Mascotas);
                    if(!isset($ultimaLinea)){
                        $ultimaLinea = "";
                    }
                    if(str_starts_with($Line,"#")){
                        $ultimaLinea = $Line;
                        
                    }
                }
                var_dump($ultimaLinea);
                var_dump("#".date("d-F-Y",time())."#".PHP_EOL);

                if($ultimaLinea != "#".date("d-F-Y",time())."#".PHP_EOL){
                    fwrite($Mascotas,"#".date("d-F-Y",time())."#".PHP_EOL);
                }
                //una vez ya escrita la fecha, con un bucle introduce a las mascotas
                for ($i=0; $i < count($_SESSION["Mascotas"]); $i++) {
                    fwrite($Mascotas,$_SESSION["Mascotas"][$i]["Nombre"]."-".$_SESSION["Mascotas"][$i]["Tipo"]."-".$_SESSION["Mascotas"][$i]["Edad"].PHP_EOL);                    
                }
                //cierra el fichero, luego la sesion y luego iniciala de nuevo
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