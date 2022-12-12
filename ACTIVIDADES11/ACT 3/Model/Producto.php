<?php
//EN EL MODELO AÑADES LA CLASE PARA CONECTARTE A LA BASE DE DATOS Y LA CLASE PRODUCTO CON SUS FUNCIONES DE
//INSERCION BORRADO MODIFICACION RECOGIDA DE PRODUCTOS ETC. EN CONTROLADOR LAS LLAMAS SEGUN LO NECESITES.
require_once 'TiendaphpDB.php';

class Producto{
    private $codigo;
    private $nombre;
    private $precio;

    function __construct($codigo,$nombre,$precio,$stock){
        //el codigo se asignará automaticamente como autoincrementable, por lo que no es necesario.
        $this->codigo = $codigo;
        if(strlen($nombre)<=20){
            $this->nombre = $nombre;
        }
        if($precio<=99999){
            $this->precio = $precio;
        }
        if($stock<=999){
            $this->stock = $stock;
        }
    } 

    public function getCodigo() {
        return $this->codigo;
      }
    public function getNombre() {
        return $this->nombre;
      }
    public function getPrecio() {
        return $this->precio;
      }
    
    public function getStock() {
        return $this->stock;
      }

    //operaciones de insercion, modificacion y borrado
    public function insert() {
        $conexion = TiendaPHP::connectDB();
        $insercion = "INSERT INTO productos (nombre, precio, stock) VALUES (\"".$this->nombre."\", \"".$this->precio."\", \"".$this->stock."\")";
        $conexion->exec($insercion);
      }
    public function delete() {
        $conexion = TiendaPHP::connectDB();
        $borrado = "DELETE FROM oferta WHERE codigo='".$this->codigo."'";
        $conexion->exec($borrado);
      }
    //recoger todos los productos (devuelve un array con todos los productos)
    public static function getProductos() {
        $conexion = TiendaPHP::connectDB();
        $consulta = $conexion->query("SELECT * FROM productos");
        $productos = [];
        while ($producto = $consulta->fetchObject()) {
          if($producto!=null){
            //de cada producto, tenemos el codigo y aparte los atributos del objeto
            $productos[] = new Producto($producto->codigo, $producto->nombre, $producto->precio, $producto->stock);
          }
        }
        return $productos;    
      }
    
}
?>