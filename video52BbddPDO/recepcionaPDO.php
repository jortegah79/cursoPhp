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
$seccion=$_POST['seccion'];
$pais=$_POST['pais'];
try{
$base=new PDO('mysql:host=localhost;dbname=PRUEBAS','root','');

//dar un valor para la base de datos.En la pagina oficial pone que tipo de valores puedes setear y con este le hacemos que si hay un error, nos lance una excepción
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//Ejecuta sentencias en la base de datos
$base->exec("SET CHARACTER SET utf8");

//$sql="select NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN from ARTÍCULOS where NOMBREARTÍCULO= ?";
//esto es lo mismo pero con MARCADORES...
$sql="select NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN from ARTÍCULOSs where SECCIÓN=:nsec AND PAÍSDEORIGEN =:npais";


//Prepara la sentencia sobre el objeto PD0
$resultado= $base->prepare($sql);

//Ejecutas la sentencia preparada pasandole un arrya de objetos
//$resultado->execute(array($busqueda));
//Lo mismo pero con MARCADOR
$resultado->execute(array(":nsec"=>$seccion,":npais"=>$pais));

//Sobre el objeto de los resultados, hacemos un fetch para obtener los resultados.
while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

echo "Nombre artículo: ".$registro['NOMBREARTÍCULO']."<br>Sección: ".$registro['SECCIÓN']. "<br>País de origen: ".
      $registro['PAÍSDEORIGEN'] . "<br>Precio: ".$registro['PRECIO']."€<br><br><br>";     
}
}catch(Exception $ex){
    die('Error: '.$ex->getMessage()."<br>Linea:".$ex->getLine()." .Codigo:".$ex->getCode());
}finally{
    $base=null;   
}

?>

</body>
</html>