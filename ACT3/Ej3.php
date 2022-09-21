<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--AQUI LLAMAS LAS VARIABLES CON EL GET Y LAS ASIGNAS A VARIABLES LOCALES DEL ARCHIVO. EN EL CSS CAMBIAS
LOS VALORES CORRESPONDIENTES POR LOS STRINGS DONDE LO ALMACENAS-->


<style>
    *{
    margin: 0;
    padding: 0;
    }
    #contenedor{
        /* cambiar blue por nombre de variable de color de fondo*/
        background:blue;
        padding: 20px;
        /*cambia porcentaje y tipo de fuente por las variables correspondientes del formulario*/
        font: 110% Times New Roman;
        /*cambia alineacion por la variable correspondiente*/
        text-align: center;
    }

    header{
        background:green;
        padding:5px;
        width:80%;
        margin:0 auto 5px auto;
        height:61px;
    }

    header > img{
        float:left;
        width:60px;
        background:white;
        margin-bottom:10px;
    }

    #menu{
        background:red;
        width:80%;
        margin: 0 auto 0 auto;
        padding:5px;
    }

    table{
        text-decoration:none;
        margin: 0 auto 0 auto;
    }

    #menu > table > tr{
        padding-left: 20px;
    }

    aside{
        clear:both;
        background:green;
        width:80%;
        margin: 5px auto 5px auto;
        padding:5px;
    }

    footer{
        width:78%;
        margin:0 auto 0 auto;
        background: orange;
        padding:25px;
        margin-top:10px;
    }

</style>
<body>
    <div id="contenedor">
        <!--Cambia imagen por la correspondiente del formulario-->
        <header>
            <img src="imagen cuadrado.png">
            <h1>Mi pagina web</h1>
        </header>
            <div id="menu">
                <table><tr>
                    <th>Opcion 1</th>
                    <th>Opcion 2</th>
                    <th>Opcion 3</th>
                    <th>Opcion 4</th>
                </tr></table>
            </div>
        <div id="contenido">
            <aside>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Assumenda, non saepe facere voluptas odit facilis quam 
                    temporibus ad nam. Doloribus provident quidem tenetur labore 
                    iure voluptatum numquam, ipsum aliquid fugiat.Lorem ipsum dolor sit amet 
                    consectetur adipisicing elit. 
                    Assumenda, non saepe facere voluptas odit facilis quam 
                    temporibus ad nam. Doloribus provident quidem tenetur labore 
                    iure voluptatum numquam, ipsum aliquid fugiat.</p>
            </aside>
            <aside>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Assumenda, non saepe facere voluptas odit facilis quam 
                    temporibus ad nam. Doloribus provident quidem tenetur labore 
                    iure voluptatum numquam, ipsum aliquid fugiat.Lorem ipsum dolor sit amet 
                    consectetur adipisicing elit. 
                    Assumenda, non saepe facere voluptas odit facilis quam 
                    temporibus ad nam. Doloribus provident quidem tenetur labore 
                    iure voluptatum numquam, ipsum aliquid fugiat.</p>
            </aside>
        </div>
        <footer>
            © 1996-2022 Daniel A. Tysver. All Rights Reserved.
            Forsgren Fisher McCalmont DeMarea Tysver LLP, Minneapolis, MN
            No claim to copyright ownership is made to underlying materials originating with the U.S. Government,
            including MPEP and TMEP sections and indexes, statutes, regulations, and court decisions.
            IMPORTANT: Please review the legal disclaimer and feedback page
        </footer> 
    </contenedor>
    

</body>
</html>