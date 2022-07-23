<?php

require("../model/Contactos_model.php");

$cont_model=new Contactos_model();

//Ahora hace falta gestionar las acciones.

if(isset($_GET['elimina_id'])){

   $cont_model->delete_contacto($_GET['elimina_id']);

   header("location:../index.php");
}
if(isset($_POST['Nuevo'])){
 
    $id=$_POST["id"];
    $nombre=$_POST["name"];
    $apellido=$_POST["surname"];
    $telefono=$_POST["tel"];
    $email=$_POST["mail"];

   $cont_model->new_contacto($nombre,$apellido,$telefono,$email,$id);

   header("location:../index.php");
       
}
if(isset($_POST['actualizar'])){
    
    $id=$_POST["id_act"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];

   $cont_model->update_contacto($nombre,$apellido,$telefono,$email,$id);

   header("location:../index.php");
}