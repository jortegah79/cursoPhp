<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.1" name="viewport" />
    <link rel="Stylesheet" href="../css/header.css"/>
    <link rel="Stylesheet" href="../css/post.css"/>   
    <title>Post view</title>   
</head>
<body>
<header>
    <div class="titulo">
        <h1>LA BLOGUERIA</h1>
    </div><nav ><a href="../controller/session_in_controller.php">Log In</a><a href="../controller/session_out.php">Log out</a></nav>
</header>
<?php

include_once("../controller/start_session.php");

if(isset($_SESSION['usuario'])){

    echo "<h2>Bienvenido :".strtoupper($_SESSION['usuario'])."</h2>";

}

if (isset($_SESSION['usuario'])) {

    echo "<a class='center' href='../controller/post_controller.php?nuevo_tema=" . $tema . "'>Escribir un nuevo post.</a>";

} else {

    echo "<a class='center' href='../controller/login_controller.php?tema=" . $tema . "'>Haz login para poder escribir un post</a>";

}
foreach ($posts as $post):
?>
<div class="post">
          <div class="cabecera">
              <div><?php echo $post['titulo']; ?></div><div><?php echo $post['fecha']; ?></div>
          </div>        
            <h3><?php echo $post['user']; ?></h3>
            <p><?php echo $post['comentarios']; ?></p>
            <?php if ($post['imagen'] != "") {
    echo "<img height='300px' src='../images/" . $post['imagen'] . "' alt='imagen del usuario " . $post['user'] . "'>";
}
?>
</div>
<?php
endforeach;

?>
<nav><a style="background:#333;padding:10px;"href="../index.php">Al inicio</a></nav>
</body>
</html>
