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
            $texto = $_GET["texto"];
            while(str_contains($texto," ")){

            }
           
            echo "";

        }else{
            echo "<form action='Ej3.php'>
                    <input type='text' name='texto' required>
                    <input type='submit'>
                </form>";
        }
    ?>
</body>
</html>