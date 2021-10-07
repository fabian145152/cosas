<style>
    .resultado {
        color: #f00;
        font-weight: bold;
        font-size: 32px;
    }
</style>

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

function calcular($calculo)
{

    if (!strcmp("Suma", $calculo)) {
        global $numero1;
        global $numero2;
        $resultado = $numero1 + $numero2;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
    if (!strcmp("Resta", $calculo)) {
        global $numero1;
        global $numero2;
        $resultado = $numero1 - $numero2;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
    if (!strcmp("Multiplicacion", $calculo)) {
        global $numero1;
        global $numero2;
        $resultado = $numero1 * $numero2;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
    if (!strcmp("Division", $calculo)) {
        global $numero1;
        global $numero2;
        $resultado = $numero1 / $numero2;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
    if (!strcmp("Modulo", $calculo)) {
        global $numero1;
        global $numero2;
        $resultado = $numero1 % $numero2;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
    if (!strcmp("Incremento", $calculo)) {
        global $numero1;
        $numero1++;
        $resultado = $numero1;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
    if (!strcmp("Decremento", $calculo)) {
        global $numero1;
        $numero1--;
        $resultado = $numero1;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
}
