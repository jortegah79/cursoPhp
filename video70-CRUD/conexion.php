<?php
try{
$conexion=new PDO("mysql:host=localhost;dbname=PRUEBAS","root","");
       
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){

    die( $e->getMessage());
}