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
    $datos = array("Nombre" => "Fabian", "Apellido" => "Nogueroles", "Edad" => 58);
    //$datos = "Martin";
    //echo $datos;
    echo "<br>Ojo cuando los programas son larcos y declaro una variable, la variable sobreescribe el array.<br>";

    echo "Para verificarlo:<br> ";

    /*
     en is_array pongo la variable que quiero usar
    */

    if (is_array($datos)) {
        // Devuelve un Booleano.
        echo "Es un Array.<br>";
    } else {
        echo "No es un Array.<br>";
    }
    ?>

    <a href="index.php">Volver</a>


</body>

</html>