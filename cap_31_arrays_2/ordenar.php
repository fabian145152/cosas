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

    $semana = array("Lunes", "Martes", "Miercoles", "Jueves");
    sort($semana);
    for ($i = 0; $i < count($semana); $i++) {
        echo $semana[$i] . "<br>";
    }

    ?>
</body>

</html>