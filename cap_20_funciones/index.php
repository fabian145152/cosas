<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Funciones</h1>
    <h2>Permiten automatizar tareas. O sea, eliminar codigo repetitivo en los programas</h2>
    <h3>Ejemplo: Necesitamos que nuestros programas realicen un calculo complejo, creamos una funcion y la utilizamos la cantidad de veces que sea necesaria.</h3>
    <ul>
        <li>Funciones Predefinidas</li>
        <ul>
            <li>Vienen con el lenguage PHP</li>
        </ul>
        <li>Funciones propias, declaracion y ejecucion. Llamada</li>
        <ul>
            <li>Las creamos nosotros</li>
        </ul>
        <li>Parametros de funciones</li>
    </ul>
    <a href="https://www.php.net/manual/es/indexes.functions.php">
        https://www.php.net/manual/es/indexes.functions.php
    </a>
    <br>
    <?php

    $str = "HOLA COMO ANDAS";
    echo "<br>";
    echo $str;
    echo "<br>";
    $str = mb_strtolower($str);
    echo $str;
    $str1 = "todo en minuscula";
    echo "<br>";
    echo $str1;
    echo "<br>";
    $str1 = mb_strtoupper($str1);
    echo $str1;
    ?>
    <br>
    <a href='suma.php'>suma</a>
    <br>
    <a href="conv.php">Convierte de mayusculas la primer letra de cada palabra</a>




</body>

</html>