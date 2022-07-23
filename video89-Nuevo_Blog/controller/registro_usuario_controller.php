<?php
include_once("../model/Gestiona_usuarios.php");

if(isset($_POST['registro_enviar'])){
    
$nombre=$_POST['nombre']; 

$apellido=$_POST['apellido'];

$correo=$_POST['correo'];

$user=$_POST['usuario'];

$password=$_POST['password'];

$pass=$_POST['password2'];

//comparamos las 2 contraseñas.

if(!strcasecmp($password,$pass)){
   

    // codificamos la contraseña

    $enc_pass=password_hash(htmlentities($password),PASSWORD_DEFAULT);
    
    $gu=new Gestiona_usuarios();
       
    $gu->create_usuario($nombre,$apellido,$correo,$user,$enc_pass);

    header("location:../index.php");

}else{
    
    header("location:../view/form_registro_view.php?error=si");
}

}
if(isset($_POST['registro_cancelar'])){

   header("location:../index.php");
}
include("../views/form_registro_view.php");