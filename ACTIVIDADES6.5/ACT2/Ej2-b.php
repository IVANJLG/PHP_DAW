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
        include("../ACT2/controlAcceso.php");
        $fila = $_GET["fila"];
        $columna = $_GET["columna"];
        $valorCasilla = $_GET["valorCasilla"];
        $tarjeta = dameTarjeta($_GET["usu"]);
        echo "Fila: ".$fila." | Columna: ".$columna." | Valor de casilla real: ".$tarjeta[$fila][$columna]." | Valor introducido: ".$valorCasilla;
        if(compruebaClave($tarjeta,$fila,$columna,$valorCasilla)){
            echo "<br><br>Has introducido BIEN la contraseña!";
            echo "<form action='https://www.iesruizgijon.com'><input type='submit' value='Ir a la web'></form>";
        }else{
            echo "<br><br>Has introducido MAL la contraseña!";
            echo "<form action='Ej2.php'><input type='submit' value='Volver'></form>";
        }
    ?>
</body>
</html>