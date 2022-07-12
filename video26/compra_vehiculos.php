<?php

class Compra_vehiculos
{
    private $precio_base;
    private static $ayuda_compra=0;
    function __construct($gama)
    {
        if ($gama == "urbano") {
            $this->precio_base = 10000;
        }
        else if ($gama == "compacto") {
            $this->precio_base = 20000;
        }
        else if ($gama == "berlina") {
            $this->precio_base = 30000;
        }
    }
    function climatizador(){
        return $this->precio_base+=2000;
    }
    function navegador_gps(){
        $this->precio_base+=2500;
    }
    function tapiceria_cuero($color){
        if($color=="blanco"){
            $this->precio_base+=3000;
        }else if($color=="beige"){
            $this->precio_base+=3500;
        }else{
            $this->precio_base+=5000;
        }
    }
    static function descuento_gobierno(){
        if(date('m-d-y')>"05-01-22"){
            
              self::$ayuda_compra=4500;
        }
       
    }
    function precio_final(){
        return "El precio final de compra es ".($this->precio_base - self::$ayuda_compra)."€<br/>";//asi accedemos al valor estatico de la variable de clase...mediante operador self::
    
    }
}
