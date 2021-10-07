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

    $eli = $_GET["elim"];


    require("coneccion.ini");

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        echo "<br>";
        echo "Fallo la coneccion a la BBDD";

        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consult = "DELETE FROM productos WHERE CODIGOARTICULO='$eli'";


    $resultado = mysqli_query($conexion, $consult);

    if ($resultado == false) {
        echo "Error en la consulta";
    } else {
        //mysqli_affected_rows(coneccion)     //nos indica cuantos registros se vieron afectados por
        //insert delede o update

        //echo "Registro eliminado.";
        //echo "<br>";
        //echo mysqli_affected_rows($conexion);

        if (mysqli_affected_rows($conexion) == 0) {
            echo "No hay registros que eliminar con ese criterio";
        } else {
            echo "se ha eliminado" . mysqli_affected_rows($conexion) . " registro";
        }
    }




    echo "<br>";


    mysqli_close($conexion);
    ?>


</body>

</html>