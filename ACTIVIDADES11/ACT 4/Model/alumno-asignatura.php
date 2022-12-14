<?php

require_once 'EscuelaDB.php';

class AlumnoAsignatura {
  private $matricula;
  private $casignatura;
  
  function __construct($matricula, $casignatura) {
    $this->matricula = $matricula;
    $this->casignatura = $casignatura;
  }

  
  public function insert() {
    $conexion = EscuelaDB::connectDB();
    $insercion = "INSERT INTO Aasignatura(matricula, casignatura) VALUES (\"".$this->matricula."\", \"".$this->casignatura."\")";
    $conexion->exec($insercion);
  }

  public function delete() {
    $conexion = EscuelaDB::connectDB();
    $borrado = "DELETE FROM Aasignatura WHERE matricula=\"".$this->matricula."\" and casignatura=\"".$this->casignatura."\"";
    $conexion->exec($borrado);
  }

/* 
  public function update() {
    $conexion = EscuelaDB::connectDB();
    $insercion = "UPDATE alumnos set nombre=\"".$this->nombre."\", apellidos=\"".$this->apellidos."\", curso=\"".$this->curso."\" where matricula=\"".$this->matricula."\"";
    $conexion->exec($insercion);
  } */
  
   public static function getAsignaturasMatriculado() {
    $conexion = EscuelaDB::connectDB();
    $seleccion = "SELECT matricula, casignatura FROM Aasignatura";
    $consulta = $conexion->query($seleccion);
    
    $asignaturasMatriculado = [];
    
    while ($registro = $consulta->fetchObject()) {
      $asignaturasMatriculado[] = new AlumnoAsignatura($registro->matricula, $registro->casignatura);
    }
   
    return $asignaturasMatriculado;    
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
   
  public function getMatricula()
  {
    return $this->matricula;
  }

  public function setMatricula($matricula)
  {
    $this->matricula = $matricula;

    return $this;
  }
  public function getCasignatura()
  {
    return $this->casignatura;
  }

  public function setCasignatura($asignatura)
  {
    $this->casignatura = $asignatura;

    return $this;
  }
}