<?php

include_once "Conexion.php";

class Gestiona_post_model
{

    private $conexion;

    public function __construct()
    {

        $this->conexion = Conexion::get_conexion();

    }

    public function obtiene_posts(int $id)
    {

        $sql = "select c.titulo,u.user,c.fecha,c.comentarios,c.imagen  from contenido_tabla c
        join usuarios u on u.id=c.id_usuario
        where id_tema_tabla=" . $id . " order by fecha desc";

        $statement = $this->conexion->query($sql);

        $statement->execute();

        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function nuevo_post(String $titulo,String $comentarios,int  $tema, int $usuario,String $ruta_imagen = "")
    {

        $sql = "insert into contenido_tabla (titulo,comentarios,id_tema_tabla,id_usuario,imagen) values(:tit,:com,:tem,:id,:img)";
      
        $statement = $this->conexion->prepare($sql);

        $statement->execute(array(":tit" => $titulo, ":com" => $comentarios,":tem"=>$tema,":id"=>$usuario,":img"=>$ruta_imagen));

    }

}
