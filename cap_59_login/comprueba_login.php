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

    try {
        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "belgrado");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["login"]));           //httmlentities convierte cualquier simbolo en html- addslashes escapa cualquier caracter del tipo " ó ' ó / para que no se pase
        $password = htmlentities(addslashes($_POST["password"]));
        // bin param, se usa para los identificadores de la $sql :login y :password
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();      //si rowcount no encuentra un usuario devuelve 0 si encuentra 1 devuelfe 1 y se almacena en $numero_registro
        if ($numero_registro != 0) {
            session_start();        //esto es para que no entre cualqiera copiando y pegando la url
            $_SESSION["usuario"] = $_POST["login"];
            header("Location:usuarios_registrados_1.php");
        } else {
            header("location:login.php");   //me redirige a la pagina anterior
        }
    } catch (Exception $e) {
        die("error: " . $e->getMessage());
    }

    ?>
</body>

</html>