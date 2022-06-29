<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Coches</h1>
    <?php

require("./php/vehiculos.php");
  $renault=new Coche();
  $pegaso=new Camion();
   echo "<h2>CANTIDAD DE RUEDAS</h2>";
   echo "El coche tiene ".$renault->getRuedas()." ruedas</br>";
   echo "El camión tiene ".$pegaso->getRuedas()." ruedas</br>";
echo "El camión puede llevar una carga de ".$pegaso->getCarga()." kilos<br/>";
 
 $renault->setColor("amarillo","alpine");
 echo "El coche tiene el color ".$renault->getColor()."<br/>";
  $pegaso->setColor("marron","ferrari");
  $pegaso->arrancar();
    ?>
</body>
</html>