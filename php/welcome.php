<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" media="all" />
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['logueado']) {
        echo "Bienvenido: " . $_SESSION['uname'] . "<br>";
        echo "Hora de coneccion: " . $_SESSION['time'] . "<br>";
        echo date("l");
        echo "<br>";
        echo "Semana numero: " . date("W");
    }
    ?>

    <div id="contenedor">
        <div id="cabecera">
            Cabecera
        </div>
        <div id="menu">
            menú de enlaces
        </div>
        <div id="principal">
            <div id="contenido">
                <nav id="main-nav">
                    <ul>

                        <li><a href="crud_proveedores/index.php">Proveedores</a></li>
                        <li><a href="crud_clientes/index.php">Clientes</a></li>
                        <li><a href="crud_productos/index.php">Productos</a></li>
                        <li><a href="html/legado.html">Ventas</a></li>
                        <li><a href="../index.html">Salir</a></li>
                    </ul>
                </nav>
            </div>
            <div id="lateral">
                Columna lateral derecha
            </div>
        </div>
        <div id="pie">

        </div>
    </div>

</body>

</html>