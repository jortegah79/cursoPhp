<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flujo ejecución</title>
</head>
<body>

<?php

echo "Este es el primer mensaje <br>";
require("saludar.php");//asi es como importamos archivos externos.. y si hay error, no se continúa.
//include("saludar.php");//asi importamos archivos externos pero si hay error, igualmente se  realizan las acciones siguientes si es posible,

echo "Este es el segundo mensaje <br>";

saludo();
saludo();
saludo();

/**ambito variables... */

$nombre="juan";

function dameNombre(){
   global $nombre;//esto sirve para convertir una variable en global

   $nombre="maria";
}
dameNombre();
echo $nombre."<br>";



/******************EJEMPLO DE ESTATICAS */
function incrementaVariable(){
    static $contador=0; //con static hacemos que solo se cree 1 variable y el resto de veces ignora la inicializacion...
    $contador++;
    echo $contador."<br>";

}
incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();






?>
    
</body>
</html>