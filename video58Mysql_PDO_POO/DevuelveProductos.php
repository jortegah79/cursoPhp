<?php

require("Conexion.php");

/*class DevuelveProductos extends Conexion{


    public function DevuelveProductos(){

        parent::Conexion();

    }

    public function getProductos($dato){

        $resultado=$this->conexion_db->query("select * from ARTÍCULOS where PAÍSDEORIGEN='$dato'");
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }


}
*/

class DevuelveProductos extends Conexion{

    public function DevuelveProducto(){
        parent::Conexion();
    }
    public function get_productos($dato){

        $sql="select * from ARTÍCULOS where PAÍSDEORIGEN='$dato'";

        $resultado=$this->conexion_db->prepare($sql);

        $resultado->execute();
        
        $file=$resultado->fetchAll();      
        
        return $file;
        
      
    }
}
