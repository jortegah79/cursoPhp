<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$codigo=(int)$_POST['codigo'];
$nombre=$_POST['nombre'];
$seccion=$_POST['seccion'];
$fecha=$_POST['fecha'];
$pais=$_POST['pais'];
$precio=$_POST['precio'];

try{
$base=new PDO('mysql:host=localhost;dbname=PRUEBAS','root','');

$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

if(isset($_POST['nuevo'])){
    $sql="insert into ARTÍCULOS (codigo,SECCIÓN,NOMBREARTÍCULO,FECHA,PAÍSDEORIGEN,PRECIO) 
    values(:cod,:sec,:nom,:fec,:pais,:prec)";
    $texto="insercion realizada";
$resultado= $base->prepare($sql);
$resultado->execute(array(":cod"=>$codigo,":sec"=>$seccion,":nom"=>$nombre,":fec"=>$fecha,":pais"=>$pais,":prec"=>$precio));
}
if(isset($_POST['eliminar'])){
    $sql="delete from ARTÍCULOS where codigo=:cod";
    $texto="Elemento eliminado";    
$resultado= $base->prepare($sql);
$resultado->execute(array(":cod"=>$codigo));
}
$sql="select *  from ARTÍCULOS";
$resultado= $base->prepare($sql);
$resultado->execute();
echo "<table>
        <th><td>codigo</td><td>seccion</td><td>articulo</td><td>fecha</td><td>pais</td><td>precio</td></th>";
while($file=$resultado->fetch()){
echo "<tr>";
echo "<td>".$file['codigo']."</td>";
echo "<td>".$file['SECCIÓN']."</td>";
echo "<td>".$file['NOMBREARTÍCULO']."</td>";
echo "<td>".$file['FECHA']."</td>";
echo "<td>".$file['PAÍSDEORIGEN']."</td>";
echo "<td>".$file['PRECIO']."</td>";
echo "</tr>";
}
ECHO "</table>";
echo $texto."<br><a href='index.php'>VOLVER A INICIO</a>";

}catch(Exception $ex){
    die('Error: '.$ex->getMessage()."<br>Linea:".$ex->getLine()." .Codigo:".$ex->getCode());
}finally{
    $base=null;   
}

?>

</body>
</html>