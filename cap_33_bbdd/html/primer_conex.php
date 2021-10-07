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

    $db_host = "localhost";
    $db_name = "pruebas";
    $db_user = "root";
    $db_pass = "belgrado";   //si la bbdd no tiene contraseña podemos no usar esta var
    //creo 4 variables con los datos de la coneccion


    //Para conectar tenemos 2 formas
    //Procedimientos o
    //POO

    //1_Procedimientos
    $conexion = mysqli_connect($db_host, $db_user, $db_pass);
    //en ese orden , nombre del host, usuario, pass, nombre bbdd

    //si hay algun error se ejecuta esto
    if (mysqli_connect_errno()) {
        echo "<br>";
        echo "Fallo la coneccion a la BBDD";
        // si lo dejo asi sale el mensaje y manda el error de nuevo,
        //para que salga
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");
    //con esto saco la variable $db_name de $coneccion y si no encuentra la BBDD 
    //me tira el error de "No se encuentra la BBDD".


    mysqli_set_charset($conexion, "utf8");
    //con esto seteo el juego de caracteres que uso en el browser


    //Primer consulta

    $consult = "SELECT * FROM datospersonales";
    //en la variable consult tenemos almacenada la consulta que queremos hacer

    $resultado = mysqli_query($conexion, $consult);
    //Con esto creamos en la memoria una tabla con la consulta que nos devuelve consult
    //para poder ver lo que esta en esa tabla en memoria, usamos otra vez la funcion 
    //mysqli_fetch_row. Ve linea a linea la informacion que hay en esa tabla virtual.

    /*
    $fila = mysqli_fetch_row($resultado);

    //se guarda todo en un array
    echo $fila[0] . " ";
    //con eso veo el primer campo del primer registro.
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " ";
    echo "<br>";
    //Si copio desde $fila veo el primero y segundo registro


    $fila = mysqli_fetch_row($resultado);

    //se guarda todo en un array
    echo $fila[0] . " ";
    //con eso veo el primer campo del primer registro.
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " ";
    echo "<br>";
    // El problema es si tengo mil registros
    */
    /*
    $registros = 1;
    while ($registros <= 5) {
        $fila = mysqli_fetch_row($resultado);
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        echo $fila[3] . " ";
        echo "<br>";
        $registros++;
    }
    //De esta forma tambien anda pero no puedo agregar registros
    */

    //while (($fila = mysqli_fetch_row($resultado)) == true) {
    //lo puedo hacer como arriba, pero si $resultado en > 0 entonces es false y no se ejecuta
    while ($fila = mysqli_fetch_row($resultado)) {
        //Si la funcion mysqli_fetch_row se ejecuta es porque en el array en la memoria hay algo y es true

        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        echo $fila[3] . " ";
        echo "<br>";
    }

    //Cuando termino de hacer la consulta tengo que cerrar la coneccion a la BBD
    //Para economizar recursos

    mysqli_close($conexion);
    echo "<h1>Fin video 37<h2>";

    ?>
</body>

</html>