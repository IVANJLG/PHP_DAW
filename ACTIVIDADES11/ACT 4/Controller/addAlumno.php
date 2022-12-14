<?php
  require_once '../Model/alumno.php';

  // inserta el articulo en la base de datos
  $articuloAux = new Alumno($_POST['matricula'], $_POST['nombre'], $_POST['apellidos'], $_POST['curso']);
  $articuloAux->insert();
  header("Location: index.php");
  ?>