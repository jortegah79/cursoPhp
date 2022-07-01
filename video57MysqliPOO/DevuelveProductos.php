<?php

require("Conexion.php");

class DevuelveProductos extends Conexion{


    public function DevuelveProductos(){

        parent::Conexion();

    }

    public function getProductos(){

        $resultado=$this->conexion_db->query('select * from ARTÍCULOS');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }


}

