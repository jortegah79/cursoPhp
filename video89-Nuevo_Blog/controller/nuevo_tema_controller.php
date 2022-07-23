<?php

if(isset($_POST['cancelar'])){

    header("location:../index.php");

}
if(isset($_POST['enviar'])){

    $titulo=$_POST['titulo'];

    $comentarios=$_POST['comentarios'];

    require_once("../model/Gestiona_tema_model.php");

    $gtm=new Gestiona_tema_model();

    $gtm->create_tema($titulo,$comentarios);

    header("location:../index.php");
    
}