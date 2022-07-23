<?php

include_once "Conexion.php";

class Gestiona_usuarios
{

    private $conexion;

    public function __construct()
    {

        $this->conexion = Conexion::get_conexion();
    }

    public function login_usuario(String $user, String $pass)
    {

        $sql = "select * from usuarios where user=:usu";

        $statement = $this->conexion->prepare($sql);

        $statement->execute(array(":usu"=>$user));

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        
        $registros = $statement->rowCount();

        if ($registros > 0) {
            
            $login = password_verify($pass, $resultado['password']);

            if ($login) {

                return $user;

            } else {

                return false;

            }
        }
        return false;
    }
    public function obtiene_usuario(String $user)
    {

        $sql = "select id,nombre,apellido,correo,user from usuarios where user='" . $user."'";

        $statement = $this->conexion->query($sql);

        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        return $resultado;

    }

    public function create_usuario(String $nombre,String $apellido,String $mail,String $user,String $password){

        
        $sql = "insert into usuarios (nombre,apellido,correo,user,password,admin) values (:nom,:ape,:mail,:user,:pass,false)";
        
        $statement = $this->conexion->prepare($sql);

        $statement->execute(array( ":nom" => $nombre, ":ape" => $apellido, ":mail" => $mail, ":user" => $user, ":pass" => $password));

    }
}
