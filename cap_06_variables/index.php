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

    echo "Ambito de las variables ";
    echo "<br><br> LOCAL: Declarada dentro de una funcion y accesible solo desde dentro de la funcion";
    echo "<br><br> GLOBAL: Declarada en cualquier lugar del codigo visible y accesible desde cualquier parte del codigo.";
    echo "<br><br> SUPER GLOBAL: Declarada como Array visible desde fuera del script de php Ejemplo \$_POST\ ";
    echo "<br><br> El SUPER GLOBAL se va a ver mas adelante<br><br>";

    $nombre = "Fabian";
    //echo $nombre;

    /*
    function dameNombre()
    { 
        $nombre = "El nombre es: " . $nombre;
        
        //asi me da error, para que funcione
        
    }
*/
    function dameNombre()
    {
        global $nombre;
        $nombre = "El nombre es: " . $nombre;
    }

    dameNombre();

    echo $nombre;
    echo "<br> el global debe estar dentro de la funcion, si no da error.";

    ?>
</body>

</html>