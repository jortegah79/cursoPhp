
<?php
require"DevuelveProductos.php";
$pais=$_GET['buscar'];


$productos=new DevuelveProductos();

$array_productos=$productos->get_productos($pais);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>BUSCA ARTÍCULOS POR PAÍS:</h2><br>
<form action="index.php" method="get">
<label>Introduce país:<input type="text" name="buscar"></label>
<input type="submit" name="enviando" value="Envia"/>

</form>

    <?php
    
echo "<h2>ARTÍCULOS ENCONTRADOS:</h2>";
echo "<table>";

foreach($array_productos as $elemento){

echo "<tr>";
echo "<td>".$elemento['codigo']."</td>";
echo "<td>".$elemento['NOMBREARTÍCULO']."</td>";
echo "<td>".$elemento['SECCIÓN']."</td>";
echo "<td>".$elemento['FECHA']."</td>";
echo "<td>".$elemento['PAÍSDEORIGEN']."</td>";
echo "<td>".$elemento['PRECIO']."</td>";
echo "</tr>";

}
echo "</table>";




?>
</body>
</html>