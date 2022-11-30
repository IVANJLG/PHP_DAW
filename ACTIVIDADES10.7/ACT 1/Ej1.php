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
    Confeccionar una clase Empleado con los atributos nombre y sueldo.
Definir un método “asigna” que reciba como dato el nombre y sueldo y actualice los atributos (debe comprobar
que el nombre recibido coincide con el atributo nombre y si es así actualiza el atributo sueldo con el sueldo
recibido).
    Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo
supera a 3000 paga impuestos).
    -->

    <?php 
        include_once "Empleado.php";

        $empleado1 = new Empleado("Pedro",1500);
        
        echo $empleado1."<br><br>Probamos a asignar un sueldo a un empleado incorrectamente: <br><br>";
        $empleado1->asigna("Roberto",2000);

        echo "<br><br>Probamos a asignar un sueldo a un empleado correctamente: <br><br>";
        $empleado1->asigna("Pedro",3100);
        echo "<br><br>".$empleado1;
    ?>
</body>
</html>