<?php

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
        echo "<table>
    <tr>
        <td>";
        echo $fila['CODIGOARTICULO'] . "</td>
        <td>";
        echo $fila['SECCION'] . "</td>
        <td>";
        echo $fila['NOMBRE'] . "</td>
        <td>";
        echo $fila['PRECIO'] . "</td>
        <td>";
        echo $fila['FECHA'] . "</td>
        <td>";
        echo $fila['IMPORTADO'] . "</td>
        <td>";
        echo $fila['PAISDEORIGEN'] . "</td>
        <td>";
        echo $fila['FOTO'] . "</td>
        <td>
    </tr>
</table>";

        echo "<br>";
    }

    mysqli_close($conexion);
}
