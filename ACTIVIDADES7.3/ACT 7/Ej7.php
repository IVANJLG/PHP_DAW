<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
        if(isset($_POST["ColorFondo"])){
            //que se guarde durante como maximo 1 año
            setcookie("ColorFondo",$_POST["ColorFondo"],time() + 365*24*3600);
        }
    ?>
    
<style>
    body{
        background-color: <?php echo $_COOKIE["ColorFondo"];?>
    }
</style>
<body>
    
    <form method="post" action="Ej7.php">
        <input type="color" name="ColorFondo">
        <input type="submit">
    </form>
</body>
</html>