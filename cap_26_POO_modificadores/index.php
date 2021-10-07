<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            margin: 0px;
        }

        ul li {
            text-align: left;
        }

        p {
            line-height: 8px;
        }
    </style>
    <ul>
        <li>Modularizacion</li>
        <p>El concepto de <strong>modularizacion</strong> es como un equipo de audio modular,</p>
        <p>si deja de funcionar la casetera todavia se puede usar la radio o el tocadiscos.</p>
        <p>O sea que si deja de funcionar una clase que siga funcionando con otra heredada anterior.</p>
        <p>De esta manera es mas facil localizar los errores que en un archivo gigantesco.</p>
        <br>
        <li>Encapsulacion</li>
        <p>Siguiendo con el equipo de audio modular, crear una clase</p>
        <p>class reproductor_cd</p>
        <p>class radio</p>
        <p>class ecualizador</p>
        <p>class casetera</p>
        <p>No sirve por ejemplo accedes a cambiar la estacion de radio desde el class_cd, cada clase con sus conroles</p>
        <p>Todas las clases bien <strong>Encapsulado</strong></p>
        <p>O sea, no tiene ningn sentido que pueda avanzar las canciones si el modulo de clas_cd dejo de funcionar.</p>
        <li>Modificadores de acceso</li>
        <ul>
            <li>Public</li>
            <ul>
                <li>El volumen por ejemplo es un modificador Publico</li>
                <li>Accesible desde cualquier parte</li>
            </ul>
            <li>Private</li>
            <ul>
                <li>Accesible desde la propia clase</li>
                <li>Por ejemplo adelantar canciones solo desde el CD</li>
            </ul>
            <li>Protected</li>
            <ul>
                <li>Accesible desde la propia clase y desde cualquier parte</li>
                <li>Ojo que esta disponible desde la version 4 de PHP</li>
                <li>Nosotros usamos PHP version 6</li>
            </ul>
        </ul>

    </ul>
    <h1>Inicio del video 28</h1>
    <?php

    include("vehiculos.php");

    $mazda = new Coche();       //nuevo objeto
    $pegaso = new Camion();     //nuevo objeto
    //$mazda->ruedas = 7;     //si dejo esto el valor de ruedas se mofifica.
    //$mazda->;            // la variable ruedas esta oculto, encapsulado
    //no nos permite modificar las ruedas desde fuera d la clase

    echo "si cambio en vehiculos la variable $ ruedas por private $ ruedas <br> ";
    echo "nadie va a poder agregar el modificador para ruedas <br>";
    echo "La encapsulo <br>";
    echo "La variable $ ruedas va a ser accesible solo desd la clase Coche<br>";

    //Asi llamp a las funcionalidades
    //$pegaso->frenar();
    //$pegaso->arrancar();


    //  echo "El mazda tiene " . $mazda->ruedas . " ruedas <br>";
    //  esto no lo puedo hacer porque esta encapsulada
    echo "<br>El pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";

    echo "para ver el metodo ruedas de la clase 
    coche tengo que usar las funciones getters y setters.<br>";
    echo "La funcion setters sirve para modificar las propiedades de un objeto.<br>";
    echo "La funcion gettets sirver para ver las propiedades de un objeto.<br>";

    echo "El mazda tiene: " . $mazda->get_ruedas() . " ruedas<br>";
    echo "El metodo setter seria establece_color que ya lo usamos antes.<br>";

    echo "El pegaso tiene " . $pegaso->get_ruedas() . " ruedas.<br>";
    echo "No se ve el getters porque la variable ruedas esta encapsulada.";


    ?>
</body>

</html>