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

    echo "Arrays indexado. <br>";

    /*
    $semana[] = "Lunes";
    $semana[] = "Martes";
    $semana[] = "Miercoles";
    

    $semana[0] = "Lunes";
    $semana[1] = "Martes";
    $semana[2] = "Miercoles";
    */

    $semana = array("Lunes", "Martes", "Miercoles");


    echo $semana[1];

    echo "<br>";

    echo "Arrays Asociativo. <br>";

    $datos = array("Nombre" => "Fabian", "Apellido" => "Nogueroles", "Edad" => 58);

    echo $datos["Apellido"];
    //echo $datos["Nombre","","" ]

    ?>
    
</body>

</html>