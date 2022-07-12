<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion_BBDD</title>
<link rel="StyleSheet" href="estilos.css"/>
</head>
<body>
    
<?php
//ACCESO BBDD DE MODO PROCEDIMENTAL
require("datos_conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
if (mysqli_connect_errno()) {
    echo "HAY UN ERROR CON LA CONEXION";
    exit;
}

mysqli_select_db($conexion, $db_nombre) or die(" No se encuentra la base de datos.");

mysqli_set_charset($conexion, "utf-8");
$query = "select * from ARTÍCULOS where PAÍSDEORIGEN ='España'";


$resultados = mysqli_query($conexion, $query);
echo "<table>";
echo "<tr>";
echo "<th>Codigo</th>";
echo "<th>Seccion</th>";
echo "<th>Precio</th>";
echo "<th>Fecha</th>";
echo "<th>paisorigen</th>";
echo "<th>Precio</th>";
echo "</tr>";

while (($fila = mysqli_fetch_row($resultados))) {


    echo "<tr>";
    echo "<td>" . $fila[0] . "</td>";
    echo "<td>" . $fila[1] . "</td>";
    echo "<td>" . $fila[2] . "</td>";
    echo "<td>" . $fila[3] . "</td>";
    echo "<td>" . $fila[4] . "</td>";
    echo "<td>" . $fila[5] . " €</td>";
    echo "</tr>";

}

echo "</table>";
mysqli_close($conexion);
?>



</body>
</html>