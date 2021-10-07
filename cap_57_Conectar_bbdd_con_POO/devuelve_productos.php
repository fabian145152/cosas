
    <?php

    require "coneccion.php";
    class DevuelveProductos extends Coneccion
    {
        public function DevuelveProductos()
        {
            parent::__construct();

            //ese error de construct es del intellisense
        }
        public function get_productos()
        {
            $resultado = $this->coneccion_db->query('SELECT * FROM PRODUCTOS');
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }
    }


