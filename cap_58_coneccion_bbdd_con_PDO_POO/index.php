<?php

require "devuelve_productos.php";
$pais = $_GET["buscar"];
$productos = new DevuelveProductos();
$array_productos = $productos->get_productos($pais);

?>
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

    foreach ($array_productos as $elemento) {

        echo "<table><tr><td>";
        echo $elemento['CODIGOARTICULO'] . "</td><td>";
        echo $elemento['NOMBRE'] . "</td><td>";
        echo $elemento['SECCION'] . "</td><td>";
        echo $elemento['PRECIO'] . "</td><td>";
        echo $elemento['FECHA'] . "</td><td>";
        echo $elemento['IMPORTADO'] . "</td><td>";
        echo $elemento['PAISDEORIGEN'] . "</td><td></tr></table>";
        echo "<br>";
        echo "<br>";
    }
    ?>
    <a href="formulario_busqueda_paises.php">Atras</a>
</body>

</html>