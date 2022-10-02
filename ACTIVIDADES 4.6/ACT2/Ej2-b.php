<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid black">
        
        <tr><th colspan="7">Combinacion ganadora</th></tr>
        <tr>
            <?php
                $rand1 =(rand(1,49));
                $rand2 =(rand(1,49));
                $rand3 =(rand(1,49));
                $rand4 =(rand(1,49));
                $rand5 =(rand(1,49));
                $rand6 =(rand(1,49));
                $rand7 =(rand(1,999));

                echo "<th>".$rand1."</th>";
                echo "<th>".$rand2."</th>";
                echo "<th>".$rand3."</th>";
                echo "<th>".$rand4."</th>";
                echo "<th>".$rand5."</th>";
                echo "<th>".$rand6."</th>";
                echo "<th>".$rand7."</th>";
            ?>
        </tr>
        <?php
        //variable para contar cuantas ha acertado
        $contador = 0;
            if(isset($_REQUEST[$rand1])){
                $contador++;
            }if(isset($_REQUEST[$rand2])){
                $contador++;
            }if(isset($_REQUEST[$rand3])){
                $contador++;
            }if(isset($_REQUEST[$rand4])){
                $contador++;
            }if(isset($_REQUEST[$rand5])){
                $contador++;
            }if(isset($_REQUEST[$rand6])){
                $contador++;
            }if(isset($_REQUEST[$rand7])){
                $contador++;
            }
            
            //numero de aciertos. has tenido x aciertos
            
            echo "<h3>Numero de aciertos: </h3>
                 <h3>Has tenido ".$contador." aciertos.</h3>";
            echo "<h3>"; 
            if($contador<4){
                echo "No has tenido mucha suerte.";
            }else if($contador==4){
                echo "Has recuperado tu dinero.";
            }else if($contador==5){
                echo "Se te han sumado 30 euros.";
            }else if($contador==6){
                echo "Se te han sumado 100 euros.";
            }else{
                echo "Enhorabuena. Has ganado 500 euros.";
            }
            echo "</h3>";
        ?>
    </table>
    <?php 

    ?>
</body>
</html>