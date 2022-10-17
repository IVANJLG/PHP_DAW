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
        //funciones dameTarjeta(), compruebaClave() e imprimeTarjeta()

        function dameTarjeta($perfil){
            /* a la que se le pasa el perfil y devuelve una matriz correspondiente a la tarjeta 
            de coordenadas de ese perfil*/
            if($perfil=="usuario"){
                return array(
                    array("" ,"A","B","C","D","E"),
                    array("1","A1","A2","A3","A4","A5"),
                    array("2","B1","B2","B3","B4","B5"),
                    array("3","C1","C2","C3","C4","C5"),
                    array("4","D1","D2","D3","D4","D4"),
                    array("5","E1","E2","E3","E4","E5")
                );
            }else if($perfil=="administrador"){
                return array(
                    array("" ,"A","B","C","D","E"),
                    array("1","1A","2A","3A","4A","5A"),
                    array("2","1B","2B","3B","4B","5B"),
                    array("3","1C","2C","3C","4C","5C"),
                    array("4","1D","2D","3D","4D","5D"),
                    array("5","1E","2E","3E","4E","5E")
                );
            }
        }

        function compruebaClave($tarjeta,$fila,$columna,$valor){
            /*a la que se le pasa la matriz de coordenadas,las coordenadas y un valor, y 
            devolverá un booleano según sea correcto el valor en la matriz de coordenadas.*/
            
            //compruebo que en la casilla tarjeta[$fila][$colum]=$valor. Si no, devuelvo falso
            return ($tarjeta[$fila][$columna]==$valor);
        }

        function imprimeTarjeta($tarjeta,$perfil){
            /*recibe una tarjeta y la imprime en una tabla 
            para comprobar el valor de todas las coordenadas.*/
            echo "<table border='1px solid black'>";
            if($perfil=="usuario"){
                echo "<tr><th colspan='6'>Usuario</th></tr>";
            }else if($perfil="administrador"){
                echo "<tr><th colspan='6'>Administrador</th></tr>";
            }
            for ($i=0; $i < sizeOf($tarjeta); $i++) { 
                echo "<tr>";
                for ($j=0; $j < sizeOF($tarjeta[0]); $j++) { 
                    echo "<th>";
                    echo $tarjeta[$i][$j];
                    echo "</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>