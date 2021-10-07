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

    $datos = array("Nombre" => "Fabián", "Apellido" => "Nogueroles", "Edad" => 58);

    $datos ["País"]="España";   //Con esta linea agregamos un valor a la string

    echo "El bucle foreach me permite recorrer un Array";
    echo "<br><br>";
    foreach ($datos as $clave => $valor) {

        echo "A $clave le corresponde $valor <br> ";
    }

    ?>
</body>

</html>