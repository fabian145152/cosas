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

    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("location:login.php");
    }

    ?>
    <h1>Bienvenidos Usuarios</h1>
    <?php

    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

    ?>

    <p>Informacion solo para usuarios registrados.</p>
    <p>Ojo si hago un copi paste de la url, pasa directo sin pedir usuario ni pass.</p>
    <p>Ahi entran las sessiones</p>
    <a href="usuarios_registrados_1.php">Volver</a>
    <br>
    <a href="cierre.php">Cerrar Sesion.</a>
    <br>
</body>

</html>