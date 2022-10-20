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
    /*Escribir un programa que dado un texto de un telegrama que termina en punto:
        a. contar la cantidad de palabras que posean más de 10 letras
        b. reportar la cantidad de veces que aparece cada vocal
        c. reportar el porcentaje de espacios en blanco.
        d. Nota: Las palabras están separadas por un espacio en blanco.
    */

    if(isset($_GET["texto"])){
        $texto = $_GET["texto"];
        $palabras = explode(" ",$texto);
        $numPalabrasmasde10 = 0;
        for ($i=0; $i < sizeof($palabras); $i++) { 
            if(sizeof(str_split($palabras[$i],1))>10){
                $numPalabrasmasde10++;
            }
        }
        echo "En este texto hay ".$numPalabrasmasde10." palabras que miden mas de 10 caracteres<br>";
        $vocales = str_split($texto,1);
        $countvocales = 0;
        $espacios = sizeof($palabras)-1;
        $espaciosPorciento = round($espacios*100/sizeof($vocales));
        for ($i=0; $i < sizeof($vocales); $i++) { 
            if($vocales[$i]=="a" || $vocales[$i]=="e" || $vocales[$i]=="i" 
            || $vocales[$i]=="o" || $vocales[$i]=="u"){
                $countvocales++;
            }

            if($vocales[$i]==" "){

            }
        }
        echo "En este texto hay ".$countvocales." vocales y su porcentaje de espacios es ".$espaciosPorciento."%";



    }else{
        echo "
            <form action='Ej12.php' method='get'>
                <input type='text' name='texto' placeholder='Introduce un texto que termine en punto' required>
                <input type='submit'>
            </form>
        ";
    }
    ?>
</body>
</html>