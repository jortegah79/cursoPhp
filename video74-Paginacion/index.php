<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="./css/index.css" />
    <title>Document</title>
</head>

<body>
    <h1>EJEMPLO DE PAGINACIÓN</h1>
    <?php

    require("Productos.php");

    $productos = new Productos();

    $num_productos = $productos->get_num_productos();

    $inicio = 0;

    $paginas = ceil($num_productos / ART_X_PAGE);

    if (isset($_GET['inicio'])) {

        $inicio = ($_GET['inicio']) * ART_X_PAGE;
    }

    $resultado = $productos->get_productos($inicio);

    ?>

    <h2>Hay <?php echo $num_productos; ?> productos disponibles en la base de datos</h2>

    <ul>
        <?php

        for ($i = 0; $i < $paginas; $i++) {

            if ($i == 0) {

                echo "<li><a  href='index.php?inicio=$i'>Inicio</a></li>  ";
            } else if ($i == $paginas - 1) {

                echo "<li><a  href='index.php?inicio=$i'>Última</a></li>  ";
            } else {

                echo "<li><a  href='index.php?inicio=$i'>$i</a></li>  ";
            }
        }

        ?>

    </ul>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Articulo</th>
                <th>Seccion</th>
                <th>Pais</th>
                <th>Fecha</th>
                <th>Precio</th>
            </tr>
        </thead>
        <?php
        foreach ($resultado as $producto) :
        ?>
            <tr>
                <td> <?php echo $producto['codigo']; ?></td>
                <td> <?php echo $producto['NOMBREARTÍCULO']; ?></td>
                <td> <?php echo $producto['SECCIÓN']; ?></td>
                <td> <?php echo $producto['PAÍSDEORIGEN']; ?></td>
                <td> <?php echo $producto['FECHA']; ?></td>
                <td> <?php echo $producto['PRECIO'] . " €"; ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>

</body>

</html>