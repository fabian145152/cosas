<?php

require("config.php");

class Coneccion
{
    protected $coneccion_db;
    public function Coneccion()
    {
        $this->coneccion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

        if ($this->coneccion_db->connect_errno) {
            echo "Fallo al conectar a MySql: " . $this->coneccion_db->connect_error;
            return;
        }
        $this->coneccion_db->set_charset(DB_CHARSET);
    }
}
