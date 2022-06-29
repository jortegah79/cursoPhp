<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="StyleSheet" href="./css/index.css"/>
</head>
<body>
    <h1>USANDO OPERADORES DE COMPARACION</h1>
    <form action="" method="post"name="datos_usuario" id="datos_usuario">
     <table>
        <tr>
            <td>Nombre</td>
            <td><label for="nombre"></label><input name="nombre" id="nombre" type="text"  /></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><label for="edad"></label><input name="edad" id="edad" type="number"/></td>
        </tr>
        <tr>
            <td>&nbsp</td>
            <td><input name="entrar" id="entrar" type="submit" value="Entrar" class="entrar"/></td>
        </tr>
     </table>
    </form>

    <?php
    define("ADMINISTRADOR","JUAN");
    if(isset($_POST["entrar"])){
       
$usuario=$_POST["nombre"];
$edad=$_POST["edad"];
if($edad >=18){
    $permiso="permitido";
    $permi="permitido";
}else{
    $permiso="no permitido";
    $permi="no_permitido";
}
echo "<h3 class='resaltado'>El usuario es  ".$usuario . " y su edad es ".$edad."</h3>";
 echo "<h2 class=".$permi.">El administrador ".ADMINISTRADOR. " te ha ".$permiso." el acceso</h2>";
    }



    for($i=0;$i< 10;$i++){
    echo "Número :".$i."</br>";
    }
    ?>

</body>
</html>