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
        /*Una función denominada obtenerSuma (tipo función, devolverá un valor numérico) que reciba 
        una ruta de archivo como parámetro, lea los números existentes en cada línea del archivo, y 
        devuelva la suma de todos esos números.*/

        function obtenerSuma($rutaArchivo){
            $fichero = fopen($rutaArchivo,"r");
            $suma = "";
            while(feof($fichero)){
                $suma+=fgets($fichero);
            }
            
            fclose($fichero);
            return $suma;
        }

        echo obtenerSuma("../ACT 1/NumerosEj1.txt");
    ?>
</body>
</html>