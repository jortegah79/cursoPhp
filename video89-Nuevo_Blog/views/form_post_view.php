<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link crossorigin="anonymous"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
          rel="stylesheet" />
    <title>Registro Usuario</title>
    <style>
        body{
            background:linear-gradient(78deg,#6699dd,gray,pink);
            font-size: large;
        }
        table{
            border:5px solid #333;
            padding:40px;
            background:coral;
        }
    </style>
</head>
<body>
    <header class="text-center">
        <h1 class="mt-5">NUEVO POST</h1>
        <H3>Introduce tu nuevo post.</H3>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 offset-md-3 col-md-6 p-4 ">
                <form action="../controller/post_controller.php" method="post" enctype="multipart/form-data">
                <table class="container row">
                    <?php include_once "../controller/start_session.php";
if (isset($_SERVER['usuario'])) {
    echo "<h2>Usuario: " . $_SESSION['usuario'] . "</h2>";
}
?>
                    <tr>
                        <td class="  lead">Titulo:</td>
                    </tr><tr>
                        <td ><input id="titulo" name="titulo" type="text" /></td>

                    </tr>
                    <tr>
                        <td  lead">Comentarios:</td>
                    </tr>
                    <tr> <td ><textarea cols="30" rows="8" name="comentarios" id="comentarios" ></textarea></td>
                    </tr>
                    <tr>
                        <td class="lead">Introduce una imagen menor a 2MB:</td></tr>
                        <tr>
                        <td ><input id="imagen" name="imagen" type="file" /></td>
                    </tr>

                    <tr >
                        <td ><input class="btn btn-info"  type="submit" value="Enviar"name="enviar"/><input class="btn btn-danger"  type="submit" value="Cancelar"name="cancelar"/></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['usuario']; ?>"/></td>
                        <td><input type="hidden" name="tabla" id="tabla" value="<?php echo $_GET['tema']; ?>"/></td>
                    </tr>
                </table>
                    </form>
            </div>
        </div>
    </main>
</body>
</html>
