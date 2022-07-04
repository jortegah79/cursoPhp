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

if (!isset($_SESSION['usuario'])) {

    header('location:index.html');

}
echo "<h1>Bienvenido " . $_SESSION['usuario'] . "</h1>";

?>


    <h3>Esta es una informacion registrada solo para ti...</h3>


    <table>
        <tr><th colspan=3>ZONA USUARIOS REGISTRADOS:</th></tr>
        <tr><td><a href="usuarios_logueados2.php">Página 1</a></td><td><a href="usuarios_logueados3.php">Página 2</a></td><td ><a href="usuarios_logueados4.php">Página 3</a></td></tr>
    </table>
   

<p><a href="cierre.php">CERRAR SESION</a></p>

</body>
</html>