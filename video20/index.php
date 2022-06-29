<?php

//***********************FUNCIONES........LA PRIMERA ES UNA FUNCION CON ALGUN PARAMETRO POR DEFECTO... */ */
function frase_mayus($frase,$conversion="true"){

    if($conversion){
       $frase= ucwords($frase);
    }else{
       $frase= strtoupper($frase);
    }
    return $frase;
}


$cosas="hola que tal?Me gusta mucho el zumo de limon<br/>";

echo frase_mayus($cosas);
echo frase_mayus($cosas,false);

//************************DESDE AQUI, PONEMOS UNA FUNCION CON UN PARAMETRO PASADO POR REFERENCIA......................VIDEO 21 PILDORAS-PHP */



function incrementa(&$valor1){//ahora lo que hace es actuar sobre la variable que le pasamos...sin importar el ámbito de esta...
   $valor1++;  
}
$numero=5;
echo "<br/>";
incrementa($numero);
incrementa($numero);
incrementa($numero);
incrementa($numero);
incrementa($numero);
incrementa($numero);
echo $numero;
echo "<br/>";

echo "<br/>";
echo "<br/>";

function cambia_mayus(&$param){

   $param=strtolower($param);
   $param=ucwords($param);
   return $param;
}

$cadena="hOlA mUnDO";
echo cambia_mayus($cadena)."</br>";