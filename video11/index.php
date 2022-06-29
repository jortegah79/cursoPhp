<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPeraciones aritmeticas</title>
</head>
<body>
    <form method="post" action="" name="formulario1">
        <p><input type="number" name="num1" id="num1" placeholder="primer número"/>
        <input type="number" name="num2" id="num2" placeholder="segundo número"/>
       
        <select name="operacion" id="operacion">
        <option>suma</option>
        <option>resta</option>
        <option>multiplicacion</option>
        <option>division</option>
        <option>modulo</option>
        <option>incremento</option>
        <option>decremento</option>
        <option>potencia</option>
        </select>
</p><p>
        <input type="submit"  name="envia"id="envia" valor="envia"></p>
    </form>
<?php

require("./php/calculos.php");
if (isset($_POST["envia"])) {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    $resultado = calculo($num1, $num2, $operacion);
$aleatorio=rand($num1,$num2);
echo "Primero te devuelvo un número aleatorio... que és:".$aleatorio;
    echo "<h1>El resultado de la " . $operacion;
     if($operacion=="decremento" || $operacion=="incremento"){
       echo " del número ".$num1. " és: ".$resultado ."</h1>"; 
     }elseif($operacion=="potencia"){
      echo " del número ".$num1. " elevado a ".$num2." és: ".$resultado ."</h1>"; 
    }else{
       echo   " entre " . $num1 ." y " . $num2 . " es: " . $resultado . "</h1>";
     } 
}


?>
</body>
</html>