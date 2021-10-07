<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

define("buscar", true);

function ejecuta_consulta($labusqueda)
{
    
    require("coneccion.ini");

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        echo "<br>";
        echo "Fallo la coneccion a la BBDD";

        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consult = "SELECT * FROM productos WHERE NOMBRE LIKE '%$labusqueda%'";
    //$consult = "SELECT * FROM productos WHERE NOMBRE LIKE '%$busqueda%'";

    $resultado = mysqli_query($conexion, $consult);

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<table><tr><td>";
        echo $fila['CODIGOARTICULO'] . "</td><td>";
        echo $fila['SECCION'] . "</td><td>";
        echo $fila['NOMBRE'] . "</td><td>";
        echo $fila['PRECIO'] . "</td><td>";
        echo $fila['FECHA'] . "</td><td>";
        echo $fila['IMPORTADO'] . "</td><td>";
        echo $fila['PAISDEORIGEN'] . "</td><td>";
        echo $fila['FOTO'] . "</td><td></tr></table>";

        echo "<br>";
    }

    mysqli_close($conexion);
}
?>

<body>
    <?php

    $mibusqueda = $_GET["buscar"];
    $mipag = $_SERVER["PHP_SELF"];
    //$_SERVER indica cual es la pagina a llamar
    //PHP_SELF inica que la pagina es esta misma.

    if ($mibusqueda != NULL) {          //Si $mibusqueda es diferente de numo
        ejecuta_consulta($mibusqueda);
    } else {
        echo ("<form action='" . $mipag . "' method='get'>
        <label>Buscar: <input type='text' name ='buscar'></label>
        <input type='submit' name='enviando' value='Dale!'>
        </form>");
    }
    ?>
    <h3>Agregue un define("buscar"=true) arriba y se fue el error</h3>
    <h3>Supuestamente si subo esta a un servidor ese error no sale</h3>
</body>

</html>