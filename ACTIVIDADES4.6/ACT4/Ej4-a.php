<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{margin:5px;}
    th{
        padding:5px;

    }
</style>
<body>
    <table border="1px solid black">
        
        <?php 
            for($i=1 ; $i<=10 ; $i++){
                for($j=1;$j<=7;$j++){
                    $Bloque = $i;
                    $Piso = $j;
                    echo   "<form method='get' action='Ej4-b.php'>
                            <tr>
                                <th>Bloque ".$i."</th>
                                <th>Piso ".$j."</th>
                                <th>
                                    <input type='hidden' name='Bloque' value='".$Bloque."'>
                                    <input type='hidden' name='Piso' value='".$Piso."'>
                                    <input type='submit' value='LLAMAR'></form>
                                </th>
                            </tr>";
                }   
            }
        ?>
        
    </table>
</body>
</html>