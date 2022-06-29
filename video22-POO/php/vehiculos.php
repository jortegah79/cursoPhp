<?php

//El argumento parent::metodo() llama a un metodo 
//de la clase padre. Es equivalente a super() de java o javascript

class Coche
{
    protected $ruedas;
    protected $color;
    protected $motor;
    function Coche()
    {
        $this->ruedas = 4;
        $this->motor = 1600;
        $this->color = "azul";
    }
    function arrancar()
    {
        echo "Estoy arrancando<br/>";
    }
    function girar()
    {
        echo "Estoy girando<br/>";
    }
    function frenar()
    {
        echo "Estoy frenando<br/>";

    }
    function setColor($color,$nombreCoche){
        $this->color=$color;
        echo "El color del coche ahora es ".$this->color. " y el modelo es ".$nombreCoche."<br/>";
    }
    function getColor(){
        return $this->color;
    }
    function getRuedas(){
        return $this->ruedas;
    }
    

}
class Camion extends Coche{
    protected $carga= 1500;
    function Camion()
    {
        $this->ruedas = 8;
        $this->motor = 2600;
        $this->color = "negro";
    }
     function getCarga(){
        return $this->carga;
     }
     function setColor($color,$nombreCamion){
        $this->color=$color;
        echo "El color del camion ahora es ".$this->color. " y el modelo es ".$nombreCamion."<br/>";
    }
    function arrancar(){
        parent::arrancar();
        echo "Camion arrancado!";
    }
}
