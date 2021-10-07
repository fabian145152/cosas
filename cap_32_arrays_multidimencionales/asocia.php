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

    $alimentos = array(
        "fruta" => array(
            "tropical" => "kiwi",
            "citrico" => "mandarina",
            "otros" => "manzana"
        ),
        "leche" => array(
            "animal" => "vaca",
            "vegetal" => "coco"
        ),
        "carne" => array(
            "vacuno" => "lomo",
            "porcino" => "pata"
        )
    );

    //  echo $alimentos["carne"]["vacuno"];     //con esto veo un solo elemento                                 

    //con foreach

    foreach ($alimentos as $clave_alim => $alim) {
        // $clave_alim corresponde a fruta, leche y carne
        // $alim identifica a la segunda dimension tropical,mandarina,animal,pata, todos

        echo "$clave_alim:<br>";

        while (list($clave, $valor) = each($alim)) {
            echo "$clave = $valor<br>";
        }
        echo "<br>";
    }

    ?>
</body>

</html>