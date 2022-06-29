<?php
  $codigo=(int)$_GET['codigo'];
  $seccion = $_GET['seccion'];
  $nombre = $_GET['nombre'];
  $fecha = $_GET['fecha'];
  $pais = $_GET['pais'];
  $precio =$_GET['precio'];    
require("datos_conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
if (mysqli_connect_errno()) {
    echo "HAY UN ERROR CON LA CONEXION";
    exit;
}

$sql="insert into ARTÍCULOS (codigo,SECCIÓN,NOMBREARTÍCULO,FECHA,PAÍSDEORIGEN,PRECIO) values(?,?,?,?,?,?)";
$resultado=mysqli_prepare($conexion,$sql);
$ok=mysqli_stmt_bind_param($resultado,"isssss",$codigo,$seccion,$nombre,$fecha,$pais,$precio);//el primero es una 1 porque el codigo es un integer, el resto s porque son strings

$ok=mysqli_stmt_execute($resultado);
if($ok==false){
    echo "Error en la inserción";
}else{

echo "Producto insertado";
}
mysqli_stmt_close($resultado);


