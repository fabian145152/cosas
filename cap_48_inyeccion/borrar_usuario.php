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

    //$usuario = $_GET["user"];
    //$contraseña = $_GET["pass"];

    require("datos_coneccion.ini");

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    //paso estas 2 lineas a la linea despues de la coneccion
    //porque mysqli_conect usa $coneccion como argumento
    //y las edito
    $usuario = mysqli_real_escape_string($conexion,  $_GET["user"]);
    $contraseña = mysqli_real_escape_string($conexion, $_GET["pass"]);

    if (mysqli_connect_errno()) {
        echo "<br>";
        echo "Fallo la coneccion a la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    $consult = "DELETE FROM `usuarios` WHERE usuario ='$usuario' AND contra ='$contraseña' ";

    echo $consult;

    $resultado = mysqli_query($conexion, $consult);

    if ($resultado == false) {
        echo "Error en la consulta";
    } else {

        if (mysqli_affected_rows($conexion) == 0) {
            echo "<br><br>No hay registros que eliminar con ese criterio";
        } else {
            echo "<br><br>" . mysqli_affected_rows($conexion) . " Registro eliminado";
        }
    }

    mysqli_close($conexion);

    echo "<br><br><a href='index.php'>Volver</a>";

    ?>
</body>

</html>