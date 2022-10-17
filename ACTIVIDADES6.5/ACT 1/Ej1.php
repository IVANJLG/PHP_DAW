<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta value="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{font-size:20px;}
    th{
        padding:5px;
    }
</style>
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
    generada para la Primitiva".*/
    ?>

    <table border="1px solid black">
    <tr><th colspan="6">valores no rellenados por el usuario se completaran aleatoriamente</th></tr>
    <form action="Ej1-b.php" method="get">
        <tr>
            <th colspan="6">
                <input type="text" name="nomCombinacion" placeholder="Nombre de la combinacion">
            </th>
        </tr>
        <tr>
            <th>Numero 1</th>
            <th>Numero 2</th>
            <th>Numero 3</th>
            <th>Numero 4</th>
            <th>Numero 5</th>
            <th>Numero 6</th>
        </tr>
        <tr>
            <th><input type="number" min="1" max="49" name="Num0"></th>
            <th><input type="number" min="1" max="49" name="Num1"></th>
            <th><input type="number" min="1" max="49" name="Num2"></th>
            <th><input type="number" min="1" max="49" name="Num3"></th>
            <th><input type="number" min="1" max="49" name="Num4"></th>
            <th><input type="number" min="1" max="49" name="Num5"></th>
        </tr>
        <tr>
            <th colspan="6">Numero de serie: <input type="number" min="1" max="999" name="numSerie"></th>
        </tr>
        <tr>
            <th colspan="6"><input type="submit"></th>
        </tr>         
    </form>
    </table>
</body>
</html>