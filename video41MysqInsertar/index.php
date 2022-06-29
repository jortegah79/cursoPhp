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
    <form action="mostrar_datos.php" method="get">
        <h3>INTRODUCE DATOS</h3>
        <label>Código artículo:<input type="text" name="codigo" id="codigo"></label><br>
        <label>Nombre artículo:<input type="text" name="nombre" id="nombre"></label><br>
        <label>Sección:<input type="text" name="seccion" id="seccion"></label><br>
        <label>Fecha:<input type="text" name="fecha" id="fecha"></label><br>
        <label>País:<input type="text" name="pais" id="pais"></label><br>
        <label>Precio:<input type="text" name="precio" id="precio"></label><br>
        <div >
        <input class="btn"type="submit" value="nuevo"name="nuevo"id="nuevo">
        <input class="btn"type="submit" value="buscar"name="buscar"id="buscar">
        </div><div>
        <input class="btn"type="submit" value="mostrar"name="mostrar"id="mostrar">
        <input class="btn" type="submit" value="borrar"name="borrar"id="borrar"></div>
        <div><input class="btn"type="submit" value="editar" name="editar"></div>
    </form>


</body>
</html>