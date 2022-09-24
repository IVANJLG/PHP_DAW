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
        $precio1 = $_POST["precio1"];
        $precio2 = $_POST["precio2"];
        $precio3 = $_POST["precio3"];
        $media = ($precio1 + $precio2 + $precio3)/3;
        if($precio1 > $media){
            $diferencia1 = $precio1 - $media;
        }else{
            $diferencia1 = $media - $precio1;
        }
        if($precio2 > $media){
            $diferencia2 = $precio2 - $media;
        }else{
            $diferencia2 = $media - $precio2;
        }
        if($precio3 > $media){
            $diferencia3 = $precio3 - $media;
        }else{
            $diferencia3 = $media - $precio3;
        }
    ?>
    <table border="1px solid black">
        <tr><th colspan="3">CALCULADORA DE MEDIAS</th></tr>
        <tr>
            <th></th>
            <th>PRECIO</th>
            <th>DIFERENCIA CON LA MEDIA</th>
        <tr>
        <tr>
            <th>TIENDA 1</th>
            <th><?php echo $precio1?></th>
            <th><?php echo $diferencia1?></th>
        </tr>
        <tr>
            <th>TIENDA 2</th>
            <th><?php echo $precio2?></th>
            <th><?php echo $diferencia2?></th>
        </tr>
        <tr>
            <th>TIENDA 3</th>
            <th><?php echo $precio3?></th>
            <th><?php echo $diferencia3?></th>
        </tr>
        <tr>
            <th>MEDIA TOTAL</th>
            <th><?php echo $media?></th>
            <th></th>
        </tr>
    </table>
</body>
</html>