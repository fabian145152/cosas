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

    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $nom = $_GET["nombre"];
    $pre = $_GET["precio"];
    $fe = $_GET["fecha"];
    $imp = $_GET["imp"];
    $pais = $_GET["p_orig"];

    require("coneccion.ini");

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        echo "<br>";
        echo "Fallo la coneccion a la BBDD";

        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consult = "UPDATE productos SET 
        CODIGOARTICULO='$cod', 
        SECCION='$sec', 
        NOMBRE='$nom', 
        PRECIO='$pre', 
        FECHA='$fe', 
        IMPORTADO='$imp',
        PAISDEORIGEN='$pais'
              WHERE 
        CODIGOARTICULO='$cod'";

    $resultado = mysqli_query($conexion, $consult);

    if ($resultado == false) {
        echo "Error en la consulta";
    } else {
        echo "Registro guardado con exito.<br><br>";
        echo "<table><tr><td>$cod</td></tr>";
        echo "<tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$pre</td></tr>";
        echo "<tr><td>$fe</td></tr>";
        echo "<tr><td>$imp</td></tr>";
        echo "<tr><td>Pais de origen $pais</td></tr></table>";
    }



    echo "<br>";


    mysqli_close($conexion);
    ?>


</body>

</html>