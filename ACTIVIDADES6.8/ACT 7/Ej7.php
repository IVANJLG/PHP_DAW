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
        /*Pedir un string al usuario e imprimir todos los números seguidos y sin espacios,
        correspondientes al código ascii de cada uno de sus caracteres. Posteriormente
        calcular la frase original a partir de dichos números (usar un array).*/

        if(isset($_GET["texto"])){
            $numeros = $_GET["texto"];
            //divido el array por lo que en caracteres equivale a espacios en ascii
            $array = explode("32",$numeros);

            $textoFinal = "";
            for ($i=0; $i < count($array); $i++) { 
               /* echo $array[$i]."<br>"; */
               
            }
        }else{
            echo "
                <form action='Ej7.php' method='get'>
                    <input type='numer' min='32' name='texto' placeholder='Introduce una cadena de numeros en ascii sin espacios' required>
                    <input type='submit'>
                </form>
            ";
        }

    ?>
</body>
</html>