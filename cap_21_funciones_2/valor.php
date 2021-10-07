<?php
$valor = 0;
function incrementa($valor)
{
    $valor++;
    return $valor;
}
echo incrementa(5);
echo "<br>";
echo $valor;  //es como que la variable no existe fuera de la funcion
echo "<br>";

echo "<p>El de abajo es por referencia</p>";


function inc(&$otro)
{
    $otro++;
    return $otro;
}
$numero = 5;
echo inc($numero) . "<br>";
echo $numero;
