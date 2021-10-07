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

    $usuario = $_POST['usu'];
    $contrasenia = $_POST['contra'];

    //para encriptar solo agrego esta linea

    $_pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);
    //me agrega la sal de forma automatica.

    try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO USUARIOS_PASS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";

        $resultado = $base->prepare($sql);

        $resultado->execute(array(":usu" => $usuario, ":contra" => $_pass_cifrado));
        //$_pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);
        //Solo agregando el array, modifico el coste.
        //me agrega la sal de forma automatica.

        echo "Registro Insertado.<br>";
        echo "Si agrego 2 usuarios con el mismo pass, reviso la BBDD y el codigo encriptado es diferente.";
        $resultado->closeCursor();
    } catch (Exception $e) {
        echo "Error en la linea: " . $e->getLine();
    } finally {
        $base = null;
    }

    ?>
</body>

</html>