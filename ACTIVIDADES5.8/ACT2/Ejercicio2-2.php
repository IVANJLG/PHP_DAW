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

    if($_GET['oculto'] == ""){
        $array = array();
    }
    else{
        $arrayCadena = $_GET['oculto'];
        $array = unserialize(base64_decode($arrayCadena));
    }
    array_pop($_GET);
    $array[] = $_GET;
    $arrayCadena = base64_encode(serialize($array));
    header("Location: Ejercicio2.php?array=$arrayCadena");

    /* foreach($_GET as $elemento){
        echo $elemento, " ";
    } */

    /* $lista = [["pizza", "atun", "bacon"], ["pizza", "atun", "bacon", "peperoni"]];
    $lista2 = base64_encode(serialize($lista));
    echo "$lista2<br><br>";
    $lista3 = unserialize(base64_decode($lista2));
    echo var_dump($lista3); */

    /* foreach($array as $pedido){
        foreach($pedido as $comida){
            echo "$comida ";
        }
    }

    header("Refresh:5; url=Ejercicio2.php?array=$arrayCadena"); */

    ?>
</body>
</html>