<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th{
        padding:5px;
    }
    table{
        float:left;
        margin-left:20px;
        margin-bottom:20px;
    }
    form{
        clear:both;
        margin-left:20px;
    }
</style>
<body>
    <?php 
        include("../ACT2/controlAcceso.php");
        imprimeTarjeta(dameTarjeta("usuario"),"usuario");
        imprimeTarjeta(dameTarjeta("administrador"),"administrador");
    ?>
    <!--Tarjetas de usuario y admin-->
        <!-- <table border="1px solid black">
            <tr>
                <th colspan="6">Usuario</th>
            </tr>
        <?php
            /*
                Disponemos de 2 tarjetas de coordenadas para controlar el acceso a una web. Cada tarjeta 
            corresponde a un perfil de usuario ‘admin’ o ‘estandar’, cada número número registrado en la 
            tarjeta se identifica por su fila (de la 1 a la 5) y su columna (de la A a la E). Los valores 
            registrados en cada tarjeta son fijos y os lo podéis inventar.

                Crea una página principal que sirva de control de acceso a una segunda página. Se pedirá el 
            perfil de usuario (admin o estándar) y una clave aleatoria correspondiente a la tarjeta de 
            coordenadas de su perfil (fila y columna), se comprobará si es correcto usando 2 funciones: 
            dameTarjeta() a la que se le pasa el perfil y devuelve una matriz correspondiente a la tarjeta 
            de coordenadas de ese perfil, y compruebaClave() a la que se le pasa la matriz de coordenadas, 
            las coordenadas y un valor, y devolverá un booleano según sea correcto el valor en la matriz de 
            coordenadas. Ambas funciones estarán almacenadas en una librería controlAcceso.php.
                
                Si el usuario se ha identificado correctamente se muestra un enlace de acceso a la página 
            protegida (cualquiera) y si no mostrará un enlace para volver a intentarlo de nuevo.

                Usar una tercera función imprimeTarjeta() que recibe una tarjeta y la imprime en una tabla 
            para comprobar el valor de todas las coordenadas. (imprimir las tarjetas de cada perfil en 
            la página de acceso para poder comprobar el correcto funcionamiento de la página)
            */
            //inicializo el array valores de usuario
            $usuario = array(
                array("" ,"A","B","C","D","E"),
                array("1","A1","A2","A3","A4","A5"),
                array("2","B1","B2","B3","B4","B5"),
                array("3","C1","C2","C3","C4","C5"),
                array("4","D1","D2","D3","D4","D4"),
                array("5","E1","E2","E3","E4","E5")
            );
            
            //pinto la tabla
            for ($i=0; $i < 6; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 6; $j++) { 
                    echo "<th>";
                        //valor de esa casilla que luego se pedira al usuario
                        echo $usuario[$i][$j];
                    echo "</th>";
                }
                echo "</tr>";
            }
            
        ?>
        </table>
        <table border="1px solid black">
            <tr>
                <th colspan="6">Administrador</th>
            </tr>
        <?php
            //inicializo el array valores de administrador
            $administrador = array(
                array("" ,"A","B","C","D","E"),
                array("1","1A","2A","3A","4A","5A"),
                array("2","1B","2B","3B","4B","5B"),
                array("3","1C","2C","3C","4C","5C"),
                array("4","1D","2D","3D","4D","5D"),
                array("5","1E","2E","3E","4E","5E")
            );
            
            //pinto la tabla
            for ($i=0; $i < 6; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 6; $j++) { 
                    echo "<th>";
                        //valor de esa casilla que luego se pedira al usuario
                        echo $administrador[$i][$j];
                    echo "</th>";
                }
                echo "</tr>";
            }
        ?>
        </table> -->
    </div>
    <!--Formulario-->
    <form action="Ej2-b.php" method="get">
        <!--Usuario o admin-->
        <input type="radio" id="usuario" name="usu" value="usuario" required>
        <label for="usuario">Usuario</label>
        <input type="radio" id="administrador" name="usu" value="administrador" required>
        <label for="administrador">Administrador</label>
        <!--valor de casilla-->
        <?php
            $fila = rand(1,5);
            $colum = rand(1,5);
            $columna = "";
            switch($colum){
                case 1: $columna = "A"; break;
                case 2: $columna = "B"; break;
                case 3: $columna = "C"; break;
                case 4: $columna = "D"; break;
                case 5: $columna = "E"; break;
            } 
            echo "<br><br>Introduce el valor de la casilla ".$columna." de la fila ".$fila."<br>";
            echo "<br><input type='text' placeholder='valor en la casilla ".$columna."".$fila."' name='valorCasilla' required>";
            
            //tengo que enviar la fila, columna, el valor que hay en esa casilla, y la tabla
            echo "<input type='hidden' value='".$fila."' name='fila'>";
            echo "<input type='hidden' value='".$colum."' name='columna'>";
            echo "<input type='hidden' value='".serialize($usuario)."' name='tarjetaUSU'>";
            echo "<input type='hidden' value='".serialize($administrador)."' name='tarjetaADMIN'>";
        ?>     
        <input type="submit">
    </form>
    
</body>
</html>