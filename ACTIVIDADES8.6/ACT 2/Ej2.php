<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th{
        border:1px solid black;
    }
</style>
<body>
    <?php
        $Mascotas = fopen("../ACT 1/Mascotas.txt","r");
        $Fechas = array();
        while(!feof($Mascotas)){
            $linea = fgets($Mascotas);
            if(str_starts_with($linea,"#")){
                $Fechas[] = trim($linea);
            }
        }
    ?>
    <table>
        <form action="Ej2.php" method="post">
            <tr>
                <th>
                    <select name="Fecha" id="Fecha">
                        <?php
                            for ($i=0; $i < count($Fechas); $i++) { 
                                
                                echo "<option value='$Fechas[$i]'>$Fechas[$i]</option>";
                            }
                        ?>
                    </select>
                </th>
                <th><input type="submit" value="Mostrar mascotas"></th>
            </tr>
        </form>
        <?php
            if(isset($_POST["Fecha"])){
                $Fecha = rtrim($_POST["Fecha"]);
                //si fecha y fechas[i] son iguales, guarda i en la variable indice

                for ($i=0; $i < count($Fechas); $i++) {
                    if($Fechas[$i] == $Fecha){
                        $indice = $i;
                    }
                }
                //con esto reorganizo los datos del fichero en un array bidimensional.
                //Mascotas ahora contiene tantos arrays como fechas, y en cada array se guardan los animales
                //de su fecha correspondiente.
                $MascotasFechas = array();
                fgets($Mascotas);
                $Linea = fgets($Mascotas);
                //bucle para almacenar las mascotas de cada dia en su array correspondiente
                $bandera = false;
                $i = 0;
                while(!feof($Mascotas)){
                    $linea = fgets($Mascotas);
                    
                }
                //en que indice del array fechas está la fecha seleccionada
                var_dump($MascotasFechas);

                for($i = 0; $i < count($MascotasFechas[$indice]) ; $i++){
                    echo "<tr><th>$MascotasFechas[$indice][$i]</th></tr>";
                }
            }
            fclose($Mascotas);
        ?>
    </table>
</body>
</html>