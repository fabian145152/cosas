<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #lista {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Condicionales if</h1>
    <h2>Esto va de la mano con los operadores logicos</h2>
    <a href="https://www.php.net/manual/es/language.operators.logical.php">Lista</a>

    <ol id="lista">
        <li>&&..........Y Logico</li>
        <li>AND........Y Logico</li>
        <li>||...............O Logico</li>
        <li>OR...........O Logico</li>
        <li>XOR........Or Exclusivo</li>
        <li>!...............Nogacion</li>
    </ol>
    <h2>Prioridades</h2>

    <?php

echo "Ver en la mitad del video 15 la prioridad de los operadores.<br>";

    $var1 = true;
    $var2 = false;
    $resultado = $var1 && $var2;

    if ($resultado == true) {
        echo "Correcto";
    } else {
        echo "Incorrecto";
    }
    echo "<br>";

    if ($resultado and true) {
        echo "Correcto";
    } else {
        echo "Incorrecto";
    }
    ?>


    <h2>Ej.</h2>
    <h3>2+3x6=20</h3>
    <h4>Primero 3x6</h4>
    <h4>despues 18+2</h4>
    <h3>(2+3)x6=30</h3>
    <h4>Con parentesis</h4>

    <img src="1.jpg" title="Funciones matematicas" width="500">
    <img src="2.jpg" title="Funciones matematicas" width="300">


</body>

</html>