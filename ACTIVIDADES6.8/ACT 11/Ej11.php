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
        /*Escribir una clase que lea n caracteres que forman un número romano y que imprima:
        a. si la entrada fue correcta, un string que represente el equivalente decimal
        b. si la entrada fue errónea, un mensaje de error.
        Nota: La entrada será correcta si contiene solo los caracteres M:1000, D:500, C:100,
        L:50, X:10, I:1. No se tendrá en cuenta el orden solo se sumará el valor de cada letra. */

        if(isset($_GET["texto"])){
            //M:1000, D:500, C:100, L:50, X:10, I:1.
            $texto = $_GET["texto"];
            if(!str_contains($texto,"M") && !str_contains($texto,"D") && 
            !str_contains($texto,"C") && !str_contains($texto,"L") && !str_contains($texto,"X") && 
            !str_contains($texto,"I")){
                echo "Este numero no es valido";
            }else{
                $array = str_split($texto,1);
                $resultado = 0;
                for ($i=0; $i < sizeof($array); $i++) {
                    $array[$i] = strtoupper($array[$i]);
                    switch($array[$i]){
                        case "M": $resultado+=1000; break;
                        case "D": $resultado+=500; break;
                        case "C": $resultado+=100; break;
                        case "L": $resultado+=50; break;
                        case "X": $resultado+=10; break;
                        case "I": $resultado+=1; break;
                    }
                }
                echo $resultado;
            }
        }else{
            echo "
                <form action='Ej11.php' method='get'>
                    <input type='text' name='texto' placeholder='Introduce numero en numeros romanos' required>
                    <input type='submit'>
                </form>
            ";
        }
    ?>
</body>
</html>