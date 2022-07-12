<?php

try {
    $pass=$_POST['pass2'];

    $conection = new PDO('mysql:host=localhost;dbname=PRUEBAS', "root", "");

    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "select user,password from usuarios where user=:log";

    $sentencia = $conection->prepare($sql);

    $sentencia->execute(array(":log" => $_POST['login2']));

    $file = $sentencia->fetch(PDO::FETCH_ASSOC);
       
    if (count($file) != 0) {

        //CON ESTO COMPROBAMOS UNA CONTRASEÑA ENCRIPTADA(contraseña login, contraseña bbdd encriptada)
        if(password_verify($pass,$file['password'])){

            echo "<h1>Usuario correcto</h1><br>";
            echo "<h1>Bienvenido " . $_POST['login2'] . "</h1>";
        }else{
            
            echo "Contraseña incorrecta!";
        }

    } else {

        echo "El usuario no está registrado";
    }
    echo "<a href='index.html'>Volver al inicio</a>";
} catch (Exception $ex) {

    $ex->getMessage();

}
