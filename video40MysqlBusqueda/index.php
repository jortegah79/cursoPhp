<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion_BBDD</title>
<?php
$dato_a_buscar = $_GET['buscar'];
$pagina_propia = $_SERVER['PHP_SELF'];//esto es para que funcione con la propia página.
function buscar_Datos($dato){

    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
        if (mysqli_connect_errno()) {
            echo "HAY UN ERROR CON LA CONEXION";
            exit;
        }
    mysqli_select_db($conexion, $db_nombre) or die(" No se encuentra la base de datos.");
    mysqli_set_charset($conexion, "utf-8"); 
    $query = "select * from ARTÍCULOS where NOMBREARTÍCULO like'%$dato%'";

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
}
if ($dato_a_buscar != null) {
    buscar_datos($dato_a_buscar);
}
else {
    echo "<form action='" . $pagina_propia . "' method='get'>
    <label>BUSCAR:<input type='text' name='buscar' id='buscar' placeholder='producto a buscar...'></label>
    <input type='submit' name='enviar'id='enviar'value='enviar'>
</form>";
}

?>
</head>

</body>
</html>