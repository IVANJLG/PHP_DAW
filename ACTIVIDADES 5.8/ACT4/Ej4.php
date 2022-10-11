<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        *{
            font-size:1.1em;
        }
        table,th{
            margin: 0 auto 0 auto;
            padding:10px;
            border:1px solid black;
        }

        caption{
            border:1px solid black;
        }

        input[type="text"]{
            width:100%;
        }
    </style>
<body>
    <table>
        <form action="Ej4.php" method="get">
        <caption><h2>Web de citas</h2></caption>
        <tr>
            <th>Nombre</th>
            <th><input type="text" placeholder="nombre" name="nombre"></th>
        </tr>
        <tr>
            <th>Sexo</th>
            <th>
                <input type="radio" id="h" name="sexo" value="h">
                <label>Hombre</label>
                <input type="radio" id="m" name="sexo" value="m">
                <label>Mujer</label>
            </th>
        </tr>
        <tr>
            <th>Orientacion sexual</th>
            <th>
                <input type="radio" id="het" name="orientacion" value="het">
                <label>Heterosexual</label>
                <input type="radio" id="hom" name="orientacion" value="hom">
                <label>Homosexual</label>
                <input type="radio" id="bi" name="orientacion" value="bi">
                <label>Bisexual</label>
            </th>
        </tr>
        <tr>
            <th colspan="2">
                <input type="submit">
            </th>
        </tr>
        </form> 
    </table>

    <?php
        /*Vamos a realizar una página para generar parejas aleatorias según su sexo y orientación sexual.
            Para ello en una primera página pediremos de manera reiterada el nombre, sexo (h o m) y
            orientación (heterosexual, homosexual o bisexual) de personas, que se irán almacenando en
            un array. Se dispondrá además, de un botón para pasar a la segunda página que permite
            generar las parejas aleatorias con las personas introducidas. Esta segunda página debe
            contener tres botones para generar una pareja aleatoria de los siguientes tipos:
            -Heterosexual: Obtendrá aleatoriamente una primera persona de cualquier sexo y orientación
            heterosexual, que unirá con una segunda persona de distinto sexo que sea heterosexual o
            bisexual.
            -Homosexual: Obtendrá aleatoriamente una primera persona de cualquier sexo y orientación
            homosexual, que unirá con otra persona del mismo sexo y orientación.
            -Bisexual: Obtendrá aleatoriamente una primera persona de cualquier sexto y orientación
            bisexual, que unirá con otra persona que sea compatible, el perfil incompatible sería
            homosexual de distinto sexo o heterosexual del mismo sexo.*/


            if(isset($_REQUEST["nombre"]) && isset($_REQUEST["orientacion"]) && isset($_REQUEST["sexo"])){
                $persona = [$_GET["nombre"],$_GET["sexo"],$_GET["orientacion"]];
                $array[0] = $persona;
            }else{
                $array = [];
            }

    ?>
</body>
</html>