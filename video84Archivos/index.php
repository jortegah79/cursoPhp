<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 3px solid #333;
            width: 25%;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 5px;
            text-align: center;
            border: 2px solid blue;
            text-align:left;
           
        }

        tr {
            border: 2px solid blue;
        }
    </style>
</head>
<body>
    <h1>Trabajo con archivos</h1>

    <form action="gestion-archivos.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Selecciona archivo.</td></tr>
                <tr><td><input type="file" name="archivo" /></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" value="Enviar"/></td>
            </tr>
        </table>
    </form>
</body>
</html>