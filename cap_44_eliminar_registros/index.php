<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        h1 {
            text-align: center;
            color: #00f;
            border-bottom: dotted #0000ff;
            width: 50%;
            margin: auto;
        }

        table {
            border: 1px solid #f00;
            padding: 20px 50px;
            margin-top: 50px;
        }

        body {
            background-color: #ffc;
        }
    </style>
</body>
<h1>Eliminar articulos</h1>
<form name="form1" method="get" action="eliminar_registros.php">
    <table border="0" align="center">
        <tr>
            <td>Codigo Articulo</td>
            <td><label for="elim"></label>
                <input type="text" name="elim" id="elim">
            </td>
        </tr>
     
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center"><input type="submit" name="eliminar" id="eliminar" value="Eliminar"></td>
            <td align="center"><input type="reset" name="Borrar" id="borrar" value="Borrar"></td>

        </tr>
    </table>
</form>

</html>