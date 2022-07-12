<?php

try{
$conecta=new PDO('mysql:host=localhost;dbname=PRUEBAS',"root","");

$conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$usuario=htmlentities($_POST['login']);

//ENCRIPTAMOS UNA CONTRASEÑA(Campo del formulario, modo de encriptacion)
$pass=password_hash(htmlentities($_POST['pass']),PASSWORD_DEFAULT);

$sql="insert into usuarios (user,password) values('$usuario','$pass')";

$accion=$conecta->prepare($sql);

$conecta->query($sql);

echo "El usuario ha sido insertado.";

echo "<a href='index.html'>Volver al inicio</a>";

}catch(Exception $ex){

    echo  $ex->getMessage();

}