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

        $login = htmlentities(addslashes($_POST["login"]));
        $password = htmlentities(addslashes($_POST["pass"]));


        $contador = 0;

        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuarios_pass WHERE USUARIOS = :login";


        $resultado = $base->prepare($sql);

        $resultado->execute(array(":login" => $login));

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

            if (password_verify($password, $registro['PASSWORD'])) {
                $contador++;
            }
        }
        if ($contador > 0) {
            echo "Usuario registrado";
        } else {
            echo "Usuario no registrado<br>";
        }
        $resultado->closeCursor();
    } catch (Exception $e) {

        die("Error: " . $e->getMessage());
    }



    ?>
</body>

</html>