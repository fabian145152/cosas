<?php

require("config.php");

class Coneccion
{
    protected $coneccion_db;
    public function Coneccion()
    {
        try {

            $this->coneccion_db = new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'belgrado');

            $this->coneccion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->coneccion_db->exec("SET CHARACTER SET utf8");

            return $this->coneccion_db;
        } catch (Exception $e) {
            echo "La linea de error es: " . $e->getLine();
        }
    }






    //-------------------------------------------------------------------------
    /*
    {
        $this->coneccion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

        if ($this->coneccion_db->connect_errno) {
            echo "Fallo al conectar a MySql: " . $this->coneccion_db->connect_error;
            return;
        }
        $this->coneccion_db->set_charset(DB_CHARSET);
    }
    */
}
