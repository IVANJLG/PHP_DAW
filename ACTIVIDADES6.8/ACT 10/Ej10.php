<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Escribir un programa que pida un nombre (con sus apellidos) y escriba en pantalla
    tanto el nombre con las primeras letras en mayúsculas como las iniciales de dicho
    nombre. */

    if(isset($_GET["texto"])){
        $texto = $_GET["texto"];
        $array = explode(" ",$texto);
        $nombreCompleto = "";
        for ($i=0; $i < sizeof($array); $i++) { 
            $mayusculas = strtoupper(substr($array[$i],0,1));
            $minusculas = strtolower(substr($array[$i],1,sizeof(str_split($array[$i],1))-1));
            $nombreCompleto = $nombreCompleto.$mayusculas.$minusculas." ";
        }
        echo $nombreCompleto;
    }else{
        echo "
            <form action='Ej10.php' method='get'>
                <input type='text' name='texto' placeholder='Introduce nombre y apellidos' required>
                <input type='submit'>
            </form>
        ";
    }
    ?>
</body>
</html>