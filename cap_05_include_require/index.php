<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("variables.php");

    echo '<br>include("variables.php")<br>' . "ó";
    echo '<br>require("variables.php")<br>';

    echo "<br><br>Con INCLUDE (Incluyo un archivo externo.) llamp a la funcion que hay en otro archivo.";
    echo "<br> Si uso INCLUDE, me marca el error y el resto del programa se ejecuta.<br>";

    echo '<br> Si uso REQUIRE, me marca el error y el resto del programa "no se ejecuta" ';

    ?>
</body>

</html>