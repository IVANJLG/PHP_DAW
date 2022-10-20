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
        /*Pedir al usuario una cadena de caracteres e imprimirla invertida. */
        if(isset($_GET["texto"])){
            $texto = $_GET["texto"];
            $array = str_split($texto,1);
            echo "texto original: <br>".$texto."<br>";
            $alreves = "";
            for ($i=sizeof($array)-1; $i >=0 ; $i--) { 
                $alreves = $alreves.$array[$i];
            }
            echo "texto alreves: <br>".$alreves;
        }else{
            echo "
                <form action='Ej9.php' method='get'>
                    <input type='text' name='texto' placeholder='Introduce la palabra a invertir' required>
                    <input type='submit'>
                </form>
            ";
        }
    ?>
</body>
</html>