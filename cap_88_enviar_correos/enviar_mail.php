<?php

if ($_POST["nombre"] == "" || $_POST["apellido"] == "" || $_POST["email"] == "" || $_POST["comentarios"] == "") {
    echo "Campos incompletos";
    die();      //el programa se detiene y el resto de las lineas no las ejecuta
}



$texto_mail = $_POST["comentarios"];
$destinatario = $_POST["email"];
$asunto = $_POST["asunto"];

$headers = "MIME-Version: 1.0\r\n";     //Este parametro es opcional
//Buscar en google
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
// .= sirve para concatenar
$headers .= "From: Prueba Fabian < fabian_12345@hotmail.com >\r\n";

$exito = mail($destinatario, $asunto, $texto_mail, $headers);
//la funcion mail() devuelve true si el mensaje se envio

if ($exito) {
    echo "Mensaje enviado con Exito";
} else {
    echo "Error en el envio del mensaje";
}
