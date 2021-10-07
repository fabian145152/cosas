<?php

echo "<h1>for(iniciacion_del_bucle;condicion_del_bucle;incremento/decremento)</h1><br>";

echo "<h2>Break sale del bucle antes que termine</h2>";


$i = 0;

for ($a = 0; $i <= 10; $i += 2) {
    echo "<p>Entramos en el bucle " . $i . "<br>";

    if ($i == 6) {
        echo "<p>Buce interrumpido</p>";
        break;
    }
}
$q = 0;
$w = 0;
$h = 0;

for ($q = 0; $w <= 10; $w++) {
    echo "9 * $w = " . 9 * $w . "<br>";
}
echo "Tabla terminada";
echo "<br>";
echo "<a href='index.php'>Volver</a>";
