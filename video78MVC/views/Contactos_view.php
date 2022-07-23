<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <ul>
        <?php

        $contactos_model = new Contactos_model();

        $num_contactos = $contactos_model->get_num_contactos();

        $num_paginas = ceil($num_contactos / CONT_X_PAGE);

        if (isset($_GET['inicio'])) {

            $inicio = $_GET['inicio']*CONT_X_PAGE;

        } else {

            $inicio = 0;

        }

        for ($i = 0; $i < $num_paginas; $i++) {

            echo "<li><a  href='index.php?inicio=$i'>" . ($i + 1) . "</a></li> ";
        }

        $resultado = $contactos_model->get_contactos($inicio);

        ?>

    </ul>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th colspan=4></th>
            </tr>
        </thead>
        <?php
        foreach ($resultado as $contacto) :

        ?>
            <tr>
                <td> <?php echo $contacto['Id']; ?></td>
                <td> <?php echo $contacto['Nombre']; ?></td>
                <td> <?php echo $contacto['Apellido']; ?></td>
                <td> <?php echo $contacto['Telefono']; ?></td>
                <td> <?php echo $contacto['Email']; ?></td>
                <td><a href="./controller/Acciones_controller.php?elimina_id=<?php echo $contacto['Id'];?>">Eliminar</a></td>
                <td><a href="./controller/Actualiza_controller.php?actualiza_id=<?php echo $contacto['Id'];?>">Actualizar</a></td>
            </tr>
        <?php
        endforeach;
        ?>
        <form action="./controller/Acciones_controller.php" method="post">
        <tr>
            <td> <input type="text" name="id" /></td>
            <td> <input type="text" name="name" /></td>
            <td> <input type="text" name="surname" /></td>
            <td> <input type="text" name="tel" /></td>
            <td> <input type="text" name="mail" /></td>
            <td class="td-btn"colspan=2><input class="btn" type="submit" value="Nuevo" name="Nuevo"></td>
        </tr>
        </form>
    </table>
</body>
</html>