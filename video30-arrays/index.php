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

$semana[] = "domingo";
$semana[] = "lunes";
$semana[] = "martes";
$semana[] = "miercoles";
$semana[] = "jueves";

echo $semana[3];

$nombres["padre"] = "Antonio";
echo "<br>";
$nombres["madre"] = "carmen";
echo "<br>";
echo $nombres["padre"];
echo "<br>";

if (is_array($nombres)) {
    echo "efectivamente es un array<br>";
}
foreach ($nombres as $clave => $valor) {
    echo $clave . "---->" . $valor . "<br>";
}
$frutas = array("citrico" => "limon", "dulce" => "fresa");
foreach ($frutas as $tipo => $fruta) {
    echo "El tipo de fruta $tipo seleccionado es $fruta";
    echo "<br>";
}


$hoy=date("d-m-Y H:i:s");
echo $hoy;
echo "<br>";
$cumple=date("d-m-Y",mktime(0,0,0,4,14,1979));
$diferencia=date_diff(new DateTime($hoy),new DateTime($cumple));
echo "Tienes ".$diferencia->format('%y años');
$prueba[]="Carne de Angus";
$prueba[]="Bacon";
$prueba[]="Queso havart";
$prueba[]="Tomate";
$prueba[]="Cebolla caramelizada";
$prueba[]="Salsa";
$prueba[]="Lechuga";
$prueba[]="Toppings";
$prueba[]="Patatas fritas";

echo "<h1>NUESTRO MENÚ ESTRELLA DE HOY ES LA:<br><span style='color:green;'>HAMBURGUESA  BATAGLIA</span></h1>";
echo "<br>";
echo "<h2 >Ingredientes</h2>";
foreach($prueba as $elemento){
    echo "<h3>$elemento</h3>";
    
}
?>
</body>
</html>
