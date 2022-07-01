<?php

require("config.php");


/*Aquí generamos una clase Conexion mediante la libreria MYSQLI*/
/*class Conexion{
   
    protected $conexion_db;

    public function Conexion(){
//Se puede hacer con __construct

        $this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);

        if($this->conexion_db->connect_errno){
            echo "Fallo al conectar a Mysli: ". $this->conexion_db->connect_error;
            return;
        }
        $this->conexion_db->set_charset(DB_CHARSET);
    }
}
*/
/*Aqui generamos una clase Conexion mediante la libreria PDO */

class  Conexion{

    protected $conexion_db;

    public function Conexion(){
        try{
        $this->conexion_db=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NOMBRE,DB_USUARIO,DB_CONTRA);
        
        $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $this->conexion_db->exec("set CHARACTER SET utf8");

        return $this->conexion_db;
        
        }catch (Exception $e){

            echo "Ha habido un error en la linea ".$e->getLine();

            echo "<br>".$e->getMessage();
        }        
      
    }
}