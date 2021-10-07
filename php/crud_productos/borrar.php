<?php

include("coneccion.php");

$id = $_GET["id"];

$base->query("DELETE FROM stock_productos WHERE id='$id'");

header("location:index.php");
