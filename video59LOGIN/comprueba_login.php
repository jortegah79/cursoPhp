<?php

try{

$base=new PDO("mysql:host=localhost;dbname=PRUEBAS","root","");

$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$base->exec ("set character set utf8");

$sql="select user,password from usuarios where user=:nom and password=:pass";

$sentencia=$base->prepare($sql);

//utilizamos HTMLENTITIES convierrte todos los caracteres aplicables a HTML
// Y EL BINDVALUE
$usuario=htmlentities($_POST['login']);

$password=htmlentities($_POST['password']);

//vincula un valor a un parametro

$sentencia->bindValue(":nom",$usuario);

$sentencia->bindValue(":pass",$password);

$sentencia->execute();

$num_registros=$sentencia->rowCount();

if($num_registros!=0){

session_start();

$_SESSION['usuario']=$_POST['login'];

header("location:usuarios_logueados.php");

}else{
  header("location:index.html");
}


}catch(Exception $e){

    die("Error: ".$e->getMessage());

}






