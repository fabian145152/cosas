<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Que es PDO.</h1>
    <h2>PHP DATA OBJECT.</h2>
    <h3>Es una libreria</h3>
    <h4>Con mysqli se puede conectar solo a mysql</h4>
    <h4>Con pdo se puede coectar a:</h4>
    <ul>
        <li>Oracle</li>
        <li>Mysql</li>
        <li>SQL Server</li>
        <li>Access</li>
    </ul>
    <p>En "https://www.php.net/manual/es/book.pdo.php" veo la clase PDO</p>
    <a href="https://www.php.net/manual/es/book.pdo.php">Ver aca y probarlo</a>
    <br><br>
    <?php

    try {
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');
        echo "<h1>Coneccion ok</h1>";
    } catch (Exception $e) {
        die('Error: ' . $e->getmessage());
    } finally {     //el finally es opcional
        $base = null;
    }


    echo "<p>excepcion = fallo en tiempo de ejecucuon</p>";
    echo "<p>Significa que hay un error de otro tipo, no se sintaxis.</p>";
    echo "<p>si no que se haya caido la BBDD o el servidor o alguna otra cosa fuenra del funcionamiento del prog</p>";
    echo "<p>se usa try catch, significa: ejecuta la instruccion y si hay una excepcion, 'error' capturala</p>";
    ?>
</body>

</html>