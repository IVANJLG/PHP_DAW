<?php
    //funciones para añadir elementos o para mostrar en horizontal o en vertical
    class Menu{
        
        private $titulos;
		private $enlaces;

        //ambos son arrays
		public function __construct() {
			$this->titulos=[];
			$this->enlaces=[];
		}

        public function anadirTitulo($titulo,$enlace){
            $this->titulos[]=$titulo;
            $this->enlaces[]=$enlace;
        }

        public function mostrarMenu($coordenada){
            $menuMostrar = "";
            if($coordenada=="x"){
                for ($i=0; $i < count($this->titulos); $i++) {  
                    $menuMostrar.="<a href='".$this->enlaces[$i]."'>".$this->titulos[$i]."</a> - ";
                }
            }else if($coordenada=="y"){
                for ($i=0; $i < count($this->titulos); $i++) {  
                    $menuMostrar.="<a href='".$this->enlaces[$i]."'>".$this->titulos[$i]."</a><br>";
                }
            }
            return $menuMostrar;
        }


    }
?>