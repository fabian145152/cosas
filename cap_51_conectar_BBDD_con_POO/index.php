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
    $conexion = new mysqli("localhost", "root", "belgrado", "pruebas");
    if ($conexion->connect_errno) {
        echo "Fallo de coneccion " . $conexion->connect_errno;
    }

    //mysqli_set_charset($conexion, "utf8");   //forma prsedimental

    //con POO
    $conexion->set_charset("utf8");

    $sql = "SELECT * FROM PRODUCTOS";

    // procedimental
    //$resultados = mysqli_query($conexion, $sql);

    //con POO
    $resultados = $conexion->query($sql);
    if ($conexion->errno) {
        die($conexion->errno);
    }
    //procedimental
    //while ($fila = mysqli_fetch_array($resultados, mysqli_Assoc))

    //con POO
    while ($fila = $resultados->fetch_assoc()) {
        echo "<table><tr><td>";
        echo $fila['CODIGOARTICULO'] . "</td><td>";
        echo $fila['SECCION'] . "</td><td>";
        echo $fila['NOMBRE'] . "</td><td>";
        echo $fila['PRECIO'] . "</td><td>";
        echo $fila['FECHA'] . "</td><td>";
        echo $fila['PAISDEORIGEN'] . "</td><td></tr></table>";
        echo "<br>";
    }
    //o se puede hacer
    /*
while ($fila = $resultados->fetch_array()) {
        echo "<table><tr><td>";
        echo $fila[0] . "</td><td>";
        echo $fila[1] . "</td><td>";
        echo $fila[2] . "</td><td>";
        echo $fila[3] . "</td><td>";
        echo $fila[4] . "</td><td>";
        echo $fila[5] . "</td><td></tr></table>";
        echo "<br>";
    }
    */
    //procedimental
    //mysqli_close($conexion);

    //con POO
    $conexion->close();
    ?>
</body>

</html>