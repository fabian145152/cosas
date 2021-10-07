<?php

function frase_mayus($frase, $conversion = true)
{
    $frase = strtolower($frase);
    if ($conversion == true) {
        $resultado = ucwords($frase);
    } else {
        $resultado = strtoupper(($frase));
    }
    return $resultado;
}
echo (frase_mayus("esto es una prueba", false));

//Si le saco el false de la linea 13 me hace solo la primer letra de la frase.

echo "<br><a href='index.php'>Volver</a>";
