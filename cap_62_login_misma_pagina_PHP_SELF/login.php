<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1,
        h2 {
            text-align: center;
        }

        table {
            width: 25%;
            background-color: #ffc;
            border: 2px dotted #f00;
            margin: auto;
        }

        .izq {
            text-align: right;
        }

        .der {
            text-align: left;
        }

        td {
            text-align: center;
            padding: 10px;
        }
    </style>

</head>

<body>
    <?php
    if (isset($_POST["enviar"])) {              //con esta linea espero a que aprete el boton enviar, si no la pagina no funciona

        try {
            $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "belgrado");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";
            $resultado = $base->prepare($sql);

            $login = htmlentities(addslashes($_POST["login"]));
            $password = htmlentities(addslashes($_POST["password"]));


            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);
            $resultado->execute();
            $numero_registro = $resultado->rowCount();
            if ($numero_registro != 0) {
                session_start();
                $_SESSION["usuario"] = $_POST["login"];
                //header("Location:usuarios_registrados_1.php");
            } else {
                //header("location:login.php");
                echo "Error de Usuario o contraseña";
            }
        } catch (Exception $e) {
            die("error: " . $e->getMessage());
        }
    }
    ?>
    <?php
    if (!isset($_SESSION["usuario"])) {
        include("formulario.html");
    } else {
        echo "Usuario: " . $_SESSION["usuario"];
    }

    ?>
    <h2>CONTENIDO DE LA WEB</h2>
    <table width="800" border="0">
        <tr>
            <td><img src="1.jpg" alt="foto_1" width="300px"></td>
            <td><img src="2.jpg" alt="foto_2" width="300px"></td>
        </tr>
        <tr>
            <td><img src="3.jpg" alt="foto_3" width="300px"></td>
            <td><img src="4.jpg" alt="foto_4" width="300px"></td>
        </tr>
    </table>
</body>

</html>