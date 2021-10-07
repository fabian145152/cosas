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

    echo var_dump($alimentos);

    ?>
</body>

</html>