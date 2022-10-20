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
        /*Verificar si en una frase se encuentra una determinada palabra pedida al usuario */
        if(isset($_GET["texto"])){
            if(str_contains($_GET["texto"],$_GET["palabra"])){
                echo "Esa palabra aparece en el texto.";
            }else{
                echo "No se ha encontrado la palabra en el texto.";
            }
        }else{
            echo "
                <form action='Ej6.php' method='get'>
                    <input type='text' name='texto' placeholder='Introduce un texto en el que buscar una cadena' required>
                    <input type='text' name='palabra' placeholder='Introduce la cadena que deseas encontrar' required>
                    <input type='submit'>
                </form>
            ";
        }
    ?>
</body>
</html>