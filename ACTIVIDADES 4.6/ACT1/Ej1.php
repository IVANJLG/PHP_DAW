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
                }else{ echo "respuesta incorrecta";}
    }else{
        //aqui es donde tienes que mostrar la imagen segun haya hecho click en una o en otra
        /*
        if (variable que recoge de la imagen html == 1){ imagen1 = 1.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 2){ imagen2 = 2.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 3){ imagen3 = 3.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 4){ imagen4 = 4.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 5){ imagen5 = 5.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 6){ imagen6 = 6.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 7){ imagen7 = 7.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 8){ imagen8 = 8.jpg;}else{imagen1=oculto.jpg;}
        if (variable que recoge de la imagen html == 9){ imagen9 = 9.jpg;}else{imagen1=oculto.jpg;}

        
        */
    }
        
    ?>

            <table>
                <tr> 
                    <th><img src="Images/oculto.jpg"></th> 
                    <th><img src="Images/oculto.jpg"></th> 
                    <th><img src="Images/oculto.jpg"></th> 
                </tr>

                <tr> 
                    <th><img src="Images/oculto.jpg"></th> 
                    <th><img src="Images/oculto.jpg"></th> 
                    <th><img src="Images/oculto.jpg"></th> 
                </tr>

                <tr> 
                    <th><img src="Images/oculto.jpg"></th> 
                    <th><img src="Images/oculto.jpg"></th> 
                    <th><img src="Images/oculto.jpg"></th> 
                </tr>
            </table>
    </body>
</html>