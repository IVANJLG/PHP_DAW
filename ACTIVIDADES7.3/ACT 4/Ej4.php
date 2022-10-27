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
    Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los programas de
    la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión con un nombre de usuario
    y contraseña correctos.
    */

    session_start();
    if(isset($_SESSION["NomUsu"]) && $_SESSION["Valido"]){
        echo "HAS INICIADO SESION COMO ".$_SESSION["NomUsu"]." CON CONTRASEÑA: ".$_SESSION["ContraUsu"];
    }else if(isset($_SESSION["NomUsu"]) && !$_SESSION["Valido"]){
        echo "USUARIO Y CONTRASEÑA INCORRECTOS";
    }else{
        echo "
            <form method='post' action='Ej4.php'>
                <input type='text' name='NomUsu' placeholder='Nombre de usuario' required>
                <input type='text' name='ContraUsu' placeholder='Contraseña de usuario' required>
                <input type='submit'>
            </form>
        ";
    }
    if(!isset($_SESSION["Valido"])){
        $_SESSION["Valido"] = false;  
    }else{
        /*si el nombre de usuario o la contraseña contienen , . ; o un numero o el 
        usuario mide menos de 6 caracteres o la contraseña menos de 6 no son validos*/

        if(sizeof($_SESSION["NomUsu"])>=6 &&
        sizeof($_SESSION["ContraUsu"])>=6 && 
        !str_contains(",",$_SESSION["NomUsu"]) && 
        !str_contains(".",$_SESSION["NomUsu"]) && 
        !str_contains(";",$_SESSION["NomUsu"]) && 
        !str_contains("1",$_SESSION["NomUsu"]) && 
        !str_contains("2",$_SESSION["NomUsu"]) && 
        !str_contains("3",$_SESSION["NomUsu"]) && 
        !str_contains("4",$_SESSION["NomUsu"]) && 
        !str_contains("5",$_SESSION["NomUsu"]) && 
        !str_contains("6",$_SESSION["NomUsu"]) && 
        !str_contains("7",$_SESSION["NomUsu"]) && 
        !str_contains("8",$_SESSION["NomUsu"]) && 
        !str_contains("9",$_SESSION["NomUsu"]) &&
        !str_contains(".",$_SESSION["ContraUsu"]) &&
        !str_contains(",",$_SESSION["ContraUsu"]) &&
        !str_contains(";",$_SESSION["ContraUsu"]) &&
        !str_contains("1",$_SESSION["ContraUsu"]) &&
        !str_contains("2",$_SESSION["ContraUsu"]) &&
        !str_contains("3",$_SESSION["ContraUsu"]) &&
        !str_contains("4",$_SESSION["ContraUsu"]) &&
        !str_contains("5",$_SESSION["ContraUsu"]) &&
        !str_contains("6",$_SESSION["ContraUsu"]) &&
        !str_contains("7",$_SESSION["ContraUsu"]) &&
        !str_contains("8",$_SESSION["ContraUsu"]) &&
        !str_contains("9",$_SESSION["ContraUsu"])){
            $_SESSION["Valido"]=true;
        }
    }
    ?>
</body>
</html>