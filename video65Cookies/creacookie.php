<?php
echo $_GET['idioma'];
setcookie("idioma_seleccionado",$_GET['idioma'],time()+86400);

 header("location:ver_cookie.php");

