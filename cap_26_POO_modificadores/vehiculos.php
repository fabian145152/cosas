
    <?php

    //Coche con mayusculas

    class Coche
    {
        protected $ruedas;        //Propiedades o atributos
        //si es protected solo accedo desde el getters y setters 
        // si la declaro privated puedo accedes a la variable desde 
        //la clase y la clase heredada, pero no desde el getters 
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

        function get_ruedas()   //por convencio se le llama get_xxx pero se puede llamar de cualquier forma
        {
            return $this->ruedas;
        }
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


        function Camion()
        {
            // Este es el constructor porque la funcion 
            //se llama igual que la clase,
            //le da un estado inicial a la clase
            $this->ruedas = 8;            //nuestro coche en estadio inicial tiene 4 ruedas
            $this->color = "gris";            //El color esta sin definir
            $this->motor = 2600;          //Con esto le dimos estado inicial a nuestro objeto coche
        }

        //function establece_color($color_camion, $nombre_camion)
        function set_color($color_camion, $nombre_camion)
        {
            $this->color = $color_camion;
            echo "El color de: " . $nombre_camion . "es: " . $this->color . "<br>";
        }
        function arrancar()
        {
            parent::arrancar();
            echo "Camion arrancando";
        }
    }
