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

    include("concesionario.php");

    //Compra_vehiculo::$ayuda = 10000;      //con esto puedo modificar el valor final 
    //para todos
    // Deja de poder hacerse si la declaro solo como static

    Compra_vehiculo::descuento_gobierno();
    //***********************************
    // Asi logro que el metodo se ejecute
    //***********************************

    $compra_Fabian = new Compra_vehiculo("compacto");   //me da solo el precio final
    $compra_Fabian->climatizador();     //Le agrega el precio al auto
    $compra_Fabian->tapiceria_cuero("beige");   //le sumo tap beige
    echo "El compacto vale: -" . $compra_Fabian->precio_final() . "$<br>";

    $copra_Maria = new Compra_vehiculo("compacto");
    $copra_Maria->climatizador();
    $copra_Maria->tapiceria_cuero("blanco");
    echo "La berlina vale: -" . $copra_Maria->precio_final() . "$<br>";

    $compar_Juan = new Compra_vehiculo("urbano");
    $compar_Juan->navegador_gps();
    $compar_Juan->climatizador();
    $compar_Juan->tapiceria_cuero("");
    echo "El urbano vale: -" . $compar_Juan->precio_final() . "$<br>";
    echo "<br>";

    echo "Aca se hace el descuento de 4500 obligatorio, pero si la variable es estatica
    se puede mofificar<br>";
    echo "Si uso para el desuento una variable comun en cada motodo compra_vehiculo 
    tengo que declarar la variable y restarsela al precio final<br>";
    echo "<br><br><br>";
    echo "para que quede bien igualo el valor de ayuda a 0"; 

    ?>
</body>

</html>