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
        $texto = "Tengo una hormiguita en la patita, que me esta
                haciendo cosquillitas y no me puedo aguantar";

        $lista = str_split($texto,1);
        echo "<h2>Lista de vocales: </h2>";
        for ($i=0; $i < sizeof($lista); $i++) { 
            switch($lista[$i]){
                case "a": echo $lista[$i]."<br>"; break;
                case "e": echo $lista[$i]."<br>"; break;
                case "i": echo $lista[$i]."<br>"; break;
                case "o": echo $lista[$i]."<br>"; break;
                case "u": echo $lista[$i]."<br>"; break;
                case "A": echo $lista[$i]."<br>"; break;
                case "E": echo $lista[$i]."<br>"; break;
                case "I": echo $lista[$i]."<br>"; break;
                case "O": echo $lista[$i]."<br>"; break;
                case "U": echo $lista[$i]."<br>"; break;
            }
        }
    ?>
</body>
</html>