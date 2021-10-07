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

    $semana[] = "Lunes";
    $semana[] = "Martes";
    $semana[] = "Miercoles";
    $semana[] = "Jueves";
    $semana[] = "Viernes";
    $semana[] = "Sabado";
    //Si sabemos al catidad de elementos que tiene el array.
    //for ($i = 0; $i < 7; $i++) {
    //Si no lo sabemos count. funcion para contar los registros.
    for ($i = 0; $i < count($semana); $i++) {
        echo $i . " ";

        echo $semana[$i] . "<br>";
    }

    $semana[] = "Domingo";   //Agrega automaticamente un elemento al final del array

    for ($i = 0; $i < count($semana); $i++) {
        echo $i . " ";

        echo $semana[$i] . "<br>";
    }
    ?>
</body>

</html>