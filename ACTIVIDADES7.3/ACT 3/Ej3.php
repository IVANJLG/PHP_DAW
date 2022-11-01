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
    /*  Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras su suma no
    supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado, el contador de los
    números introducidos y la media. Utiliza sesiones.*/
    session_start();

    if(!isset($_POST["Numero"])){
        echo "
            <form method='post' action='Ej3.php'>
                Introduce un numero: <input type='number' name='Numero' required><input type='submit'>
            </form>
        ";
    }else{
        if(!isset($_SESSION["suma"])){
            $_SESSION["suma"] = 0;
        }

        if($_POST["Numero"]<10000 && $_POST["Numero"]>=0 && $_SESSION["suma"]<10000){
                $_SESSION["suma"]+=$_POST["Numero"];
                echo "LA SUMA DE LOS NUMEROS INTRODUCIDOS ES: ".$_SESSION["suma"];
                echo "
                    <form method='post' action='Ej3.php'>
                        Introduce un numero: <input type='number' name='Numero' required><input type='submit'>
                    </form>
                ";
        }else{echo "LA SUMA DE LOS NUMEROS INTRODUCIDOS ES: ".$_SESSION["suma"]."<br><br>No puedes seguir sumando.";}

    }/* 
    session_destroy(); */
    ?>
</body>
</html>