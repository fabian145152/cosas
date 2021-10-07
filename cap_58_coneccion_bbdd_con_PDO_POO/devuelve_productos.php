
    <?php

    require "coneccion.php";
    class DevuelveProductos extends Coneccion
    {
        public function DevuelveProductos()
        {
            parent::__construct();

            //ese error de construct es del intellisense
        }
        public function get_productos($dato)
        {
            $sql = "SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN='" . $dato . "'";
            $sentencia = $this->coneccion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $this->coneccion_db = null;

            /*
            $resultado = $this->coneccion_db->query('SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN="' . $dato . '"');
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $resultado;
            */
        }
    }
