<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        background:url("Images/gollum.jpg");
        margin: 0 auto 0 auto;
        
    }

    img{
        width:50px;
        margin:-2.8px;
        margin-bottom:-5.4px;
    }

    .visto{
        opacity: 100;
    }

    .oculto{
        opacity: 0;
    }
</style>
<body>
    <?php
        if(!isset($_GET["solucion"])){
            $solucion = [];
            for($i=0 ; $i<100 ; $i++){
                $solucion[$i] = 0;
            }
        }else{
            $solucion = unserialize($_GET["solucion"]);
            $contador = $_GET["contador"];
            if($solucion[$contador] == 0){
                $solucion[$contador] = 1;
            }else{
                $solucion[$contador] = 0;
            }
        }
    ?>
    <table >
        <?php
            $contador = 0;
            for($i=0;$i<10;$i++){
                echo "<tr>";
                for($j=0;$j<10;$j++){
                    if($solucion[$contador] == 0){
                        echo "<th>
                                <a href='Ej3.php?solucion=".serialize($solucion)."&contador=".$contador."'>
                                    <img class='visto' src='Images/oculto.jpg'>
                                </a>
                            </th>";
                    }else{
                        echo "<a href='Ej3.php?solucion=".serialize($solucion)."&contador=".$contador."'><th>
                                    <img class='oculto' src='Images/oculto.jpg'>
                                </a>
                            </th>";
                    }
                    $contador++;
                }
                echo "</tr> ";
            }
        ?>
    </table>
</body>
</html>