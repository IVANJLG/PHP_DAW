<?php
  require_once '../Model/asignatura.php';
  $articuloAux = new Asignatura($_GET['codigo'],null);
  $articuloAux->delete();
  header("Location: muestraAsignaturas.php");
?>