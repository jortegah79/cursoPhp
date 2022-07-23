<?php

require("config.php");

class Conexion{

    protected $conection;

    public function  __construct(){

     $this->conection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
 
     if($this->conection->connect_errno){

        die("Error ".$this->conection->connect_errno);

     }

    }
}