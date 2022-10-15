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
        /* 
            Crear una página web para generar de manera aleatoria una combinación de apuesta en la lotería 
        primitiva. Se pedirán 6 números (entre 1 y 49) y el número de serie (entre 1 y 999). El usuario 
        podrá rellenar los números pedidos que desee, dejando en blanco el resto, de modo que la 
        combinación generada respete los números elegidos y genere aleatoriamente el resto hasta completar 
        la combinación (el número de serie también es opcional). El usuario también podrá rellenar de 
        manera opcional una caja de texto como título para su combinación.Usar una función combinacion() 
        que sea llamada para generar la combinación en función de los parámetros recibidos y devuelva 
        el array generado.
            Usar una función imprimeApuesta() que reciba un array y un texto, e imprima en una tabla html 
        con el formato que quieras, el array generado con el texto de cabecera, para mostrar el resultado 
        de la combinación generada.Si la función no recibe ningún texto como cabecera imprimirá "Combinación 
        generada para la Primitiva".
        */

        /*1-Crear una funcion combinacion, en la que se revise uno por uno si el formulario ha enviado 
        valores con un isset, y en caso falso, rellenarlos aleatoriamente con una funcion.*/

        //funcion para recoger los valores de la primitiva y rellenar los que el usuario deje en blanco:
        function combinacion(){
            $combinacion = [];
            for ($i=0; $i < 6; $i++) {
                $combinacion[$i] = rand(1,49);
                    if($_GET["Num".$i]!=null){
                        $combinacion[$i]=$_GET["Num".$i];
                    }
            }

            $combinacion[6] = rand(1,999); 
            if($_GET["numSerie"]!=null){
                $combinacion[6] = $_GET["numSerie"];
            }

            $combinacion[7] = "Combinación generada para la Primitiva";
            if($_GET["nomCombinacion"]!=null){
                $combinacion[7] = $_GET["nomCombinacion"];
            }
            return $combinacion;
        }

        function imprimeApuesta($combinacion,$titulo){
            echo 
            "<table border='1px solid black'>
                <tr>
                    <th colspan='6'>".$titulo."</th>
                </tr>
                <tr>";
                for ($i=1; $i <= 6 ; $i++) { 
                    echo "<th>Numero ".$i."</th>";
                }
            echo "</tr><tr>";
                for ($i=0; $i < 6 ; $i++) { 
                    echo "<th>".$combinacion[$i]."</th>";
                }
            echo "</tr><tr>";
                echo "<th colspan='6'>Numero de serie: ".$combinacion[6]."</th>";
            echo "</tr>";
            echo "</table>";
        }
        
        $combinacion = combinacion();
        imprimeApuesta($combinacion,$combinacion[7]); 
        ?>
    </body>
</html>