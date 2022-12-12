<?php
    include_once "Vehiculo.php";
    class coche extends vehiculo{
        /*• Quema rueda con el coche*/
        public function __construct(){
            vehiculo::__construct();
        }

        public function andaCoche($kilometros){
            vehiculo::andaVehiculo($kilometros);
            echo "El coche ha avanzado ".$kilometros."km";
        }

        public function getKilometraje(){
            return vehiculo::getKilometraje();
        }

        
    }
?>