<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="aa">
    <style>
        .aa {
            margin: 0px;
            padding: 0px;
            font-size: 15px;
        }
    </style>

    <h1>3 terminos a manejar</h1>
    <ul>
        <li>Objeto</li>
        <li>Clase</li>
        <li>Instancia</li>
    </ul>
    <ul>
        <h3>Objeto. Ej un auto</h3>
        <li>Tiene propiedades. (Atributos)</li>
        <ul>
            <li>Color</li>
            <li>Peso</li>
            <li>Alto</li>
            <li>Largo</li>
        </ul>
        <li>Tiene comportamiento. (Que es capaz de hacer)</li>
        <ul>
            <li>Arrancar</li>
            <li>Frenar</li>
            <li>Girar</li>
            <li>Acelerar</li>
        </ul>
        <h3>Clase</h3>
        <li>Caracterinticas comunes de un grupo de objetos.</li>
        <ul>
            <li>4 ruedas</li>
            <li>1 motor</li>
            <li>1 baul</li>
            <li>1 auxilio</li>
        </ul>
        <h3>Instancia</h3>
        <ul>
            <li>Instanciar una clase</li>
            <li>Instanciacion de clases</li>
            <li>Ejemlar de clases</li>
            <li>Son las diferencias entre las clases</li>
            <ul>
                <li>colores</li>
                <li>velocidad final</li>
                <li>potencia del motor</li>
            </ul>
        </ul>
    </ul>
    <a href="Poo_1.php">ejemplos 1</a>
    <br>
    <a href="Poo_2.php">ejemplos 2</a>
    <br>
    <?php

    include("vehiculos.php");
    $mazda = new Coche();
    $pegaso = new Camion();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";
    echo "El pegaso tiene " . $pegaso->ruedas . " ruedas <br>";



    ?>


    <h1>Fin de video 24</h1>


</body>

</html>