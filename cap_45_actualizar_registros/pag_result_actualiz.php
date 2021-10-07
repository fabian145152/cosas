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
    $busqueda = $_GET["buscar"];

    require("coneccion.ini");

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        echo "<br>";
        echo "Fallo la coneccion a la BBDD";

        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consult = "SELECT * FROM productos WHERE NOMBRE LIKE '%$busqueda%'";

    $resultado = mysqli_query($conexion, $consult);

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

        echo "<form action='actualizar.php' method='get'>";
        echo "<label>Codigo articulo </label><input type='text' name='c_art' value='" .  $fila['CODIGOARTICULO'] . "'><br>";
        echo "<label>Seccion </label><input type='text' name='seccion' value='" .  $fila['SECCION'] . "'><br>";
        echo "<input type='text' name='nombre' value='" .  $fila['NOMBRE'] . "'><br>";
        echo "<input type='text' name='precio' value='" .  $fila['PRECIO'] . "'><br>";
        echo "<input type='text' name='fecha' value='" .  $fila['FECHA'] . "'><br>";
        echo "<input type='text' name='imp' value='" .  $fila['IMPORTADO'] . "'><br>";
        echo "<input type='text' name='p_orig' value='" .  $fila['PAISDEORIGEN'] . "'><br>";
        echo "<input type='submit' name='enviando' value='Actualizar'!'>";
        echo "</form>";
        echo "<br>";
    }

    mysqli_close($conexion);

    ?>
</body>

</html>