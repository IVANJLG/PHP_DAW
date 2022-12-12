<?php
    include_once "Vehiculo.php";
    class bicicleta extends vehiculo{
        /*• Haz el caballito con la bicicleta*/
        public function __construct(){
            vehiculo::__construct();
        }

        public function andaBici($kilometros){
            vehiculo::andaVehiculo($kilometros);
            echo "La bici ha avanzado ".$kilometros."km";
        }

        public function getKilometraje(){
            return vehiculo::getKilometraje();
        }

        
    }
?>