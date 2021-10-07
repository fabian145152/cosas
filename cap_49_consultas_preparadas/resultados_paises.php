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

    $pais = $_GET["buscar"];
    require("datos_coneccion.ini");
    $conexion = mysqli_connect($db_host, $db_user, $db_pass);
    if (mysqli_connect_errno()) {
        echo "Fallo en la coneccion a la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    $sql = "SELECT CODIGOARTICULO, SECCION, NOMBRE, PRECIO, PAISDEORIGEN from PRODUCTOS WHERE PAISDEORIGEN = ?";
    //Segundo paso, preparar la consulta
    $resultado = mysqli_prepare($conexion, $sql);
    //unir los parametros que recibo desde el formulario a la sentencia SQL
    $ok = mysqli_stmt_bind_param($resultado, 's', $pais);
    //si se ejecuta bien true si no false
    $ok = mysqli_stmt_execute($resultado);
    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {
        $ok = mysqli_stmt_bind_result($resultado, $cod, $sec, $nom, $pre, $pais);
        echo "Artuculos encontrados: <br><br>";
        while (mysqli_stmt_fetch($resultado)) {
            echo $cod . "  " . $sec . "  " . $nom . "  " . $pre . "  " . $pais . " <br>";
        }
        mysqli_stmt_close($resultado);
    }



    mysqli_close($conexion);

    echo "<br><br><a href='index.php'>Volver</a>";

    ?>
</body>

</html>