<?php
 if(isset($_GET['enviar'])){
    
    $producto=$_GET["buscar"];
}
require("datos_conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
if (mysqli_connect_errno()) {
    echo "HAY UN ERROR CON LA CONEXION";
    exit;
}

mysqli_select_db($conexion, $db_nombre) or die(" No se encuentra la base de datos.");

mysqli_set_charset($conexion, "utf-8");
$query = "select * from ARTÍCULOS where NOMBREARTÍCULO like'%$producto%'";


$resultados = mysqli_query($conexion, $query);
echo "<table>";
echo "<tr>";
echo "<th>Codigo</th>";
echo "<th>Seccion</th>";
echo "<th>NombreArtículo</th>";
echo "<th>Fecha</th>";
echo "<th>paisorigen</th>";
echo "<th>Precio</th>";
echo "</tr>";
 
while (($fila = mysqli_fetch_array($resultados))) {

    echo "<tr>";
    echo "<td>" . $fila['codigo'] . "</td>";
    echo "<td>" . $fila['SECCIÓN'] . "</td>";
    echo "<td>" . $fila['NOMBREARTÍCULO'] . "</td>";
    echo "<td>" . $fila['FECHA'] . "</td>";
    echo "<td>" . $fila['PAÍSDEORIGEN'] . "</td>";
    echo "<td>" . $fila['PRECIO'] . "</td>";
    echo "</tr>";

}

echo "</table>";

mysqli_close($conexion);
