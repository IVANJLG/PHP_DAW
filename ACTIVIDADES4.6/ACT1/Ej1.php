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
    if(isset($_GET["personaje"])){
        if($_GET["personaje"]=="gollum"){
            echo "enhorabuena! Has adivinado el personaje";
        }else{ 
            echo "respuesta incorrecta";
        }
    }else{
        //recoge la variable num y segun lo que vale asigna cual es la imagen visible
        $num = $_GET["num"];
        if($num==1){$imagen1 = "Images/1.jpg";}else{$imagen1 = "Images/oculto.jpg";}
        if($num==2){$imagen2 = "Images/2.jpg";}else{$imagen2 = "Images/oculto.jpg";}
        if($num==3){$imagen3 = "Images/3.jpg";}else{$imagen3 = "Images/oculto.jpg";}
        if($num==4){$imagen4 = "Images/4.jpg";}else{$imagen4 = "Images/oculto.jpg";}
        if($num==5){$imagen5 = "Images/5.jpg";}else{$imagen5 = "Images/oculto.jpg";}
        if($num==6){$imagen6 = "Images/6.jpg";}else{$imagen6 = "Images/oculto.jpg";}
        if($num==7){$imagen7 = "Images/7.jpg";}else{$imagen7 = "Images/oculto.jpg";}
        if($num==8){$imagen8 = "Images/8.jpg";}else{$imagen8 = "Images/oculto.jpg";}
        if($num==9){$imagen9 = "Images/9.jpg";}else{$imagen9 = "Images/oculto.jpg";}
    ?>
    <!--Muestra la misma pagina con la tabla de imagenes pero con las imagenes recogidas en las variables de arriba-->
        <table>
            <tr> 
                <th><img src=<?php echo $imagen1?>></th> 
                <th><img src=<?php echo $imagen2?>></th> 
                <th><img src=<?php echo $imagen3?>></th> 
            </tr>

            <tr> 
                <th><img src=<?php echo $imagen4?>></th> 
                <th><img src=<?php echo $imagen5?>></th> 
                <th><img src=<?php echo $imagen6?>></th> 
            </tr>

            <tr> 
                <th><img src=<?php echo $imagen7?>></th> 
                <th><img src=<?php echo $imagen8?>></th> 
                <th><img src=<?php echo $imagen9?>></th> 
            </tr>
        </table>

        <form>
            <input type="text" name="personaje">
            <input type="submit" value="Comprobar">
        </form>
    
    <?php 
    //te envia de nuevo a Ej1.html despues de 1 segundo.
    header('Refresh:2; url=Ej1.html'); 
    }
    ?>
    </body>
</html>