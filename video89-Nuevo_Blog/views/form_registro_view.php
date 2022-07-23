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
        h2{
            color:red;            
        }
    </style>
</head>
<body>
    <header class="text-center">
        <h1 class="mt-5">REGISTRO USUARIO</h1>
        <H3>Introduce tus datos</H3>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 offset-md-2 col-md-8 p-4 ">
               <form action="../controller/registro_usuario_controller.php" method="post">
                <table class="container row">
                    <tr>
                        <td class="col-7 text-center lead">Nombre:</td>
                        <td class="col-5"><input id="nombre" name="nombre" type="text" /></td>
                    </tr>
                    <tr>
                        <td class="col-7 text-center lead">Apellido:</td>
                        <td class="col-5"><input id="apellido" name="apellido" type="text" /></td>
                    </tr>
                    <tr>
                        <td class="col-7 text-center lead">Correo:</td>
                        <td class="col-5 "><input id="correo" name="correo" type="mail" /></td>
                    </tr>
                    <tr>
                        <td class="col-7 text-center lead">Usuario:</td>
                        <td class="col-5"><input id="usuario" name="usuario" type="text" /></td>
                    </tr>
                    <tr>
                        <td class="col-7 text-center lead">Password:</td>
                        <td class="col-5 "><input id="password" name="password" type="password" /></td>
                    </tr>
                    <tr>
                        <td class="col-7 text-center lead">Introduce de nuevo tu password:</td>
                        <td class="col-5 "><input id="password2" name="password2" type="password" /></td>
                    </tr>
                    <tr ><td></td>
                        <td class="col-6 "><input class="btn btn-info"  type="submit" value="Enviar"name="registro_enviar"/><input class="btn btn-danger"  type="submit" value="Cancelar"name="registro_cancelar"/></td>
                    </tr>
                </table>
    </form>
            </div>
            <?php if (isset($_GET['error'])) {
                     echo "<h2>Ha habido un error en la contraseña. Deben ser las 2 iguales!</h2>";
                   }
            ?>
        </div>
    </main>
</body>
</html>
