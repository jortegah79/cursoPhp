<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 
session_start();

if(!isset($_SESSION['usuario'])){

    header('location:index.html');

}
    echo  "<h1>USUARIO: ".$_SESSION['usuario']."</h1>";

?>
    
    
    <h3>Esta es una informacion registrada solo para ti...</h3>

    <p><a href="usuarios_logueados.php">volver</a></p>

<p><a href="cierre.php">CERRAR SESION</a></p>

</body>
</html>