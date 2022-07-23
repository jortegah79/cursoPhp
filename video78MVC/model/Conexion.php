<?php

require_once("config.php");

class Conexion{

    public static function connect(){

        try {

            $conn = new PDO(DB_HOST, DB_USER, DB_PASS);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }
}
