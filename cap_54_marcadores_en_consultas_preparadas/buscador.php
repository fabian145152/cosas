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

    $busqueda_secc = $_GET["seccion"];
    $busqueda_porig = $_GET["p_orig"];

    //Objeto tipo coneccion
    try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        //$sql = "SELECT CODIGOARTICULO, SECCION, NOMBRE, PRECIO FROM PRODUCTOS WHERE NOMBRE = ?";
        //anterior

        $sql = "SELECT CODIGOARTICULO, SECCION, NOMBRE, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION = :SECC AND PAISDEORIGEN= :PORIG";

        $resultado = $base->prepare("$sql");   //devuelve un objeto de tipo STATEMENT

        //anterior
        //$resultado->execute(array($busqueda));
        $resultado->execute(array(":SECC" => $busqueda_secc, "PORIG" => $busqueda_porig));
        //=> Corresponde

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo  "CodigoArticulo: " . $registro['CODIGOARTICULO'] .
                " Seccion: " . $registro['SECCION'] .
                " Nombre Articulo: " . $registro['NOMBRE'] .
                " Precio: " . $registro['PRECIO'] .
                "Pais de Origen: " . $registro['PAISDEORIGEN'];
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