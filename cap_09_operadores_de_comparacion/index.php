<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <ul class="lista">
        <li>$var1==$var2...........igual que................Verdadero si las 2 variables son iguales</li>
        <li>$var1===$var2........identica que............Verdadero si las 2 variables son iguales y del mismo tipo</li>
        <li>$var1!=$var2...........diferente que...........Verdadero si las 2 variables no son iguales</li>
        <li>$var1<>$var2..........diferente que...........Verdadero si las 2 variables no son iguales y no son del mismo tipo</li>
        <li>$var1<$var2............menor que...............Verdadero si $var1 es menor que $var2</li>
        <li>$var1>$var2............mayor que...............Verdadero si $var1 en mayor que $var2</li>
        <li>$var1<=$var2..........menor o igual que...Verdadero si $var1 es menor o igual a $var2</li>
        <li>$var1>=$var2..........mayor o igual que...Verdadero si $var1 es mayor o igual a $var2</li>
    </ul>

    <?php
    $var1 = 8;
    $var2 = "8";
    $var3 = "Fabian";
    if($var1===$var2){
        echo "son iguales";
    }else{
        echo "no son iguales";
    }

    ?>

</body>

</html>