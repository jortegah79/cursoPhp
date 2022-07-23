<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <link rel="Stylesheet" href="./css/index.css"/>
    <link rel="Stylesheet" href="./css/header.css"/>
        <title>Document</title>
</head>
<body>

<form action="./controller/tema_controller.php" method="get">
<table class="table-mini">
    <tr><th>Selecciona tema</th><th><select class="btn-azul" name="tema" id="tema">
    <?php foreach ($temas as $tms): ?>
       <option value="<?php echo $tms['id']; ?>"><?php echo $tms['tema']; ?></option>
    <?php endforeach;?>
                    </select></th></tr>
    <tr><td><?php echo count($temas)>0? "<input class='btn-azul' type='submit' name='entrar'value='entrar'/>": "";?></td><td><input class="btn-azul" type="submit" name="nuevo" value="nuevo tema"/></td></tr>
</table>
</form>

    <table class="table">
        <tr>
            <th>tema</th>
            <th>descripcion</th>
            <th>fecha ultimo mensaje</th>
            <th>usuario que lo hizo</th>
        </tr>
     <?php for ($i = 0; $i < sizeof($tema_datos); $i++) {
    foreach ($tema_datos[$i] as $tema) {?>
        <tr>
            <td><a href="./controller/tema_controller.php?tema=<?php echo $tema['id'];?>&entrar=entrar"><?php echo $tema["tema"]; ?></a></td>
            <td><?php echo $tema["descripcion"]; ?></td>
            <td><?php echo $tema['fecha']; ?></td>
            <td><?php echo $tema['usuario']; ?></td>
        </tr>
        <?php }}?>
    </table>
</body>
</html>