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

        if(isset($_GET["NomUsu"]) && isset($_GET["ContraUsu"])){

            $_SESSION["NomUsu"] = $_GET["NomUsu"];
            $_SESSION["ContraUsu"] = $_GET["ContraUsu"];
            //los datos son correctos si ambos miden mas de 6 caracteres y la contraseña no es el nombre
            //de usuario.Esto guarda un booleano en valido


            if(!isset($_SESSION["Valido"])){
                $_SESSION["Valido"] =  (strlen($_SESSION["NomUsu"])>=6 && 
                                        strlen($_SESSION["ContraUsu"])>=6 && 
                                        $_SESSION["ContraUsu"]!=$_SESSION["NomUsu"]);
            }
            if($_SESSION["Valido"]){
                echo "Has iniciado sesion con exito, ".$_SESSION["NomUsu"];
            }else{
                echo "Error al registrarse. Los datos introducidos no son correctos.<br>
                    <form method='post' action='Ej4-logout.php'>
                        <input type='submit' value='Volver'> 
                    </form>
                ";
            }
        }else{
            
            echo "
                <form method='get' action='Ej4.php'>
                    <input type='text' name='NomUsu' placeholder='Nombre del usuario' required>
                    <input type='text' name='ContraUsu' placeholder='Contraseña del usuario' required>
                    <input type='submit'>
                </form>
            ";
        }
    //session_destroy();
    ?>
</body>
</html>