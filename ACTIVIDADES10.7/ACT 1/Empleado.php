<?php
    class Empleado{
        private $nombre;
        private $sueldo;

        // Constructor
        public function __construct($nom, $sueldo) {
        $this->nombre = $nom;
        $this->sueldo = $sueldo;
        }
        
        public function asigna($nom,$salario){
            if($nom == $this->nombre){
                $this->sueldo=$salario;
                echo "El sueldo del empleado ha sido actualizado a ".$salario.".";
            }else{
                echo "El nombre introducido no coincide con el nombre del empleado.";
            }
        }

        public function __toString(){
            $retorna = "Nombre: ".$this->nombre."<br>Sueldo: ".$this->sueldo;
            if($this->sueldo>=3000){
                $retorna.="<br>Este empleado debe pagar impuestos";
            }else{
                $retorna.="<br>Este empleado no debe pagar impuestos";
            }
            return $retorna;
        }
    }
?>