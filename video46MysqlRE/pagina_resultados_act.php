<?php
 if(isset($_GET['enviar'])){
    
    $producto=$_GET["buscar"];
}
require("datos_conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena);
if (mysqli_connect_errno()) {
    echo "HAY UN ERROR CON LA CONEXION";
    exit;
}

mysqli_select_db($conexion, $db_nombre) or die(" No se encuentra la base de datos.");

mysqli_set_charset($conexion, "utf-8");
$query = "select * from ARTÍCULOS where NOMBREARTÍCULO like'%$producto%'";


$resultados = mysqli_query($conexion, $query);
 
while (($fila = mysqli_fetch_array($resultados))) {
    echo "<form action='actualizar.php' method='get'>";
    echo "<input type='hidden' name='codigo'value='".$fila['codigo']."'><br/>";
    echo "<label>Sección:<input type='text' name='seccion'value='".$fila['SECCIÓN']."'></label><br/>";
    echo "<label>Nombre artículo:<input type='text' name='nombre'value='".$fila['NOMBREARTÍCULO']."'></label><br/>";
    echo "<label>Fecha:<input type='text' name='fecha'value='".$fila['FECHA']."'></label><br/>";
    echo "<label>País:<input type='text' name='pais'value='".$fila['PAÍSDEORIGEN']."'></label><br/>";
    echo "<label>Precio:<input type='text' name='precio'value='".$fila['PRECIO']."'></label><br/>";
    echo "<input type='submit' value='enviar'/>";
    echo "</form>";

}



mysqli_close($conexion);
