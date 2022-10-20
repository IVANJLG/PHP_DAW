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
        /*Dado un párrafo con dos frases (separadas por un punto), contar cuántas palabras
        tiene cada frase.*/

        if(isset($_GET["texto"])){
            $texto = $_GET["texto"];
            if(str_contains($texto,".")){
                $array = explode(".",$texto);
                $lenght1 = sizeof(explode(" ",$array[0]));
                $lenght2 = sizeof(explode(" ",$array[1]));
                echo "Este texto se compone de 2 oraciones separadas por punto. La primera 
                mide ".$lenght1." palabras y el segundo ".$lenght2." palabras";
            }else{
                $lenght = sizeof(explode($texto," "));
                echo "Este texto mide ".$array." palabras.";
            }
        }else{
            echo "
                <form action='Ej5.php' method='get'>
                    <input type='text' name='texto' placeholder='Introduce 2 frases separadas por un punto'>
                    <input type='submit'>
                </form>
            ";
        }
    ?>
</body>
</html>