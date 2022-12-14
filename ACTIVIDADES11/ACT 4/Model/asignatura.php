<?php

require_once 'EscuelaDB.php';

class Asignatura {
  private $codigo;
  private $nombre;
  
  function __construct($codigo, $nombre) {
    $this->codigo = $codigo;
    $this->nombre = $nombre;
  }

  
  public function insert() {
    $conexion = EscuelaDB::connectDB();
    $insercion = "INSERT INTO asignatura(nombre) VALUES (\"".$this->nombre."\")";
    $conexion->exec($insercion);
  }

  public function delete() {
    $conexion = EscuelaDB::connectDB();
    $borrado = "DELETE FROM asignatura WHERE codigo=\"".$this->codigo."\"";
    $conexion->exec($borrado);
  }

/* 
  public function update() {
    $conexion = EscuelaDB::connectDB();
    $insercion = "UPDATE alumnos set nombre=\"".$this->nombre."\", apellidos=\"".$this->apellidos."\", curso=\"".$this->curso."\" where matricula=\"".$this->matricula."\"";
    $conexion->exec($insercion);
  } */
  
   public static function getAsignaturas() {
    $conexion = EscuelaDB::connectDB();
    $seleccion = "SELECT codigo, nombre FROM asignatura";
    $consulta = $conexion->query($seleccion);
    
    $asignaturas = [];
    
    while ($registro = $consulta->fetchObject()) {
      $asignaturas[] = new Asignatura($registro->codigo, $registro->nombre);
    }
   
    return $asignaturas;    
  }

  
 /*  public static function getAlumnosByCodigo($codigo) {
    $conexion = EscuelaDB::connectDB();
    $seleccion = "SELECT nombre, apellidos, curso FROM alumnos WHERE matricula=$matricula";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $alumno = new Alumno($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso);
       
    return $alumno;    
  } */



  /* GETTERS Y SETTERS */
   


  /**
   * Get the value of codigo
   */ 
  public function getCodigo()
  {
    return $this->codigo;
  }

  /**
   * Set the value of codigo
   *
   * @return  self
   */ 
  public function setCodigo($codigo)
  {
    $this->codigo = $codigo;

    return $this;
  }

  /**
   * Get the value of nombre
   */ 
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   *
   * @return  self
   */ 
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;

    return $this;
  }
}