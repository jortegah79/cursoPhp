<?php

include_once "../model/Gestiona_usuarios.php";

if(isset($_GET['login'])){

 header("location:../views/form_login_view.php");

}
if(isset($_GET['logout'])){

    require("../controller/session_out.php");
}
$prueba = new Gestiona_usuarios();

$user = $_POST['usuario'];

$password = $_POST['password'];

$resultado = $prueba->login_usuario($user, $password);

$tema=isset($_POST['tema'])? $_POST['tema']:-1;

if ($resultado) {

    session_start();

    $_SESSION['usuario'] = $user;
 
    if($tema!=-1){

        header("location:../controller/post_controller.php?tema=".$tema);

    }else{

        header("location:../index.php");

    }    

} else {

    header("location:../views/form_login_view.php?tema=".$tema);
}


if (isset($_POST['cancelar'])) {

header("location:../index.php");
}

header("location:../index.php");