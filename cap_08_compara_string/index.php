<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar {
            color: #f00;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php

    $nombre = "Fabian";
    echo "Hola $nombre <br>";
    echo "<br> Otra forma de concatenar<br>";
    echo "Ojo no se puede hacer asi con compillas simples<br><br>";

    echo "Diferentes formas de declarar Strings<br>";
    echo "Comparacion de Strings<br><br>";

    echo "<p class='resaltar'>Texto reslatado</p><br>";
    echo "ó";
    echo '<p class="resaltar">Texto reslatado</p><br>';
    echo "ó";
    echo "<p class=\"resaltar\">Texto reslatado escapar el caracter</p><br>";

    echo "<br><br>strcmp: Compara 2 string teniendo en cuenta mayusculas y minsculas";
    echo "<br>strcasecmp: Compara 2 string sin tener en cuenta mayusculas y minusculas<br><br>";

    $variable1 = "casa";
    $variable2 = "CASA";

    $resultado = strcmp($variable1, $variable2);
    echo "compara casa con CASA<br>";
    echo "$resultado strcmp devuelve 1 si es true<br>";
    $resultado2 = strcasecmp($variable1, $variable2);
    echo "$resultado2 strcasecmp devuelve 0 si es fasle";
    ?>
</body>

</html>