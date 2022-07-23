<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="Stylesheet" href="../css/index.css"/>
    <title>Document</title>
   
</head>

<body>

    <h1>Actualiza los datos del contacto</h1>
    <form action="Acciones_controller.php" method="post">
        <table>
            <?php
            $cont_model = new Contactos_model();
            $contacto = $cont_model->get_contacto($_GET['actualiza_id']);
            ?>
            <tr>
                <td>Id</td>
                <td><input type="number" value="<?php echo $contacto['Id']; ?>" name="id_act"  /></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" value="<?php echo $contacto['Nombre']; ?>" name="nombre" /></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" value="<?php echo $contacto['Apellido']; ?>" name="apellido" /></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="text" value="<?php echo $contacto['Telefono']; ?>"name="telefono" /></td></tr>
            <tr>
                <td>Email</td>
                <td><input type="text" value="<?php echo $contacto['Email']; ?>" name="email" /></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" value="Actualizar" name="actualizar" /></td>
            </tr>
        </table>
    </form>
   
</body>

</html>