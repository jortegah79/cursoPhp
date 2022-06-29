<?php 


require("datos_conexion.php");
$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena,$db_nombre) or die("error en la conexion");
if(!$conexion){
    echo $conexion;
    exit;
}else{
    $codigo=mysqli_real_escape_string($conexion,$_GET['codigo']);//Para evitar la inyeccion SQL.RECORDAR
/**************************MYSQLI_REAL_SCAPE_STRING(CONEXION,ENTRADA_DE_DATOS_A_COMPROBAR)  ************************************************* */

    $seccion = $_GET['seccion'];
    $nombre = $_GET['nombre'];
    $fecha = $_GET['fecha'];
    $pais = $_GET['pais'];
    $precio =$_GET['precio'];    
    $queryActualiza = "update ARTÍCULOS set SECCIÓN='$seccion',NOMBREARTÍCULO='$nombre',FECHA='$fecha',PAÍSDEORIGEN='$pais',PRECIO='$precio' where codigo=$codigo";
    $resultados=mysqli_query($conexion,$queryActualiza);
    echo "Se han actualizado ". mysqli_affected_rows($conexion). " registros";
    mysqli_close($conexion);
    echo "<a href='index.php'>AL INICIO</a>";

}
