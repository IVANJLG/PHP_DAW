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
    Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y nos diga
    cuantos números se han introducido, la media de los impares y el mayor de los pares. El número 
    negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye en el 
    cómputo. Utiliza sesiones. 
    */

    session_start();

        if(isset($_SESSION["suma"]) && isset($_POST["Numero"]) && isset($_SESSION["MayorPar"])){
            if($_POST["Numero"]>0 && $_POST["Numero"]%2!=0){
                $_SESSION["suma"]+=$_POST["Numero"];
                $_SESSION["contador"]++;
            }
            if($_POST["Numero"]>$_SESSION["MayorPar"] && $_POST["Numero"]%2==0){
                $_SESSION["MayorPar"] = $_POST["Numero"];
            }

            echo "SUMA NUMEROS IMPARES: ".$_SESSION["suma"]."<br><br>";
            echo "CONTADOR NUMEROS IMPARES: ".$_SESSION["contador"]."<br><br>";
            if($_SESSION["MayorPar"]!=0){
                echo "MAYOR NUMERO PAR: ".$_SESSION["MayorPar"]."<br><br>";
            }
           
        }else{
            $_SESSION["suma"]=0;
            $_SESSION["contador"] = 0;
            $_SESSION["MayorPar"] = 0;
        }

        if(!isset($_POST["Numero"])){
            echo "
                <form method='post' action='Ej2.php'>
                    Introduce un numero: <input type='number' name='Numero' required><input type='submit'>
                </form>
            ";
        }else{
            if($_POST["Numero"]>=0){
                echo "
                <form method='post' action='Ej2.php'>
                    Introduce un numero: <input type='number' name='Numero' required><input type='submit'>
                </form>
                ";
            }else{
                echo "La media de estos numeros es de: ".($_SESSION["suma"]/($_SESSION["contador"]));
            }
        }

        /* session_destroy(); */
    ?>
</body>
</html>