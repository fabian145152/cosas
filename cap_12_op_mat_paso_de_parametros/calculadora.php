<?php

if (isset($_POST["button"])) {  //isset se usa para saber si la variable esta definida
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    //echo "<br>" . $numero1;
    //echo "<br>" . $numero2;
    //echo "<br>" . $operacion;
    calcular($operacion, $numero1, $numero2);
    /*  Ojo las variables son locales, estan declaradas dentor del primer if
    pero no en la funcion
    

    */
}

function calcular($calculo, $a1, $a2)
{

    if (!strcmp("Suma", $calculo)) {
        echo $a1 . " + " . $a2 . "<br>";
        echo "El resultado es: " . ($a1 + $a2);
    }
    if (!strcmp("Resta", $calculo)) {
        echo $a1 . " - " . $a2 . "<br>";
        echo "El resultado es: " . ($a1 - $a2);
    }
    if (!strcmp("Multiplicacion", $calculo)) {
        echo $a1 . " * " . $a2 . "<br>";
        echo "El resultado es: " . ($a1 * $a2);
    }
    if (!strcmp("Division", $calculo)) {
        echo $a1 . " / " . $a2 . "<br>";
        echo "El resultado es: " . ($a1 / $a2);
    }
    if (!strcmp("Modulo", $calculo)) {
        echo $a1 . " Modulo " . $a2 . "<br>";
        echo "El resultado es: " . ($a1 % $a2);
    }
}
