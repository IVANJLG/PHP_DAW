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
        Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de 
        la primera. Para la clase Vehiculo, crea los métodos de clase getVehiculosCreados() 
        y getKmTotales(); así como el método de instancia getKmRecorridos(). Crea también 
        algún método específico para cada una de las subclases. Prueba las clases creadas 
        mediante una aplicación que realice, al menos, las siguientes acciones:
        • Anda con la bicicleta
        • Haz el caballito con la bicicleta
        • Anda con el coche
        • Quema rueda con el coche
        • Ver kilometraje de la bicicleta
        • Ver kilometraje del coche
        • Ver kilometraje total
    -->

    <?php
        include_once "Vehiculo.php";
        include_once "Coche.php";
        include_once "Bicicleta.php";

        $bici1 = new bicicleta();
        $coche1 = new coche();

        echo "La bici ha avanzado ".$bici1->getKilometraje()." kilometros<br><br>";
        echo "El coche ha avanzado ".$coche1->getKilometraje()." kilometros";

        echo "<br><br>Se han creado ".vehiculo::getVehiculosCreados()." vehiculos";
        echo "<br><br>Se han avanzado en total ".vehiculo::getKmTotales()." kilometros.<br><br>";

        $coche1->andaCoche(17);
        echo "La bici ha avanzado ".$bici1->getKilometraje()." kilometros<br><br>";
        echo "El coche ha avanzado ".$coche1->getKilometraje()." kilometros";
        echo "<br><br>Se han avanzado en total ".vehiculo::getKmTotales()." kilometros.<br><br>";
    ?>
</body>
</html>