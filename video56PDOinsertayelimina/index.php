<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercion datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="recepcionaPDO.php" method="post">
        <h3>INTRODUCE DATOS</h3>
        <table>

        <tr><td>Código artículo:</td><td><input type="text" name="codigo" id="codigo"></td></tr>
        <tr><td>Nombre artículo:</td><td><input type="text" name="nombre" id="nombre"></td></tr>
        <tr><td>Sección:</td><td><input type="text" name="seccion" id="seccion"></td></tr>
        <tr><td>Fecha:</td><td><input type="text" name="fecha" id="fecha"></td></tr>
        <tr><td>País:</td><td><input type="text" name="pais" id="pais"></td></tr>
        <tr><td>Precio:</td><td><input type="text" name="precio" id="precio"></td></tr>
        <tr></td><td><td><input type="submit" value="nuevo"name="nuevo"id="nuevo"><input type="submit" value="eliminar"name="eliminar"id="eliminar"></td></tr>
</table>
    </form>


</body>
</html>