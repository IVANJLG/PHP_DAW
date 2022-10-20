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
    //Verificar si un string leído por teclado finaliza con la misma palabra que empieza.
    
    if(isset($_GET["texto"])){
        $texto = $_GET["texto"];
        $array = explode(" ",$texto);
        if(strtolower($array[0])==strtolower($array[count($array)-1])){
            echo "Este texto empieza y termina por la misma palabra";
        }else{
            echo "Este texto no empieza por la misma palabra por la que termina";
        }
    }else{
        echo "
            <form method='get' action='Ej4.php'>
                <input type='text' placeholder='Introduce un texto' name='texto'>
                <input type='submit'>
            </form>
        ";
    }
    ?>
</body>
</html>