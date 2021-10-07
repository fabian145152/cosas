<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>
            <h1>Que son la Cookies.</h1>
        </li>
        <ul>
            <li>Cuando escribimos una direccion en la barra del navegador, estamos realizando una peticion al servidor.</li>
            <li>El servidor lo interpreta y nos devuelve una pagina en HTML o PHP</li>
            <li>Cuando la Pc abre la pagina, en segundo plano se crea una Cookie. Todos los navegadores tienen un espacio reservado para guardar esa cookie</li>
            <li>Una cookie es in archivo de texto plano donde se guarda cualquier cosa como nombres de usuario o contraseñas, para que el usuario no tenga que ingresar datos continuamente</li>
            <li>Tambien se guarda informacio sobre las compras que realiza el usuario.</li>
            <li>Al podes rescatar esa informacion, voy a mostrar datos sobre lo que le interesa al usuario</li>
            <li>Ejemplo: ayer navege una pagina, guardo los cookies, hoy abri una pagina y me abrio 20 ventanas emergentes con la info guardada en la cookie</li>
            <li>Siempre hay que informar si esta de acuerdo con guardar las cookies</li>
            <li>Se pueden borrar cuando cierro la pagina, cuando apago el pc o guardarla siempre</li>
            <li>Cookie viene del cuento de Hansel y Gretel</li>
        </ul>
        <li>
            <h1>Como crear una Cookie.</h1>

            <?php

            setcookie("prueba", "esta es la informacion de la primera cookie", time() + 300, "http://localhost/cap_63_cookies/");
            // La Cookie lleva siempre un nombre y un valor
            // La crea en el momento que indica el reloj de la computadora, y la duracion es de 30seg
            //2.592.000 segundos es igual a un mes
            //El cuarto parametro especifica donde se va a utilizar la cookie 
            ?>
        </li>
        <li>
            <h1>Accedes a los datos almacenados en una Cookie.</h1>
        </li>
    </ul>
    <ul>
        <li>Parametros de una Cookie</li>
        <ul>
            <li>Vigencia (duracion)</li>
            <ul>
                <li>Si no le pongo ningun parametro cuando cierro el navegador se borra</li>
            </ul>
            <li>Directorio de actuacion</li>
        </ul>
        <ul>
            <li>Eliminacion de la Cookie</li>
        </ul>
    </ul>
</body>

</html>