<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <form action="resultados_paises.php" method="get">
        <label>Introduce Pais: <input type ="text" name="buscar"></label> 
        <input type="submit" name="Enviando" value="Dale!">

    </form>

    <ul>
        <li>Ventajas</li>
        <ul>
            <li>Evitan inyeccion SQL</li>
            <li>En consultas de tipo INSERT son mas rapidos y eficientes</li>
        </ul>
    </ul>
    <ul>
        <li>Inconvenientes</li>
        <ul>
            <li>Hay que escribir mas codigo</li>
            <li>Hay que conocer nuevas funciones</li>
        </ul>
    </ul>


    <ol>
        <li>Se prepara la consulta, pero el criterio se
            reemplaza por signo de interrogacion cerrado.</li>
        <h4>sql="SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN = ?"</h4>
        <li>Preparar la consulta "mysqli_prepare()"</li>
        <h4>$resultado = mysqli_prepare($coneccion,$sql)<h4>
        <li>Nos devuelve un objeto del tipo mysqli_stmt</li>
        <h4>lysqli_stmt_bind_param(devuelto por prepare) devuelve true o false, si se ejecuto o no la funcion</h4>
        <li>Unir los parametros a la sentencia SQL con "mysqli_stms_bind_param()"</li>
        
            <ol>
                <li>primer parametro tipo de dato de que va a ser, texto o numero entero o decimal</li>
                <li>segundo parametro, la palabra</li>
                <li>Y tercero, el objeto mysqli_stmt que nos devolvio la funcion prepare</li>
           </ol>
        <li>Ejecutar la consulta preparada, tambien nos va a perir el objeto que nos devolvio la funcion prepare</li>
        <h4>mysqli_stmt_execute()</h4>
        <li>Asociar variables</li>
        <h4>mysqli_stmt_result()</h4>
        <p>Devuelve true o false, necesita como parametro tantas variables como columnas en la consulta</p>
        <li>Por ultimo se leen los valorez con la funcion mysqli_stmt_fetch()</li>
        <p>esta funcion nos pide como argumento el objeto mysqli_stmt() que nos devuelve mysqli_prepare()</p>
    </ol>
</body>

</html>