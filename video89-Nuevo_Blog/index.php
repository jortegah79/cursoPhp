<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>La blogueria</title>
    <link rel="Stylesheet" href="./css/index.css"/>   
</head>
<body>
    <header>
        <?php include_once("./controller/start_session.php");?>
<div class="titulo">
    <h1>LA BLOGUERIA</h1>
    </div><nav ><a href="./controller/login_controller.php?login">Log In</a><a href="./controller/login_controller.php?logout">Log out</a></nav>
    </header>

<?php 
if(isset($_SESSION['usuario'])){
    echo "<h2>Bienvenido :".strtoupper($_SESSION['usuario'])."</h2>";
}
include_once("./controller/index_controller.php");

?>
</div> 
</body>
</html>
