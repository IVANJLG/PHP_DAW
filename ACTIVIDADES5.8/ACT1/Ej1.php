<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>img{width:40px}</style>
<body>
    <?php
        //si el array aun no se ha inicializado, crea un array con 100 ceros
        if(!isset($_GET["pos"])){
            $posicion=[];
            for($i=0;$i<100;$i++){
                $posicion[$i]=0;
            }
        }else{
            $posicion = unserialize($_GET["pos"]);
            $contador = $_GET["contador"];
            if($posicion[$contador]==0){
                $posicion[$contador]=1;
            }else{
                $posicion[$contador]=0;
            }
            
        }
    ?>
    <table>
        <?php
        $contador = 0;
            for($i=0;$i<10;$i++){
                echo "<tr>";
                for($j=0;$j<10;$j++){
                    if($posicion[$contador]==1){
                        
                        $pos = serialize($posicion);
                        echo "<th><a href='Ej1.php?pos=$pos&contador=$contador'><img src='Images/ojoabierto.png'></a></th>";
                    }else if($posicion[$contador]==0){
                        
                        $pos = serialize($posicion);
                        echo "<th><a href='Ej1.php?pos=".$pos."&contador=".$contador."'><img src='Images/ojocerrado.png'></a></th>";
                    }
                    $contador++;
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>