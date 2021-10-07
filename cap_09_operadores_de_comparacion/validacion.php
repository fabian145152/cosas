<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="main.css" rel="stylesheet">
</head>

<body>
   
    <?php

    if (isset($_POST["enviando"])) {
        $usuario = $_POST["nombre_usuario"];
        $edad = $_POST["edad_usuario"];
        if ($usuario == "Fabian" && $edad >= 18) {
            echo "<p class='validado'>Podes entrar</p>";
        } else {
            echo "<p class='no_validado'>" . "No entrar</p>";
        }
    }
    ?>
</body>

</html>