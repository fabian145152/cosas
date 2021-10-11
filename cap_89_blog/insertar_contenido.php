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
    if ($_FILES["imagen"]["error"]) {
        switch ($_FILES["imagen"]["error"]) {

            case 1: //Error exeso de tamaño del archivo en php.ini
                echo "El tamaño del archivo exede de php.ini";
                break;
            case 2: //Error tamaño del archivo especificado en html  <input type="hidden" name="MAX_TAM" value="2097152">
                echo "El tMño de archivo exede los 2 Mb";
                break;
            case 3: //Archivo corrupto, ver los casos en php.org
                echo "El envio del archivo se interrumpio";
                break;
            case 4:  //No hay fichero
                echo "El archivo no existe";
                break;
        }
    } else {
        echo "Entrada subida correctamente. <br>";
        if ((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK))) {
            //si UPLOAD_ERR_OK = 0 no hay error
            //si hay una imagen con nombre menor a 2 Mb "y" no hay error 
            //es como preguntar si todo fue bien.
            $destino_de_ruta = "imagenes/";
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_de_ruta . $_FILES["imagen"]["name"]);
            echo "El achivo: " . $_FILES["imagen"]["name"] . " Se ha copiado en el directorio de imagenes.";
        } else {
            echo "El archivo no se pudo copiar en el archivo de imagenes";
        }
    }

    $eltitulo = $_POST["campo_titulo"];
    $lafecha = date("Y-m-d H:i:s");
    $elcomentario = $_POST["area_comentarios"];
    $laimagen = $_FILES["imagen"]["name"];


    $miconsulta = "INSERT INTO contenido (titulo, fecha, comentario, imagen) Values ('" . $eltitulo . "','" . $lafecha . "','" . $elcomentario . "','" . $laimagen . "')";
    $resultado = mysqli_query($miconeccion, $miconsulta);
    /* Cerramos coneccion */
    mysqli_close($miconeccion);
    echo "<br> Se ha agregado la entrada con exito. <br><br>";
    ?>
    <a href="formulario.php">Añadir nueva entrada</a>
    <br>
    <a href="mostrar_blog.php">Ver Blog</a>
</body>

</html>