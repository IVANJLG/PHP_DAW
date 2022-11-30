<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Creamos la clase factura con el atributo de clase IVA (21) y los atributos de instancia 
    ImporteBase, fecha, estado (pagada o pendiente) y productos (array con todos los productos 
    de la factura, que contiene el nombre, precio y cantidad).
        Define los métodos AñadeProducto, ImprimeFactura y los getters y setters de los atributos 
    ImporteBase (solo getter, pues su contenido se actualiza automaticamente), fecha y estado.
    -->

    <?php
        include_once "Factura.php";
        $factura1 = new factura();

        $factura1->AnadeProducto("Calculadora",15,2);
        $factura1->AnadeProducto("Ordenador hp",750,1);
        $factura1->AnadeProducto("Machete 60cm",65,3);
        $factura1->AnadeProducto("Filetes de lomo bandeja 6kg",30,2);

        echo $factura1->ImprimeFactura();

    ?>
</body>
</html>