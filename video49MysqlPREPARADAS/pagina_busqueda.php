<?php
 if(isset($_GET['enviar'])){
    
    $pais=$_GET["buscar"];
}
require("datos_conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
if (mysqli_connect_errno()) {
    echo "HAY UN ERROR CON LA CONEXION";
    exit;
}

/*Preparamos la sentencia SQL, utilizamos mysqli_prepare() para prepararla y crear un objeto de tipo stmt
    Ahora agregamos a la búsqueda el tipo de argumento y el argumento, con mysqli_stmt_bind_parameter()
    ejecutamos la sentencia con mysqli_stmt_execute()
    obtenemos un resultset con mysqli_stmt_bind_result()
    y obtenemos un array para poder mostrar los datos con mysqli_smtm_fetch()
    Finalmente, cerramos la conexion con mysqli_stmt_close(objeto stmt)
    */
$sql="SELECT codigo,SECCIÓN,PAÍSDEORIGEN,PRECIO FROM ARTÍCULOS WHERE PAÍSDEORIGEN=?";
$resultado=mysqli_prepare($conexion,$sql);
$ok=mysqli_stmt_bind_param($resultado,"s",$pais);
$ok=mysqli_stmt_execute($resultado);
if($ok==false){
    echo "Error en la consulta";
}else{

$ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
echo "Articulos encontrados:<br><br>";
while(mysqli_stmt_fetch($resultado)){

    echo $codigo." ".$seccion." ".$precio." ".$pais."€<br>";
}
mysqli_stmt_close($resultado);

}
