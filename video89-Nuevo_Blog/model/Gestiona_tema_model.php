<?php

include_once("Conexion.php");
class Gestiona_tema_model{

    private $conexion;

    public function __construct(){

        $this->conexion = Conexion::get_conexion();
    }

    /***
     * @author  jortegah79
     * 
     * Crea un nuevo tema en la bbdd.
     * 
     */

    public function create_tema($nombre,$descripcion)
    {        

        $sql = "insert into tema_tabla (nombre,descripcion) values(?,?)";

        $statement = $this->conexion->prepare($sql);

        $statement->execute(array($nombre,$descripcion));

    }

    /**
     * @author jortegah79
     * 
     * Obtiene los temas con sus parametros mas la fecha y usuario del ultimo mensaje.
     */


    public function obtiene_tema_con_datos($id_tema){

        $sql="select tema_tabla.id as id, tema_tabla.nombre as tema, tema_tabla.descripcion as descripcion,fecha, usuarios.user as usuario from contenido_tabla 
        join tema_tabla on tema_tabla.id=id_tema_tabla
        join usuarios on usuarios.id=id_usuario 
        where id_tema_tabla=".$id_tema." 
        order by fecha desc
        limit 1";

        $statement=$this->conexion->query($sql);

        $statement->execute();

        $resultado=$statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $resultado;        
        
    }

/*
*@author jortegah79
*
*  Obtiene todos los temas con su id,nombre y descripcion. Es para poder ir a los diferentes foros.
*/
    public function obtiene_temas(){

        $sql="select distinct tema_tabla.id as id, tema_tabla.nombre as tema, tema_tabla.descripcion as descripcion from tema_tabla ";

        $statement=$this->conexion->query($sql);

        $statement->execute();

        $resultado=$statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $resultado;        
        
    }
    
}
