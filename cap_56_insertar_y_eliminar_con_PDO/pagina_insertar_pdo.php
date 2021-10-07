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

    $ed_c_art = $_POST["c_art"];
    $ed_sec = $_POST["sec"];
    $ed_nom = $_POST["nombre"];
    $ed_pre = $_POST["precio"];
    $ed_fe = $_POST["fecha"];
    $ed_imp = $_POST["imp"];
    $ed_pais = $_POST["p_orig"];


    try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBRE, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) VALUES (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_origen)";

        $resultado = $base->prepare("$sql");   //devuelve un objeto de tipo STATEMENT

        $resultado->execute(array(":c_art" => $ed_c_art, ":seccion" => $ed_sec, ":n_art" => $ed_nom, ":precio" => $ed_pre, ":fecha" => $ed_fe, ":importado" => $ed_imp, ":p_origen" => $ed_pais));

        echo "Registro insertado";
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