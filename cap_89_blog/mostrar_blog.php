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
    $miconeccion = mysqli_connect('localhost', 'root', 'belgrado', 'bbddblog');

    /* Comprobar coneccion */
    if (!$miconeccion) {
        echo "La coneccion fallo" . mysqli_error();
        exit();
    }
    $miconsulta = "SELECT * FROM contenido ORDER BY fecha DESC";  //El order by asi como esta es de la mas vieja a la mas nueva, si quiero al reves ASC o DSEC
    if ($resultado = mysqli_query($miconeccion, $miconsulta)) {
        while ($registro = mysqli_fetch_assoc($resultado)) {
            echo "<h3>" . $registro["titulo"] . "</h3>";
            echo "<h4>" . $registro["fecha"] . "</h4>";
            echo "<div style='width:400px'>" . $registro["comentario"] . "</div><br><br>";
            if ($registro["imagen"] != "") {
                echo "<img src='imagenes/" . $registro['imagen'] . "'width='300px'>";
            }
            echo "<hr>";
        }
    }




    ?>
</body>

</html>