<?php
require_once("Conexion.php");

class Contactos_model
{

    protected $db;

    protected $contactos;

    public function __construct()
    {

        $this->db = Conexion::connect();

        $this->contactos = [];
    }

    public function get_contactos($inicio)
    {

        $resultset = $this->db->query("select * from contactos limit " . $inicio . "," . CONT_X_PAGE);

        while ($fila = $resultset->fetch(PDO::FETCH_ASSOC)) {

            $this->contactos[] = $fila;
        };

        return $this->contactos;
    }

    public function get_contacto($id)
    {

        $resultset = $this->db->query("select * from contactos where Id=" . $id);

        $fila = $resultset->fetch(PDO::FETCH_ASSOC);

        return $fila;
    }

    /**
     * @author Jortegah
     * @method Contabiliza los contactos totales  
     */

    public function get_num_contactos()
    {

        $resultset = $this->db->query("select * from contactos");

        return $resultset->rowCount();
    }

    public function delete_contacto($id)
    {

        $this->db->query("delete from contactos where id=" . $id);

        if ($this->db->errorCode()) {
            return "Error: " . $this->db->errorCode();
        } else {
            return true;
        }
    }

    public function update_contacto($nombre, $apellido, $telefono, $email, $id)
    {

        $this->db->query("update contactos set Nombre='$nombre',Apellido='$apellido',Telefono='$telefono',Email='$email' where Id=$id");

        if ($this->db->errorCode()) {
            return "Error: " . $this->db->errorCode();
        } else {
            return true;
        }
    }

    public function new_contacto($nombre, $apellido, $telefono, $email, $id)
    {
        if(!strcasecmp($id,"")){
            
            $this->db->query("insert into contactos (Nombre,Apellido,Telefono,Email) values('$nombre','$apellido','$telefono','$email')"); 
        
        }else{
        
            $this->db->query("insert into contactos values($id,'$nombre','$apellido','$telefono','$email')"); 
        
        }
        
    }   
}
