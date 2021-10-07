<?php

class Compra_vehiculo
{
    private $precio_base;   //esto es privado para todas las clases
    private static $ayuda = 0;
    // antes private static $ayuda = 4500;     //esto no pertenece a niguna clase
    //accedemos desde el metodo precio_final
    // al hacerlo asi puedo acceder desde fuera de la clase
    // Entonces podria manipular el vaor de la ayuda
    // Para solucionarlo tengo que encapsular la variable ayuda
    // QUEDA COMO private static DE ESTA FOMA NO SE PUEDE MODIFICAR DESDE AFUERA

    function Compra_vehiculo($gama)
    {
        if ($gama == "urbano") {
            $this->precio_base = 10000;
        } else if ($gama == "compacto") {
            $this->precio_base = 20000;
        } else if ($gama == "berlina") {
            $this->precio_base = 30000;
        }
    } //fin constructor

    //***************************************************
    //agergado metodo estatico que va a ser compartido con todas las clases
    // la variable $ayuda queda encapsulada
    // y tengo que llamar a la funcion, sino no se ejecuta nunca
    static function descuento_gobierno()
    {
        if (date("m-d-y") > "10-10-2022") {
            self::$ayuda = 4500;
        }
    }
    //con el if hago que el descuento sea hasta el 10-10-2022



    //****************************************************

    function climatizador()
    {
        $this->precio_base += 2000;
    } //fin climatizador
    function navegador_gps()
    {
        $this->precio_base += 2500;
    } //fin navegador gps

    function tapiceria_cuero($color)
    {
        if ($color == "blanco") {
            $this->precio_base += 3000;
        } else if ($color == "beige") {
            $this->precio_base += 3500;
        } else {
            $this->precio_base += 5000;
        }
    } //fin tapiceria

    function precio_final()
    {
        $valor_final = $this->precio_base - self::$ayuda;
        //no puedo usar $this ni -> porque pertenece al objeto
        // o sea para hacer referencia a un campo o variable estatica
        // uso self::
        return $valor_final;
    } //fin precio final

}//fin clase