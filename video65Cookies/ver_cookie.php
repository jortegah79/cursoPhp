<?php
if (!$_COOKIE['idioma_seleccionado']) {

    header("location:index.html");

} else {

    if ($_COOKIE['idioma_seleccionado'] == "es") {

        header("location:spanish.php");

    } elseif ($_COOKIE['idioma_seleccionado'] == "en") {

        header("location:english.php");

    }
}
