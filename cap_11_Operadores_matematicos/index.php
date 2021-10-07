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

    echo "Los operadores son:";
    echo "<br> +   Suma";
    echo "<br> -   Resta";
    echo "<br> *   Multiplicacion";
    echo "<br> /   Division";
    echo "<br> %   Modulo";
    echo "<br>Modulo da el resto de la division";
    echo "<br> ++ ó +=   Incremento";
    echo "<br> -- ó -=   Decremento";
    ?>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <p><label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label name="operacion"></label>
            <select name="operacion" id="operacion">
                <option>Suma</option>
                <option>Resta</option>
                <option>Multiplicacion</option>
                <option>Division</option>
                <option>Modulo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" value="Enviar" onclick="prueba">
        </p>
    </form>
    <p>&nbsp;</p>
    <?php

    if (isset($_POST["button"])) {  //isset se usa para saber si la variable esta definida
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        //echo "<br>" . $numero1;
        //echo "<br>" . $numero2;
        //echo "<br>" . $operacion;

        if (!strcmp("Suma", $operacion)) {
            echo $numero1 . " + " . $numero2 . "<br>";
            echo "El resultado es: " . ($numero1 + $numero2);
        } else {
            if (!strcmp("Resta", $operacion)) {
                echo $numero1 . " - " . $numero2 . "<br>";
                echo "El resultado es: " . ($numero1 - $numero2);
            } else {
                if (!strcmp("Multiplicacion", $operacion)) {
                    echo $numero1 . " * " . $numero2 . "<br>";
                    echo "El resultado es: " . ($numero1 * $numero2);
                } else {
                    if (!strcmp("Division", $operacion)) {
                        echo $numero1 . " / " . $numero2 . "<br>";
                        echo "El resultado es: " . ($numero1 / $numero2);
                    } else {
                        if (!strcmp("Modulo", $operacion)) {
                            echo $numero1 . " Modulo " . $numero2 . "<br>";
                            echo "El resultado es: " . ($numero1 % $numero2);
                        }
                    }
                }
            }
        }
    }
    ?>
</body>

</html>