<?php

require("conexion.php");

$sql="delete from contactos where Id=:contact_id";

$stmtEliminar=$conexion->prepare($sql);

$stmtEliminar->execute(array(":contact_id"=>$_GET['id']));

header("location:index.php");