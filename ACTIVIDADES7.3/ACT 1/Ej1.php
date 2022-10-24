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
        /*
        Escribe un programa que calcule la media de un conjunto de números positivos introducidos por 
        teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará 
        que ha terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.
        */
        session_start();

        if(isset($_SESSION["contador"]) && isset($_POST["Numero"])){
            if($_POST["Numero"]>0){
                $_SESSION["contador"]++;
            }
            echo "CONTADOR NUMEROS: ".$_SESSION["contador"]."<br><br>";
        }else{
            $_SESSION["contador"]=0;
        }
        if(isset($_SESSION["suma"]) && isset($_POST["Numero"])){
            if($_POST["Numero"]>0){
                $_SESSION["suma"]+=$_POST["Numero"];
            }
            echo "SUMA NUMEROS: ".$_SESSION["suma"]."<br><br>";
        }else{
            $_SESSION["suma"]=0;
        }

        if(!isset($_POST["Numero"])){
            echo "
                <form method='post' action='Ej1.php'>
                    Introduce un numero: <input type='number' name='Numero' required><input type='submit'>
                </form>
            ";
        }else{
            if($_POST["Numero"]>=0){
                echo "
                <form method='post' action='Ej1.php'>
                    Introduce un numero: <input type='number' name='Numero' required><input type='submit'>
                </form>
                ";
            }else{
                if($_SESSION["contador"]==0){
                    echo "La media de estos numeros es de 0";
                }else{
                    echo "La media de estos numeros es de: ".($_SESSION["suma"]/($_SESSION["contador"]));
                }
                
            }
        }

        /* session_destroy(); */
    ?>
</body>
</html>