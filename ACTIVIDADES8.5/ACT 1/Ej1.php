<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Una función (tipo procedimiento, no hay valor devuelto) denominada escribirTresNumeros que 
        reciba tres números enteros como parámetros y proceda a escribir dichos números en tres líneas 
        en un archivo denominado datosEjercicio.txt. Si el archivo no existe, debe crearlo. -->
        <?php
        function escribirTresNumeros($num1,$num2,$num3){
            $fichero = fopen("NumerosEj1.txt","w");
            fwrite($fichero,$num1.PHP_EOL.$num2.PHP_EOL.$num3.PHP_EOL);
            fclose($fichero);
        }

        escribirTresNumeros(8,9,10);

        ?>
    </body>
</html>