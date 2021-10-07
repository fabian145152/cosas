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

    $busqueda_cart = $_POST["c_art"];



    try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql = "DELETE FROM PRODUCTOS WHERE CODIGOARTICULO =:c_art";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":c_art" => $busqueda_cart));
        
        echo "Registro Eliminado";
        echo "<br><br>";

        $resultado->closeCursor();
    } catch (Exception $e) {
        die('Error: ' . $e->getmessage());
    } finally {     //el finally es opcional
        $base = null;
    }
    echo "<a href='index.php'>Volver</a>";
    ?>

</body>

</html>