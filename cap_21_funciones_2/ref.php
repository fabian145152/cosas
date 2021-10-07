<?php

function cambia_mayus(&$param)
{
    $param = strtolower($param);
    $param = ucwords($param);
    return $param;
}
$cadena = "holA mUndO";
echo cambia_mayus($cadena) . "<br>";
echo $cadena;
