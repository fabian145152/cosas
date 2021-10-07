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

    $busqueda = $_GET["buscar"];

    //Objeto tipo coneccion
    try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");


        $sql = "SELECT CODIGOARTICULO, SECCION, NOMBRE, PRECIO FROM PRODUCTOS WHERE NOMBRE = ?";

        $resultado = $base->prepare("$sql");   //devuelve un objeto de tipo STATEMENT
        $resultado->execute(array($busqueda));

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo  "CodigoArticulo: " . $registro['CODIGOARTICULO'] .
                " Seccion: " . $registro['SECCION'] .
                " Nombre Articulo: " . $registro['NOMBRE'] .
                " Precio" . ($registro['PRECIO']);
            echo "<br>";
        }

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