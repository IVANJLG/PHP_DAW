<?php
//Si el usuario introduce mal los datos, este boton te permite borrar la sesion para volver a rellenarlos
@session_start();
session_destroy();
header("Location: Ej4.php");
?>