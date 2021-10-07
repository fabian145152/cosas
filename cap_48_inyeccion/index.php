<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Eliminar</h1>
    <h2>Proteger de Borrar las BBDD</h2>
    <form action="borrar_usuario.php" method="get">
        <label>Usuario: <input type="text" name="user"></label>
        <br><br>
        <label>Contraseña:<input type="text" name="pass"></label>
        <input type="submit" name="enviando" value="Borrar Usuario!">
    </form>
    <p>$usuario = mysqli_real_escape_string($conexion, $_GET["user"]);</p>
    <p>$contraseña = mysqli_real_escape_string($conexion, $_GET["pass"]);</p>
    <p>Con esa edicion del $_GET y la funcion mysqli_real_escape_string()</p>
    <p>hago que los caracteres que entren por el input me los filtre y no pueda afectar mi BBDD</p>

    <p>Si agrego cualquier nombre y en el segundo campo</p>
    <h3>' or '1' = '1</h3>

    <p>Hay otra funcio n que es </p>
    <h3>mysqli_addslashes()</h3>
    <p>Es obsoleta solo filtra el caracter " ' "</p>


</body>

</html>