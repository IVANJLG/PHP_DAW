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
        width:fit-content;
        margin:50px auto;
    }
    form{
        display:block;
        width:20%;
        float:left;
        margin-left:45px;
        margin-right:60px;
        margin-top:20px;
    }

    form > input{
        padding:5px;
        width:80px;
    }

    td{
        text-align:center;
    }
</style>
<body>
    <table border="1px solid black">
        <tr>
            <td>¿Está seguro de que desea eliminar el registro?</td>
        </tr>
        <tr>
            <td>
                <form action="Ej1.php" method="get">
                    <input type='hidden' name='DNIBorrar' value='<?php echo $_POST["DNIBorrar"];?>'>
                    <input type="hidden" name="si" value="Destruir">
                    <input type="submit" value="si">
                </form>
                <form action="Ej1.php">
                    <input type="submit" value="no">
                </form>
                
                
            </td>
        </tr>
        </table>
    <?php
        
    ?>
</body>
</html>