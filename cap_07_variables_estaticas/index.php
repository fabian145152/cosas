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

    function incrementaVariable()
    {
        $contador = 0;
        $contador++;
        echo $contador . "<br>";
    }
incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();
    echo "No se inrcrementa mas porque siempre arranca en 0<br>";
    echo "Para que el valor se conserve<br>";

    function incVariable()
    {
        static $cont = 0;
        $cont++;
        echo $cont . "<br>";
    }

incVariable();
incVariable();
incVariable();
incVariable();
    


    ?>
</body>

</html>