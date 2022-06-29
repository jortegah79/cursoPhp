<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion_BBDD</title>
</head>
<body>
    
<?php
//ACCESO BBDD DE MODO PROCEDIMENTAL

//datos necesarios para la conexion...

$db_host = "localhost";
$db_nombre = "PRUEBAS";
$db_usuario = "root";
$db_contrasena = "";

/*Esta función puede tener 3 o 4 parametross...si ponemos 3 ...podemos seleccionar la base de datos con la funcion mysql_select_db---------*/
//$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);//se podria utilizar esto : or die("Error en la conexion") o la manera que esta puesta aqui..
$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena);
if(mysqli_connect_errno()){
    echo $conexion;
    exit;
}

mysqli_select_db($conexion,$db_nombre) or die(" No se encuentra la base de datos.");


mysqli_set_charset($conexion,"utf-8");
$query = "select * from datospersonales";

$resultados=mysqli_query($conexion,$query);

while(($fila=mysqli_fetch_row($resultados))){

echo $fila[0] ."------" .$fila[1] . " ".  $fila[2]." " .  $fila[3] ;
echo "<br>";


}
mysqli_close($conexion);
?>



</body>
</html>