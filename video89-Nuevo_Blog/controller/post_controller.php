<?php

if (isset($_GET['nuevo_tema'])) {

    header("location:../views/form_post_view.php?tema=" . $_GET['nuevo_tema']);

}
if (isset($_POST['enviar'])) {

    include_once "../model/Gestiona_post_model.php";

    $titulo = $_POST['titulo'];

    $comentarios = $_POST['comentarios'];

    $usuario = $_POST['usuario'];

    require_once "../model/Gestiona_usuarios.php";

    $gpu = new Gestiona_usuarios();

    $usuario_obtenido = $gpu->obtiene_usuario($usuario);

    $tema = $_POST['tabla'];


    if (($_FILES['imagen']['tmp_name'])) {

        $nombre = $_FILES['imagen']["name"];

        $temporal = $_FILES['imagen']["tmp_name"];

        $error = $_FILES['imagen']["error"];

        $size = $_FILES['imagen']["size"];

        $arr_tipo = explode("/", $_FILES['imagen']['type']);

        $archivo_server = $_SERVER['DOCUMENT_ROOT'] . "/cursoPildoras/video89-Nuevo_Blog/images/";

        $ruta_final = $archivo_server . $nombre;

        if ($_FILES['imagen']['size'] < 2000000 && !strcasecmp($arr_tipo[0], "image")) {

            move_uploaded_file($temporal, $ruta_final);

            $gpm = new Gestiona_post_model();

            $gpm->nuevo_post($titulo, $comentarios, $tema, $usuario_obtenido['id'], $nombre);

        }      
  
    } else {

        $gpm = new Gestiona_post_model();

        $gpm->nuevo_post($titulo, $comentarios, $tema, $usuario_obtenido['id']);

    }

    header("location:../index.php");

}
