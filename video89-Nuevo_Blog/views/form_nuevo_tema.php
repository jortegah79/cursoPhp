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
          <link rel="Stylesheet" href="../css/header.css"/>
          <link rel="Stylesheet" href="../css/formulario.css"/>
    <title>Registro Usuario</title>
</head>
<body>
    <header>
<div class="titulo">
<h1>LA BLOGUERIA</h1>
    </div><nav ><a href="./controller/session_in_controller.php">Log In</a><a href="./controller/session_out_controller.php">Log out</a></nav>
    </header>

    <main class="container">
    <div class="text-center">
        <h1 class="mt-5">NUEVO TEMA</h1>
        <H3>Introduce el nuevo tema y su descripción.</H3>
        <div>
        <div class="row">
            <div class="col-12 offset-md-3 col-md-6 p-4 ">
               <form action="../controller/nuevo_tema_controller.php" method="post">
                <table >
                    <tr >
                        <td class="text-center lead">Titulo:</td>
                        <td ><input id="titulo" name="titulo" type="text" /></td>
                    </tr>
                    <tr >
                        <td class=" text-center lead">Comentarios:</td>
                        <td ><textarea rows="8"id="comentarios" name="comentarios" ></textarea></td>
                    </tr>

                    <tr><td></td>

                        <td ><input class="btn btn-info"  type="submit" value="Enviar"name="enviar"/><input class="btn btn-danger"  type="submit" value="Cancelar"name="cancelar"/></td>
                    </tr>

                </table>
                <input type="hidden" name="tema" value="<?php echo $_GET['tema']; ?>"/>
            <form>

            </div>
        </div>
        <?php if (isset($_GET['error'])) {
    echo "<h2>Error en usuario o contraseña</h2>";
}
?>
    </main>
</body>
</html>
