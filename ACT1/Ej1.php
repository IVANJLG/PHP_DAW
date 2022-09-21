<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculo del volumen del cilindro</h1>
    <?php
        $h = $_GET["h"];
        $d = $_GET["d"];
        $volumen = pi()*($d/2)*($d/2)*$h;
        echo "el volumen del cilindro es: ",$volumen;
    ?>
    <img src="cilindro Ej1.jpg">
</body>
</html>

