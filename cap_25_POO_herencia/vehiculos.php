
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
            $this->color = "gris";            //El color esta sin definir
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
            echo "Estoy frenando<br>";
        }
    }

    //Borre todas las instancias

    //----------------------------------------------------------------------------------------------------------

    //Coche con mayusculas

    class Camion extends Coche
    {
        var $ruedas;        //Propiedades o atributos
        var $color;
        var $motor;

        function Camion()
        {
            // Este es el constructor porque la funcion 
            //se llama igual que la clase,
            //le da un estado inicial a la clase
            $this->ruedas = 8;            //nuestro coche en estadio inicial tiene 4 ruedas
            $this->color = "";            //El color esta sin definir
            $this->motor = 2600;          //Con esto le dimos estado inicial a nuestro objeto coche
        }
        /*
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
            echo "Estoy frenando<br>";
        }
        */
        function establece_color($color_camion, $nombre_camion)
        {
            $this->color = $color_camion;
            echo "El camion marca " . $nombre_camion . " es color " . $this->color . "<br>";
        }
    }
