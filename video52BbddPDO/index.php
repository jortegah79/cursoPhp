<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion_BBDD</title>
<style>
table{
    border:3px solid #333;
    border-collapse: collapse;
    margin:30px auto;
    background:#ccbaaa;
   
}
tr,td{
    padding :10px;
}
input{
     background:#ccbaaa;
     border-top:blue;
     border-left:none;
     border-right:none;
     color:#555;
     font-size:20px
}

    </style>
</head>
<body>
    <form action="recepcionaPDO.php" method="post">
        <table>
        <tr><td>Seccion</td><td><input type="text" name="seccion"id="seccion"placeholder="Introduce seccion"></td></tr>
        <tr><td>Pais</td><td><input type="text" name="pais"id="pais"placeholder="Introduce pais"></td><tr>
        <tr><td></td><td colsapan="2"> <input type="submit" name="enviar"id="enviar"value="enviar"></td></tr></table>
    </form>
</body>
</html>