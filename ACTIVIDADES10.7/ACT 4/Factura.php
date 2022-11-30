<?php
    class factura{
        /*ImporteBase, fecha, estado (pagada o pendiente) y productos (array 
        con todos los productos de la factura, que contiene el nombre, precio y cantidad). */

        private static $iva = 0.21;
        private $fecha;
        private $estado;
        private $productos;
        private $ImporteBase;

        public function __construct(){
            $this->fecha=date("d-m-Y");
            $this->estado=False;
            $this->productos=[];
            $this->ImporteBase=0;
        }

        //getter y setter fecha estado importebase
        public function getFecha(){return $this->fecha;}
        public function getEstado(){return $this->estado;}
        public function getImporteBase(){return $this->ImporteBase;}

        public function setFecha($fecha){$this->fecha = $fecha;}
        public function setEstado($estado){$this->estado = $estado;}

        //cada producto tiene nombre, precio y cantidad
        public function AnadeProducto($nombre,$precio,$cantidad){
            //lo guardo en un array asociativo y luego ese array lo inserto en el de productos
            $producto = ["nombre"=>$nombre,"precio"=>$precio,"cantidad"=>$cantidad];
            
            if(in_array($producto,$this->productos)){
                echo "Este producto ya se ha guardado en la factura.";
            }else{
                $this->productos[] = $producto;
                $this->ImporteBase += $producto["precio"]*$producto["cantidad"];
            }
        }

        public function ImprimeFactura(){
            if($this->estado){$estado = "Pagado";}else{$estado = "No pagado";}

            $factura = "Fecha: ".$this->fecha." | Estado: ".$estado."<br><br>";
            for ($i=0; $i < count($this->productos); $i++) {
                $factura=$factura."PRODUCTO ".($i+1).": ";
                $factura=$factura."Nombre: ".$this->productos[$i]["nombre"]." | Precio: ".$this->productos[$i]["precio"]."€ | Cantidad: ".$this->productos[$i]["cantidad"]."<br>";

            }
            $factura = $factura."<br>ImporteBase: ".$this->ImporteBase."€ | IVA: ".factura::$iva." | Total: ".($this->ImporteBase+$this->ImporteBase*factura::$iva)."€"; 
            return $factura;
        }
    }
?>