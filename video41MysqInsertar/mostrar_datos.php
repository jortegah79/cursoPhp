<html>
<head>
    <link rel="Stylesheet" href="style.css"/>
</head>
<?php
require "datos_conexion.php";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
if (mysqli_errno($conexion)) {
    echo "Ha habido un error en la conexión";
    exit;
}

if (isset($_GET['buscar'])) {
    $nombre = $_GET['nombre'];

    $queryBusquedaArt = "select * from ARTÍCULOS WHERE NOMBREARTÍCULO LIKE '%$nombre%'";

    $resultados = mysqli_query($conexion, $queryBusquedaArt);
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

}
if (isset($_GET['nuevo'])) {
    $seccion = $_GET['seccion'];
    $nombre = $_GET['nombre'];
    $fecha = $_GET['fecha'];
    $pais = $_GET['pais'];
    $precio = (double) $_GET['precio'];
    if(($_GET['codigo']!=null)){
    $codigo=(int)$_GET['codigo'];    
    $queryIntroduce = "INSERT INTO ARTÍCULOS (codigo,SECCIÓN,NOMBREARTÍCULO,FECHA,PAÍSDEORIGEN,PRECIO) values($codigo,'$seccion','$nombre','$fecha','$pais','$precio')";
    }else{
    $queryIntroduce = "INSERT INTO ARTÍCULOS (SECCIÓN,NOMBREARTÍCULO,FECHA,PAÍSDEORIGEN,PRECIO) values('$seccion','$nombre','$fecha','$pais','$precio')";
}
    $resultados = mysqli_query($conexion, $queryIntroduce);
    
    echo " Han sido afectadas ".mysqli_affected_rows($conexion)." lineas";

    mysqli_close($conexion);
}
if (isset($_GET['mostrar'])) {
    $queryBusqueda = "select * from ARTÍCULOS";
    $resultados = mysqli_query($conexion, $queryBusqueda);
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
        echo "<td>" . $fila[5] . "</td>";
        echo "</tr>";

    }

    echo "</table>";

    
}
if (isset($_GET['borrar'])) {
    $codigo=(int)$_GET['codigo'];
    $queryBorrar = "delete  from ARTÍCULOS where codigo=$codigo";
    $resultados=mysqli_query($conexion,$queryBorrar);
   
        echo "Han sido borradas ".mysqli_affected_rows($conexion) . " entradas";
        mysqli_close($conexion);
}
if (isset($_GET['editar'])) {
    $codigo=(int)$_GET['codigo'];
    $seccion = $_GET['seccion'];
    $nombre = $_GET['nombre'];
    $fecha = $_GET['fecha'];
    $pais = $_GET['pais'];
    $precio =$_GET['precio'];    
    $queryActualiza = "update ARTÍCULOS set SECCIÓN='$seccion',NOMBREARTÍCULO='$nombre',FECHA='$fecha',PAÍSDEORIGEN='$pais',PRECIO='$precio' where codigo=$codigo";
    $resultados=mysqli_query($conexion,$queryActualiza);
    echo "Se han actualizado ". mysqli_affected_rows($conexion). " registros";

mysqli_close($conexion);
   
}

echo "<a href='index.php'>VOLVER A INICIO</a>";
?>
</html>