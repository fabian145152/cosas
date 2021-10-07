<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once 'db.php';
    ?>
</head>

<body>
    <?php

    $mibusqueda = $_GET["buscar"];
    $mipag = $_SERVER["PHP_SELF"];
    //$_SERVER indica cual es la pagina a llamar
    //PHP_SELF inica que la pagina es esta misma.

    if ($mibusqueda != NULL) {          //Si $mibusqueda es diferente de numo
        ejecuta_consulta($mibusqueda);
    } else {

        echo "<form action='"  . $mipag . "' method='get'>
            <label>Buscar: <input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
        </form>";
    }
    ?>
    <h3>Supuestamente si subo esta a un servidor ese error no sale</h3>
</body>

</html>