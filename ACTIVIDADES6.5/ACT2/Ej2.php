<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th{
        padding:5px;
    }
    table{
        float:left;
        margin-left:20px;
        margin-bottom:20px;
    }
    form{
        clear:both;
        margin-left:20px;
    }
</style>
<body>
    <?php 
        include("../ACT2/controlAcceso.php");

        //pinto las tablas
        imprimeTarjeta(dameTarjeta("usuario"),"usuario");
        imprimeTarjeta(dameTarjeta("administrador"),"administrador");

    ?>
    </div>
    <!--Formulario-->
    <form action="Ej2-b.php" method="get">
        <!--Usuario o admin-->
        <input type="radio" id="usuario" name="usu" value="usuario" required>
        <label for="usuario">Usuario</label>
        <input type="radio" id="administrador" name="usu" value="administrador" required>
        <label for="administrador">Administrador</label>
        <!--valor de casilla-->
        <?php
            $fila = rand(1,5);
            $colum = rand(1,5);
            $columna = "";
            switch($colum){
                case 1: $columna = "A"; break;
                case 2: $columna = "B"; break;
                case 3: $columna = "C"; break;
                case 4: $columna = "D"; break;
                case 5: $columna = "E"; break;
            } 
            echo "<br><br>Introduce el valor de la casilla ".$columna." de la fila ".$fila."<br>";
            echo "<br><input type='text' placeholder='valor en la casilla ".$columna."".$fila."' name='valorCasilla' required>";
            
            //tengo que enviar la fila, columna, el valor que hay en esa casilla, y la tabla
            echo "<input type='hidden' value='".$fila."' name='fila'>";
            echo "<input type='hidden' value='".$colum."' name='columna'>";

        ?>     
        <input type="submit">
    </form>
    
</body>
</html>