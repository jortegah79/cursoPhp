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
$busqueda=$_GET['buscar'];
try{
$base=new PDO('mysql:host=localhost;dbname=PRUEBAS','root','');

//dar un valor para la base de datos.En la pagina oficial pone que tipo de valores puedes setear y con este le hacemos que si hay un error, nos lance una excepción
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//Ejecuta sentencias en la base de datos
$base->exec("SET CHARACTER SET utf8");

$sql="select NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN from ARTÍCULOS where NOMBREARTÍCULO=? ";

//Prepara la sentencia sobre el objeto PD0
$resultado= $base->prepare($sql);

//Ejecutas la sentencia preparada pasandole un arrya de objetos
$resultado->execute(array($busqueda));

//Sobre el objeto de los resultados, hacemos un fetch para obtener los resultados.
while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

echo "Nombre artículo: ".$registro['NOMBREARTÍCULO']."<br>Sección: ".$registro['SECCIÓN']. "<br>País de origen: ".
      $registro['PAÍSDEORIGEN'] . "<br>Precio: ".$registro['PRECIO']."<br>";

}

}catch(Exception $ex){
    die('Error: '.$ex->getMessage());
}finally{
    $base=null;
   
}

?>

</body>
</html>