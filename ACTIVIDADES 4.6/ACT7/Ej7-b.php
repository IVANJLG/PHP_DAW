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
            margin-top:20px;
        }

        .pintarVerde{
            padding:10px;
            color:green;
        }
        .pintarRojo{
            padding:10px;
            color:red;
        }
        .pintarNegro{
            padding:10px;
        }
        .pintarGris{
            padding:10px;
            color:grey;
        }

    </style>
    <body>
        <!--Tabla para pintar la combinacion ganadora y seleccionada: -->
        <table border="1px solid black">
            <tr>
                <th colspan="6">Combinacion seleccionada</th>
            </tr>
            <?php
                $seleccionado = [];
                $contador = 0;
                for($i=1;$i<=49;$i++){
                    if(isset($_REQUEST[$i])){
                        $seleccionado[$contador]=$_REQUEST[$i];
                        $contador++;
                        echo "<th>".$_REQUEST[$i]."</th>";
                    }
                }
                ?>
            </tr>
            <tr><th colspan="6">Numero de serie seleccionado</th></tr>
            <tr><th colspan="6"><?php echo $_REQUEST["Serie"];?></th></tr>
            <tr>
                <th colspan="6">Combinacion ganadora</th>
            </tr>
            <tr>
             <?php
            //genero los numeros del array ganador y los pinto dentro de una fila de una tabla
                $ganadora = [];
                for($i=0;$i<6;$i++){
                    $ganadora[$i] = rand(1,49);
                }
                    $ganadora[7] = rand(1,999);
                //aqui pinta la tabla
                for($i=0;$i<6;$i++){
                    echo "<th>".$ganadora[$i]."</th>";
                }
                ?>
            </tr>
            <tr><th colspan="6">Numero de serie ganador</th></tr>
            <tr><th colspan="6"><?php echo $ganadora[7];?></th></tr>
        </table>

        
        <table border="1px solid black" id="loteria">
            <?php 
            /*pinto la tabla con bucles donde se veran todos los numeros 
            
            
            
            
            (FALTAN LAS CONDICIONES PARA PINTAR GRIS VERDE O ROJO IMPORTANTE)
            
            
            
            
            */
            $contador = 1;
            for($i=0;$i<7;$i++){
                echo "<tr>";
                for($j=0;$j<7;$j++){
                    if(""){
                        echo "<th class='pintarVerde'>".$contador."</th>";
                    }else if(""){
                        echo "<th class='pintarRojo'>".$contador."</th>";
                    }else if(""){
                        echo "<th class='pintarNegro'>".$contador."</th>";
                    }else{
                        echo "<th class='pintarGris'>".$contador."</th>";
                    }
                    
                    $contador++;
                }
                echo "</tr>";
            }
            ?>
        </table>
        
    </body>
</html>