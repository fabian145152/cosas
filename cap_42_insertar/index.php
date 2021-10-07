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
<h1>Registro de articulos</h1>
<form name="form1" method="get" action="insertar_registros.php">
    <table border="0" align="center">
        <tr>
            <td>Codigo Articulo</td>
            <td><label for="c_art"></label>
                <input type="text" name="c_art" id="c_art">
            </td>
        </tr>
        <tr>
            <td>Seccion</td>
            <td><label for="seccion"></label>
                <input type="text" name="seccion" id="seccion">
            </td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><label for="nombre"></label>
                <input type="text" name="nombre" id="nombre">
            </td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><label for="precio"></label>
                <input type="text" name="precio" id="precio">
            </td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td><label for="fecha"></label>
                <input type="text" name="fecha" id="fecha">
            </td>
        </tr>
        <tr>
            <td>Importado</td>
            <td><label for="importado"></label>
                <input type="text" name="importado" id="importado">
            </td>
        </tr>
        <tr>
            <td>Pais de origen</td>
            <td><label for="paisdeorigen"></label>
                <input type="text" name="paisdeorigen" id="paisdeorigen">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
            <td align="center"><input type="reset" name="Borrar" id="borrar" value="Borrar"></td>

        </tr>
    </table>
</form>

</html>