<?php

include("../controller/start_session.php");

if(isset($_GET['entrar'])){

$tema = $_GET['tema'];

include_once('../model/Gestiona_post_model.php');

//obtenemos los post con el tema seleccionado en la pagina principal.

$gpm = new Gestiona_post_model();

$posts = $gpm->obtiene_posts($tema);

include_once('../views/post_view.php');

}

if (isset($_GET['nuevo'])){

    if(isset($_SESSION['usuario'])){
    
        header("location:../views/form_nuevo_tema.php");
    
    }else{
      
        header("location:../views/form_login_view.php");
        
    }
    
    }