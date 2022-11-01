<?php
@session_start();
session_destroy();
header("Location: Ej4.php");
?>