<!-- Ejercicio 2
Realizar una página web para realizar pedidos de comida rápida. Tenemos tres tipos de comida:
Pizza: jamon, atun, bacon, peperoni Hamburguesa: lechuga, tomate, queso Perrito caliente:
lechuga, cebolla, patata A traves de tres formularios distintos, uno para cada tipo de comida se
va añadiendo comida al pedido con sus respectivos ingredientes, hasta que se pulse el botón
finalizar pedido (en otro formulario), con lo que se mostrará el pedido completo en una tabla,
con toda la comida y las opciones de cada una. Usar las función serialize() y unserialize() para
pasar arrays como cadenas Nota: con arrays de 2 dimensiones la serialización se corrompe, así
que hay que usar la función en combinación con otra de la siguiente forma:
$cadenaTexto=base64_encode(serialize($array));
$array=unserialize(base64_decode($cadenaTexto)); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column; font-size: 1em;
    }
    form {margin: 50px 10px;}

    .boton {margin-left: 10px; height: 50px; width: 150px; font-size: 0.8em; border-radius: 5px;}
</style>
<body>
    <h1>Realiza tu pedido<h1>
    <?php 
    if (isset($_REQUEST['array'])){
        $array = $_REQUEST['array'];
    }
    else{
        $array = "";
    }
    ?>
    <h2>PIZZA</h2>
    <form action="Ejercicio2-2.php" method="$_GET">
        
        <input type="hidden" name="tipo" value="Pizza">
        Jamón <input type="checkbox" name="jamon" value="jamon">
        Atún <input type="checkbox" name="atun" value="atun">
        Bacon <input type="checkbox" name="bacon" value="bacon">
        Peperoni <input type="checkbox" name="peperoni" value="peperoni">
        <input type="hidden" name="oculto" value="<?php echo $array?>">
        <input type="submit" value="Añadir al pedido" class="boton">
    </form>

    <h2>HAMBURGUESA</h2>
    <form action="Ejercicio2-2.php" method="$_GET">
    
    <input type="hidden" name="tipo" value="Hamburguesa">
    Lechuga <input type="checkbox" name="lechuga" value="lechuga">
    Tomate <input type="checkbox" name="tomate" value="tomate">
    Queso <input type="checkbox" name="queso" value="queso">
    <input type="hidden" name="oculto" value="<?php echo $array?>">
    <input type="submit" value="Añadir al pedido" class="boton">
    </form>

    <h2>PERRITO</h2>
    <form action="Ejercicio2-2.php" method="$_GET">
        
        <input type="hidden" name="tipo" value="Perrito">
        Lechuga <input type="checkbox" name="lechuga" value="lechuga">
        Cebolla <input type="checkbox" name="cebolla" value="cebolla">
        Patata <input type="checkbox" name="patata" value="patata">
        <input type="hidden" name="oculto" value="<?php echo $array?>">
        <input type="submit" value="Añadir al pedido" class="boton">
    </form>

    <?php 
    if(isset($_REQUEST['array'])){

    ?>
    <form action="Ejercicio2-3.php" method="GET" style="margin-top: 50px;">
        <input type="hidden" name="oculto" value="<?php echo $array?>">
        <input type="submit" value="Hacer pedido">
    </form>
    <?php 
    }
    ?>
</body>
</html>