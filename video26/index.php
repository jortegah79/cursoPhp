<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>COMPRA VEHICULOS</h1>
    <?php
require("compra_vehiculos.php");
$compra_antonio=new Compra_vehiculos("compacto");
$compra_antonio->climatizador();
$compra_antonio->tapiceria_cuero("blanco");
echo "Antonio: ".$compra_antonio->precio_final();
$compra_ana=new Compra_vehiculos("compacto");
$compra_ana->climatizador();
$compra_ana->tapiceria_cuero("rojo");
echo "Ana: ".$compra_ana->precio_final();

?>
</body>
</html>