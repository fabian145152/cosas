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

    echo "Constantes.";
    echo "<br>Siempre van en mayusculas sin el signo $";
    echo "<br>Es obligarorio el define()";
    echo "<br>No puede ser una string";
    echo "<br>El ambito es global siempre";
    echo "<br>No se puede redefinir";
    echo "<br>";
    define("AUTOR", "Fabián", true);

    // ("NOMBRE DE LA VARIABLE EN MAYUSCULA", "valor de la variable", true o false elegir) 

    echo AUTOR . "<br>";
    echo "<br>";

    echo "El autor es : " . AUTOR;
    echo "<br>";
    echo "<br>";
    echo "La linea de esta instruccion es: " . __line__ . "<br>";
    echo "Ver la pagina https://www.php.net/manual/es/language.constants.predefined.php";
    echo "<br>Esta la lista de todas las constantes y descripccion en español";
    echo "<br>Trabajando con el archivo: " . __FILE__;
    echo "<br>En la carpeta: " . __DIR__;
    ?>
</body>

</html>