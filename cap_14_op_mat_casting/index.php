<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Casting: convertir de un valor a otro.</h1>
    <h1>Ej convertir un valor de tipo string en entero</h1>
    <h1>Puede ser implicito o explicito</h1>
    <h2>Es impicito, porque no tengo que especificar si es numerica alfanumerica, etc</h2>
    <h2>En otros lenguajes con Java tengo que indicar que tipo de variable es.</h2>
    <a href="https://www.php.net/manual/es/ref.math.php">manual</a><br>
    <img src="1.jpg" alt="Funciones matematicas" title="Funciones matematicas" width="300">
    <br>
    <?php

    $num1 = rand(10, 50);
    $num2 = pow(3, 2);
    $num3 = pi();

    echo "El numero es: " . $num1 . "<br>";
    echo "El numero es: " . $num2 . "<br>";
    echo "El numero es: " . $num3 . "<br>";
    echo round(1.95583, 2);  // 1.96
    ?>
</body>

</html>