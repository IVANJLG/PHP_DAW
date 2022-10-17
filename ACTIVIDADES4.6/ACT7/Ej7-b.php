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

        h2{
            color:red;
        }

        <?php
            /*FUNCION QUE COMPRUEBA SI UN NUMERO DE LA TABLA ESTA EN UNA LISTA DE NUMEROS
            (necesario para pintar la tabla luego y contar los aciertos)*/
            function EstaArray($num,$array){
                for($i=1;$i<sizeof($array)-1;$i++){
                    if($num==$array[$i]){
                        return true;
                    }
                }
                return false;
            }
        ?>


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
                        echo "<th>".$seleccionado[$contador]."</th>";
                        $contador++;
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

                <?php
                    if(sizeof($seleccionado)!=6){
                        echo "<h2>La combinacion seleccionada debe contener 6 numeros y 1 de serie.</h2>";
                    }
                ?>
        <!--Tabla representativa de numeros: -->
        <table border="1px solid black" id="loteria">
            <?php 
            $contador = 1;
            for($i=0;$i<7;$i++){
                echo "<tr>";
                for($j=0;$j<7;$j++){
                    //si $contador esta en la tabla de combinacion ganadora y seleccionada:
                    if(EstaArray($contador,$ganadora) && EstaArray($contador,$seleccionado)){
                        echo "<th class='pintarVerde'>".$contador."</th>";
                        //if contador está en la tabla de ganadores pero no en la de seleccionados
                    }else if(EstaArray($contador,$ganadora) && !EstaArray($contador,$seleccionado)){
                        echo "<th class='pintarRojo'>".$contador."</th>";
                        //if contador esta en la tabla de seleccionados pero no de ganadores
                    }else if(!EstaArray($contador,$ganadora) && EstaArray($contador,$seleccionado)){
                        echo "<th class='pintarNegro'>".$contador."</th>";
                        //si contador no esta en ninguna tabla
                    }else{
                        echo "<th class='pintarGris'>".$contador."</th>";
                    }
                    
                    $contador++;
                }
                echo "</tr>";
            }

            //numero de aciertos. has tenido x aciertos
            $aciertos = 0;
            for($i=0;$i<sizeof($seleccionado);$i++){
                if(EstaArray($seleccionado[$i],$ganadora)){
                    $aciertos++;
                }
            }
            echo "<h3>Numero de aciertos: </h3>
                 <h3>Has tenido ".$aciertos." aciertos.</h3>";
            echo "<h3>"; 
            if($aciertos<4){
                echo "No has tenido mucha suerte.";
            }else if($aciertos==4){
                echo "Has recuperado tu dinero.";
            }else if($aciertos==5){
                echo "Se te han sumado 30 euros.";
            }else if($aciertos==6){
                echo "Se te han sumado 100 euros.";
            }else{
                echo "Enhorabuena. Has ganado 500 euros.";
            }
            echo "</h3>";
            ?>
        </table>
        
    </body>
</html>