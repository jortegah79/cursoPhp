<?php

require("Conexion.php");

class Productos extends Conexion{

    protected $num_productos;

    protected $productos;

    public function __construct(){
        
        parent::__construct();

    }
    public function  get_productos($inicio=0){

        $sql="select * from ARTÍCULOS LIMIT ". $inicio .",".ART_X_PAGE;

        $result=$this->conection->query($sql);

        $this->productos=$result->fetch_all(MYSQLI_ASSOC);

        return $this->productos;

    }

    public function get_num_productos(){

        $sql="select * from ".TABLA;

        $result=$this->conection->query($sql);

        $this->num_productos=$result->num_rows;    

        return $this->num_productos;

    }
}