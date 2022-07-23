<?php

include_once("config.php");

class Conexion{

   private static $conexion;

   public static function  get_conexion(){

    try{

    $conexion=new PDO(DB_HOST,DB_USER,DB_PASS);

    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    return $conexion;

    }catch(Exception $e){

        die($e->getCode() ." ". $e->getMessage());
    }

   }
}

