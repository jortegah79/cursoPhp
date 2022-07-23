<?php

require_once "./model/Gestiona_tema_model.php";

$gtm = new Gestiona_tema_model();

//obtenemos los temas para el select que selecciona y otro con otros datos extra como fecha y usuario.

$temas = $gtm->obtiene_temas();

$tema_datos = [];

foreach ($temas as $tema) {

    $tema_datos[]= $gtm->obtiene_tema_con_datos($tema['id']);
}

require_once "./views/principal_view.php";
