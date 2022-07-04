<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Document</title>
    <style>
h1{
    text-align: center;
}
div{
   display:flex;
   justify-content: center;
}
img{
    height:100px;
    margin:20px;
}

    </style>
</head>
<body>
    <?php
if(isset($_COOKIE['idioma_seleccionado'])){

    if($_COOKIE['idioma_seleccionado']=="es"){

        header("location:spanish.php");

    }elseif($_COOKIE['idioma_seleccionado']=="en"){

        header("location:english.php");

    }

}
    ?>
    <h1>Escoge idioma...</h1>
    <div>
       <a href="creacookie.php?idioma=es"><img alt="Bandera españa" src="imagenes/spain.png" /></a> 
        <a href="creacookie.php?idioma=en"><img alt="Bandera inglaterra" src="imagenes/english.png" /></a> 
    </div>
</body>
</html>
