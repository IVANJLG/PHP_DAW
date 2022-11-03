<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img{
        width:20px;
        display:inline-block;
    }
</style>
<body>
    <h2>Hay corrupcion en el gobierno?</h2>

    <?php
        if(isset($_GET["si"])){
            if(!isset($_SESSION["contadorSi"])){
                $_SESSION["contadorSi"] = 1;
            }else{
                $_SESSION["contadorSi"]++;
            }
            echo "<h2>SI</h2>";
            for ($i=0; $i < $_SESSION["contadorSi"]; $i++) { 
                echo "<img src='./Punto_azul.png'>";
            }
        }
        if(isset($_GET["no"])){
            if(!isset($_SESSION["contadorNo"])){
                $_SESSION["contadorNo"] = 1;
            }else{
                $_SESSION["contadorNo"]++;
            }
            echo "<h2>NO</h2>";
            for ($i=0; $i < $_SESSION["contadorNo"]; $i++) { 
                echo "<img src='./Punto_rojo.png'>";
            }
        }
    ?>
    <form action="Ej2.php" method="get">
        <input type="hidden" name="si" value="si">
        <input type="submit" value="si">
    </form>
    <form action="Ej2.php" method="get">
    <input type="hidden" name="no" value="no">
        <input type="submit" value="no">
    </form>
    <?php
    /* Crear una página que simula una encuesta. Se realizará una pregunta, con dos botones para responder, cada
    vez que se pulse un botón se irán contabilizando (usa sesiones) los votos y actualizando una barra que muestre
    el número de votos de cada respuesta. Este resultado se irá almacenando también en una cookie, de manera que
    si se cierra el navegador, al abrir la página de nuevo se mostrarán los resultados hasta el momento en que se
    cerró. Crear la cookie para 3 meses. */


    ?>
</body>
</html>