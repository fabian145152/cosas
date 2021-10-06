<?php

include("coneccion.php");

$id = $_GET["id"];

$base->query("DELETE FROM clientes WHERE id='$id'");

header("location:index.php");
