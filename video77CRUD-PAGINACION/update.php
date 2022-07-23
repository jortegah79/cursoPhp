<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Document</title>
    <style>
        H1{
            text-align:center;
            font-size:30px;
        }
        table {
            border: 3px solid #333;
            width: 300px;
            padding:5px;
            margin :0 auto;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 5px;
            text-align: center;
            border:3px solid #333;
        }

        tr {
            border: 2px solid blue;
        }
    </style>
</head>
<body>
    
    <h1>Actualiza los datos del contacto</h1>
    <form action="update.php" method="post">
        <table>
            <?php
                require("conexion.php");
if(!isset($POST['actualizar'])){
                $id=$_GET['id'];

                $sql="select * from contactos where Id=?";

                $pdoStatement=$conexion->prepare($sql);

                $pdoStatement->execute(array($id));

                $contacto=$pdoStatement->fetchObject();
}
            
        echo   ' <tr><td>Id</td><td><input type="number" value="'.$contacto->Id.'" disabled/></td></tr>';
        echo   ' <tr><td>Nombre</td><td><input type="text" value="'.$contacto->Nombre.'"/></td></tr>';
        echo   ' <tr><td>Apellido</td><td><input type="text" value="'.$contacto->Apellido.'"/></td></tr>';
        echo   ' <tr><td>Telefono</td><td><input type="text" value="'.$contacto->Telefono.'"/></td></tr>';
        echo   ' <tr><td>Email</td><td><input type="text" value="'.$contacto->Email.'"/></td></tr>';
        echo   ' <tr><td colspan=2><input type="submit" value="Actualizar" name="actualizar"/></td></tr>';
        ?>
        </table>
    </form>

    <?php
 if(isset($_POST['actualizar'])){

    $sql="update contactos set Nombre=:nom, Apellido=:ape,Telefono=:tel,Email=:mail where Id=:id";

    $pdoStatement=$conexion->prepare($sql);

    $pdoStatement->execute(array(":nom"=>$contacto->Nombre,":ape"=>$contacto->Apellido,":tel"=>$contacto->Telefono,":mail"=>$contacto->Email,":id"=>$contacto->Id));

    $pdoStatement->fetch();

    $pdoStatement->closeCursor();

    header("location:index.php");
 }



?>
</body>
</html>
