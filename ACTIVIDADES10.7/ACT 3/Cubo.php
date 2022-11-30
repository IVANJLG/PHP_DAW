<?php
    class cubo{
        private $capacidad;
        private $contenido;

        //constructor
        public function __construct($capacidad,$contenido){
            $this->capacidad = $capacidad;
            $this->contenido = $contenido;
        }

        //getter
        public function getCapacidad(){
            return $this->capacidad;
        }

        public function getContenido(){
            return $this->contenido;
        }

        public function __toString(){
            $retorna = "Capacidad: ".$this->capacidad."<br>Contenido: ".$this->contenido;
            return $retorna;
        }

        public function llenarCubo($litros){
            if($litros>0){
                if($this->contenido+$litros>$this->capacidad){
                    $this->contenido = $this->capacidad;
                    echo "El cubo se ha llenado.";
                }else{
                    $this->contenido += $litros;
                }
            }
        }

        public function verterContenido($cubo,$litros){
            if($litros>$this->contenido){
                echo "No puedes verter de un cubo mas litros de los que hay.";
            }else{
                $cubo->llenarCubo($litros);
                $this->contenido -= $litros;
            }
        }
    }
?>