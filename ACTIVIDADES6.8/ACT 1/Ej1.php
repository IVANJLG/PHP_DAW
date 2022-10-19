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
        if(isset($_GET["texto"])){
            echo "<h2>Cadena completa: </h2>";
            $texto = $_GET["texto"];
            $lista = str_split($texto,1);
            for ($i=0; $i < sizeof($lista); $i++) { 
                echo $lista[$i]."<br>";
            }
        }else{
            echo "<form action='Ej1.php'>
                    <input type='text' name='texto' required>
                    <input type='submit'>
                  </form>";
        }
    ?>
    
</body>
</html>