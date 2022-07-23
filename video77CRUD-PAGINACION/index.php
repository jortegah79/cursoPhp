<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" rel="stylesheet" />
    <style>
        table {
            border: 3px solid #333;
            width: 100%;
        }

        td,
        th {
            padding: 5px;
            text-align: center;
            border-left: 2px solid blue;
            ;

        }

        tr {
            border: 2px solid blue;
        }
    </style>
    <title>Document</title>
</head>

<body class="bg-light">

    <header>
        <h1 class="display-3 text-center">CRUD</h1>
        <h2 class="display-4 text-center">create-read-update-delete</h2>
    </header>
    <main class="container-fluid ">
        <div class="row">
            <form action="index.php" class="col-8 offset-2" method='post'>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th colspan=2></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("conexion.php");
                        $inicio = 0;
                         $row_x_page = 5;
                        if(isset($_GET['inicio'])){
                            $inicio=$_GET['inicio']*$row_x_page ;
                        }else{
                            $inicio=0;
                        }
                       
                        $sql_count = "select * from contactos";
                        $stmtDatos = $conexion->prepare($sql_count);
                        $stmtDatos->execute();
                        $num_contactos = $stmtDatos->rowCount();
                        $paginas = ceil($num_contactos / $row_x_page);
                        for ($i = 0; $i < $paginas; $i++) {
                            echo "<a href='index.php?inicio=$i'>     $i    </a>    ";
                        }

                        $sql_lista = "select * from contactos limit " . $inicio . "," . $row_x_page;
                        $stmtDatos = $conexion->prepare($sql_lista);
                        $stmtDatos->execute();


                        while ($contacto = $stmtDatos->fetchObject()) {

                            echo " <tr>";
                            echo  "<td>$contacto->Id</td>";
                            echo  "<td>$contacto->Nombre</td>";
                            echo  "<td>$contacto->Apellido</td>";
                            echo  "<td>$contacto->Telefono</td>";
                            echo  "<td>$contacto->Email</td>";
                            echo  "<td>";
                            echo "<a href='eliminar.php?id=$contacto->Id'><input name='delete'type='button' value='Eliminar' /></a>";
                            echo " </td>";
                            echo "<td>";
                            echo "<a href='update.php?id=$contacto->Id'><input name='update' type='button' value='Update' /></a>";
                            echo "</td>";
                            echo "</tr>";
                        } ?>
                        <tr>
                            <td>
                                <input name="id" type="number" />
                            </td>
                            <td>
                                <input name="name" type="text" />
                            </td>
                            <td>
                                <input name="surname" type="text" />
                            </td>
                            <td>
                                <input name="tel" type="number" />
                            </td>
                            <td>
                                <input name="mail" type="email" />
                            </td>
                            <td>
                                <input name="nuevo" type="submit" value="nuevo" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </main>
    <?php
    if (isset($_POST['nuevo'])) {

        $nombre = $_POST['name'];

        $apellido = $_POST['surname'];

        $telefono = $_POST['tel'];

        $mail = $_POST['mail'];

        if ($_POST['id']) {

            $id = $_POST['id'];

            $sql = "insert into contactos   values(:id,:nom,:ape,:tel,:mail)";

            $pdoStatement = $conexion->prepare($sql);

            $pdoStatement->execute(array(":id" => $id, ":nom" => $nombre, ":ape" => $apellido, ":tel" => $telefono, ":mail" => $mail));
        } else {

            $sql = "insert into contactos (Nombre,Apellido,Telefono,Email)  values(:nom,:ape,:tel,:mail)";

            $pdoStatement = $conexion->prepare($sql);

            $pdoStatement->execute(array(":nom" => $nombre, ":ape" => $apellido, ":tel" => $telefono, ":mail" => $mail));
        }

        $pdoStatement->closeCursor();

        header("location:index.php");
    }
    ?>
</body>

</html>