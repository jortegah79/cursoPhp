<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css"/>
</head>
<body>
    
<?php
//creamos un objeto de tipo mysqli con los 4 parametros que necesita.
$conexion=new mysqli("localhost","root","","PRUEBAS");

//parametro de la clase mysqli
if($conexion->connect_errno){
    echo "Falló la conexión ", $conexion->connect_errno;
}
$conexion->set_charset("utf-8");

$sql="select * from ARTÍCULOS";

//ahora llamamos a la funcion query..
$resultados=$conexion->query($sql);

if($conexion->connect_errno){
    die($conexion->error);
}

echo "<table>"; 
echo "<tr>";  
echo "<th>Codigo</th>"; 
echo "<th>Seccion</th>";    
echo "<th>NombreArtículo</th>";    
echo "<th>Fecha</th>";  
echo "<th>paisorigen</th>"; 
echo "<th>Precio</th>";  
echo "</tr>";
while($fila=$resultados->fetch_assoc()){

echo "<tr>";
echo "<td>" . $fila['codigo'] . "</td>";
echo "<td>" . $fila['SECCIÓN'] . "</td>";
echo "<td>" . $fila['NOMBREARTÍCULO'] . "</td>";
echo "<td>" . $fila['FECHA'] . "</td>";
echo "<td>" . $fila['PAÍSDEORIGEN'] . "</td>";
echo "<td>" . $fila['PRECIO'] . "€</td>";
echo "</tr>";
}

echo "</table>";

$conexion->close();



?>
</body>
</html>