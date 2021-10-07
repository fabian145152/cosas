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
    <h1>Uso de get o post</h1>
    <h2>Cuando uso GET los parametos de la busqueda viajan a travez de la url</h2>
    <h3>Los buscadores los penalizan porque tienen muchos parametros</h3>
    <h2>Para usar usuarios y contraseñas usar post</h2>
    <h2>Usarlo cuando hay cuadros de texto.</h2>
    <h1>Buscar algo y explicalos atributos en una BBDD</h1>
    <form action="buscador.php" method="post">
        <table>
            <tr>
                <td>
                    Seccion <input type="text" name="seccion"></td>
            </tr>
            <tr>
                <td>Pais Origen <input type="text" name="p_orig"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviando" value="Dale!">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>