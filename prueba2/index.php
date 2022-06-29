<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<style>
    .resaltar{
        color:#f00;
        font-weight: bold;

    }
</style>
<body>
<h1> pruebecilla</h1>
<?php

 echo "<p class='resaltar'>Esto es un ejemplo de frase</p><br>";
$string1="casa";
$string2="Casa";

$resultado=strcmp($string1,$string2);
echo "El resultado es diferentes:$resultado <br>";
$resultado1=strcasecmp($string1,$string2);
echo "El resultado es iguales sin discriminar mayusculas:$resultado1 <br>";

if(strcasecmp($string1,$string2)){
    echo "No son iguales<br>";
}else{
    echo"son iguales<br>" ;
}

$texto= strcmp($string1,$string2)?"No son estrictamente iguales":"son iestrictamente iguales";
echo $texto . "<br>";
//si strcmp=>>>si devuelve 0 es por que son iguales.. y si devuelve 1 son diferentes.es como el metodo compareTo de java

//si strcasecmp devuelve 1 es porque son diferentes...y si devuelve 0 es porque sin iguales sin importar las mayusculas.

if("Casa"===$string2){
    echo "Son iguales <br>";

}else{
    echo "son diferentes <br>";
}





?>
    
</body>
</html>