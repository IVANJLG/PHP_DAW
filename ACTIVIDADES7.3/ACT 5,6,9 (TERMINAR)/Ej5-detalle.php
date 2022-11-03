<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:darkcyan;
    }

    h1{
        text-align:center;
        font-family:sans-serif;
        color:red;
    }

    img{
        width:350px;
        padding-top:5px;
        margin:0 auto 0 auto;
        display:block;
    }

    .descripcion{
        margin:0 auto 0 auto;
        height:650px;
        width:500px;
        background-color: white;
    }

    p{
        padding:15px;
        text-align:justify;
        font-size:1.2em;
        margin:5px;
    }

    input{
        margin:0 auto 0 auto;
        padding:8px;
        width:140px;
        display:block;
        font-size:1.3em;
    }
</style>
<body>
    <?php
        if(isset($_GET["artic"])){
            $imagen = "";
            $NomArtic = "";
            switch($_GET["artic"]){
                case "articulo 1":  
                    $imagen = "./Artic1.jpg";
                    $NomArtic = "articulo 1";
                    break;
                case "articulo 2":  
                    $imagen = "./Artic2.jpg";
                    $NomArtic = "articulo 2";
                    break;
                case "articulo 3": 
                    $imagen = "./Artic3.jpg";
                    $NomArtic = "articulo 3";
                    break;
                case "articulo 4":  
                    $imagen = "./Artic4.jpg";
                    $NomArtic = "articulo 4";
                    break;
                case "articulo 5":  
                    $imagen = "./Artic5.jpg";
                    $NomArtic = "articulo 5";
                    break;
            }

            echo "
                <div class='descripcion'>
                    <img src='".$imagen."'>
                    <p>___________________________________________<p>
                    <h1>".$NomArtic."</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias dolores, assumenda labore rerum aspernatur accusantium reiciendis in odio laboriosam laudantium? Dolorum deleniti, repellendus earum obcaecati maiores laborum delectus laudantium tempora?</p>
                    <form action='Ej5.php'>
                        <input type='submit' value='volver'>
                    </form>    
                </div>
            ";
        }
    ?>
</body>
</html>