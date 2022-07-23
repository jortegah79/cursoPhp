<?php

$nombre= $_FILES['archivo']["name"];
$tipo=$_FILES['archivo']["type"];
$temporal=$_FILES['archivo']["tmp_name"];
$error=$_FILES['archivo']["error"];
$size=$_FILES['archivo']["size"];
$archivo_server=$_SERVER['DOCUMENT_ROOT']."/cursoPildoras/video84Archivos/imagenes/";
$ruta_final=$archivo_server.$nombre;


echo $_FILES['archivo']["name"];
if(!strpos($tipo,"image") && $size<=100000){   
        
if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta_final)){

    echo "<h1>Archivo recibido!</h1>";

    echo "<img src='./imagenes/".$nombre."' alt='foto'/>";
       
};
}else{
    echo "El archivo no es una imagen o es demasiado grande";
}