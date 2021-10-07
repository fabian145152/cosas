<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 500px;
            height: 30px;
            border: 1px dotted #ff0000;
            margin: auto;
        }

        p {
            line-height: 1px;
        }
    </style>
</head>

<body>
    <?php

    require("coneccion.ini");
    //con esto traigo los datos de la coneccion y no tengo 
    //que escribir todas los datos en tods los arch que usen bbdd


    //1_Procedimientos
    $conexion = mysqli_connect($db_host, $db_user, $db_pass);
    //en ese orden , nombre del host, usuario, pass, nombre bbdd

    //si hay algun error se ejecuta esto
    if (mysqli_connect_errno()) {
        echo "<br>";
        echo "Fallo la coneccion a la BBDD";
        // si lo dejo asi sale el mensaje y manda el error de nuevo,
        //para que salga
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");
    //con esto saco la variable $db_name de $coneccion y si no encuentra la BBDD 
    //me tira el error de "No se encuentra la BBDD".


    mysqli_set_charset($conexion, "utf8");
    //con esto seteo el juego de caracteres que uso en el browser


    //Primer consulta

    //$consult = "SELECT * FROM productos";   //asi veo todo
    //$consult = "SELECT * FROM `productos` WHERE `NOMBRE` LIKE '%CABALLERO'";  //con criterios de busqueda
    $consult = "SELECT * FROM `productos` WHERE `NOMBRE` LIKE '_RAJE CABALLERO'";
    $resultado = mysqli_query($conexion, $consult);


    //while ($fila = mysqli_fetch_row($resultado)) {
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<table><tr><td>";
        echo $fila['CODIGOARTICULO'] . "</td><td>";
        echo $fila['NOMBRE'] . "</td><td>";
        echo $fila['PRECIO'] . "</td><td>";
        echo $fila['FECHA'] . "</td><td>";
        echo $fila['PAISDEORIGEN'] . "</td><td></tr></table>";

        echo "<br>";
    }

    //Cuando termino de hacer la consulta tengo que cerrar la coneccion a la BBD
    //Para economizar recursos

    mysqli_close($conexion);
    echo "<h1>Pagina de busqueda<h2>";
    echo "<br>";
    echo "<p>Caracteres comodin</p><br>";

    echo "<p>%   Cadena de caracteres</p><br>";
    echo "<p>_ un unico caracter</p><br>";
    ECHO "<h1>Iniciar video 40</h1>"
    ?>
</body>

</html>