<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.imagenes{
    display:flex;
    flex-direction: row;
    flex-wrap: wrap;    
}
.imagenes img{
    width:500px;
    margin:50px auto; 
    border:5px solid black;
    border-radius: 1px 15% 15% 1px;
}
table{
    border:4px solid rgb(207, 112, 23);
    padding:20px;
    margin:20px auto;
    font-size: 1.3em;
    background:linear-gradient(15deg,#f8e48d,#fff6a1)
}
h1{
    text-align:center;
    color:#444;
}
.btn{
    font-size:1em;
    background:#ddd;
    color:#333;
    margin:5px auto;
}
.btn:hover{
   background:#333;
   color:#ddd;
}
.error{
    color:red;
}
    </style>
</head>
<body>
    <?php

    if(isset($_POST['enviar'])){
try{

    $base=new PDO("mysql:host=localhost;dbname=PRUEBAS","root","");
    
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $base->exec ("set character set utf8");
    
    $sql="select user,password from usuarios where user=:nom and password=:pass";
    
    $sentencia=$base->prepare($sql);
    
    $usuario=htmlentities($_POST['login']);
    
    $password=htmlentities($_POST['password']);
    
    $sentencia->bindValue(":nom",$usuario);
    
    $sentencia->bindValue(":pass",$password);
    
    $sentencia->execute();
    
    $num_registros=$sentencia->rowCount();
    
    if($num_registros!=0){
    
    session_start();
    
    $_SESSION['usuario']=$_POST['login'];

    setcookie("prueba",$_POST['login'],time()+30,"/");
    //tercer parametro es el tiempo y el cuarto  es path donde actuará la cookie


    
    }else{
        echo "<h1 class='error'>Error: Usuario o Contraseña incorrectos</h1>";
    }
    
    
    }catch(Exception $e){
    
        die("Error: ".$e->getMessage());
    
    }
    }
?>
<?php

if(!isset($_SESSION['usuario'])){
    include("formulario.html");
}else{
    echo "<h2>Usuario: ".$_SESSION['usuario']."</h2>";
}



if(isset($_COOKIE['prueba'])){
    echo "El usuario es ".$_COOKIE['prueba'];

    setcookie("prueba",$_POST['login'],time()-1,"/");

    echo "El usuario es ".$_COOKIE['prueba'];


}else{
    echo "La cookie no esta definida";
}?>
<h1>CONTENIDO DE LA WEB</h1>
<div class="imagenes">
    <img src="imagenes/1602443656877.jpg"/>
    <img src="imagenes/34312-increibles.jpg"/>
    <img src="imagenes/34321-increibles.jpg"/>
    <img src="imagenes/34350-increibles.jpg"/>
    <img src="imagenes/34351-increibles.jpg"/>
    <img src="imagenes/34365-increibles.jpg"/>
    
    <div>
</body>
</html>