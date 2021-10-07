<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>AL password encriptado en una BBDD se le llama codigo Hash.</h1>
    <h2>Algunos de los algoritmos mas importantes.</h2>
    <ul>
        <li>MD5----------md5()</li>
        <li>SHA1---------sha1()</li>
        <li>SHA256-------hash()</li>
        <li>BLOWFISH</li>
        <ul>
            <li>crypt()</li>
            <li>password_hash()</li>
        </ul>
    </ul>
    <h2>Los primeros 4, no se recomiedan porque son muy utilizados, se guardan en unas tablas llamadas Rainbows tables, donde se guardan los codigos hash y su correspondiente contraseña.</h2>
    <h2>El que se recomienda y se dice que es seguro en el BLOWFISH</h2>
    <br>
    <?php

    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT) . "\n";

    ?>
    <h3>$2y$10$WDSBrpSSg.4yVPJbtaq1sObqPebKHfot83Y2sVJ4etaEMXV42yYWC</h3>
    <h3>$2y$ = Algoritmo</h3>
    <h3>10$ = Es la fuerza de la encriptacion, cuando mas alta mas tiempo de encriptacion y decriptacion</h3>
    <h3>WDSBrpSSg.4yVPJbtaq1sObqPebKHfot83Y2sVJ4etaEMXV42yYWC = Hash, cambia siempres</h3>
    <h4>Por mas que tenga 2 contraseñas iguales, no van a tener el mismo d¿codigo, hay otro codigo que se la llama SALT "sal"</h4>
    <h4>Por ahora es 100% seguro pero con el tiempo va a dejar de serlo.</h4>
    <h4>php.net, Recomienda usar como motoo de encriptacion el PASSWORD_DEFAULT</h4>
    <a href="crear_usuarios.php">Como crear contraseña encriptada</a>
</body>

</html>