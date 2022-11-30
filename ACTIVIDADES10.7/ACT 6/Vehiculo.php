<?php
    class vehiculo{
        protected $Kilometraje;
        protected static $KilometrosTotales=0;
        protected static $VehiculosCreados=0;

        protected function __construct(){
            $this->Kilometraje = 0;
            vehiculo::$VehiculosCreados++;
        }

        public static function getVehiculosCreados(){return vehiculo::$VehiculosCreados;}
        public static function getKmTotales(){return vehiculo::$KilometrosTotales;}

        protected function getKilometraje(){return $this->Kilometraje;}

        protected function andaVehiculo($kilometros){
            if($kilometros>=0){
                $this->Kilometraje+=$kilometros;
                vehiculo::$KilometrosTotales+=$kilometros;
            }else{
                echo "No se pueden avanzar ".$kilometros."km.";
            }
        }

    }
?>