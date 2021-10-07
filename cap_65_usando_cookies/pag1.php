<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        p {
            font-size: 1.5em;
            color: #00f;
        }
    </style>
</head>

<body>
    <?php

    if (isset($_COOKIE["idioma_seleccionado"])) {     //Le pregunto si la cookie esta creada, si no lo esta va abajo a crearla,

        if ($_COOKIE["idioma_seleccionado"] == "es") {
            header("location:spanish.php");
        } else if ($_COOKIE["idioma_seleccionado"] == "en") {
            header("location:english.php");
        }
    }

    ?>
    <table whidth="25%" border="0" align="center">
        <tr>
            <td colspan="2" align="center">
                <h1>Principio cap 66 cookies 4</h1>
                <h1>Elije idioma</h1>
            </td>
        </tr>
        <tr>
            <td align="center"><a href="creacookie.php?idioma=es"><img src="flag_esp.png" alt="bandera España" width="90" height="60"></a></td>
        </tr>
        <tr>
            <td align="center"><a href="creacookie.php?idioma=en"><img src="flag_eng.png" alt="bandera Inglesa" width="90" height="60"></a></td>
        </tr>
    </table>
</body>

</html>