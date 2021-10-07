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

    //Coche con mayusculas

    class Coche
    {
        var $ruedas;        //Propiedades o atributos
        var $color;
        var $motor;

        function Coche()
        {
            // Este es el constructor porque la funcion 
            //se llama igual que la clase,
            //le da un estado inicial a la clase
            $this->ruedas = 4;            //nuestro coche en estadio inicial tiene 4 ruedas
            $this->color = "";            //El color esta sin definir
            $this->motor = 1600;          //Con esto le dimos estado inicial a nuestro objeto coche
        }

        //las funciones son las funcionalidades
        function arrancar()
        {
            echo "Estoy arrancando<br>";
        }
        function girar()
        {
            echo "Estoy girando<br>";
        }
        function frenar()
        {
            echo "Estoy frenendo<br>";
        }
        
    }

    $renault = new Coche();        //instancia todas la que quiera
    $mazda = new Coche();
    $seat = new Coche();
    //Para que el mazda gire
    $mazda->girar();   //Esta es una llamada a un metodo para que nuestro objeto llamado cocge gire
    echo $mazda->ruedas;
    ?>
</body>

</html>