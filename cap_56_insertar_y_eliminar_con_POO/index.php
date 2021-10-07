<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 30px;
            margin: auto;
            background-color: #Ffc;
            border: 2px solid #F00;
            padding: 5px;
        }
    </style>
</head>

<body>
    <br>
    <form action="pagina_insertar_pdo.php" method="post">
        <table>
            <tr>
                <td>C. Art</td><td><input type="text" name="c_art"></td></tr>
            <tr>
                <td>Seccion</td><td><input type="text" name="sec"></td></tr>
            </tr>
            <tr>
                <td>Nombre</td><td><input type="text" name="nombre"></td></tr>
            </tr>
            <tr>
                <td>Precio</td><td><input type="text" name="precio"></td></tr>
            </tr>
            <tr>
                <td>Fecha</td><td><input type="text" name="fecha"></td></tr>
            </tr>
            <tr>
                <td>Importado</td><td><input type="text" name="imp"></td></tr>
            </tr>
            <tr>
                <td>P. Origen</td><td><input type="text" name="p_orig"></td></tr>
            </tr>
            <tr>
                <td colspan="2"></td><td><input type="submit" name="enviando" value="Dale!"></td></tr>
            </tr>
        </table>

    </form>
</body>

</html>