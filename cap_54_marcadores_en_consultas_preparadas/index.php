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
    <h1>Como utilizar marcadores en una consulta preparada.</h1>
    <h2>Uso de arrays asociativos en consultas preparadas.</h2>
    <form action="buscador.php" method="get">
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