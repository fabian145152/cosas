<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

  <h1>ACTUALIZAR</h1>

  <?php

  include("coneccion.php");

  if (!isset($_POST["bot_actualizar"])) {
    $id = $_GET["id"];
    $codigo = $_GET["codigo"];
    $seccion = $_GET["seccion"];
    $nombre = $_GET["nombre"];
    $proveedor = $_GET["proveedor"];
    $costo = $_GET["costo"];
    $precio_venta = $_GET["precio_venta"];
    $stock = $_GET["stock"];
    $obs = $_GET["obs"];
  } else {
    $id = $_POST["id"];
    $codigo = $_POST["codigo"];
    $seccion = $_POST["seccion"];
    $nombre = $_POST["nombre"];
    $proveedor = $_POST["proveedor"];
    $costo = $_POST["costo"];
    $precio_venta = $_POST["precio_venta"];
    $stock = $_POST["stock"];
    $obs = $_POST["obs"];


    $sql = "UPDATE stock_productos SET codigo=:miCodigo, 
                                 seccion=:miSeccion, 
                                 nombre=:miNombre,
                                 proveedor=:miProveedor,
                                 costo=:miCosto,
                                 precio_venta=:miPrecio_venta,
                                 stock=:miStock,
                                 obs=:miObs
                                WHERE id=:miId";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(
      ":miId" => $id,
      ":miCodigo" => $codigo,
      ":miSeccion" => $seccion,
      ":miNombre" => $nombre,
      ":miProveedor" => $proveedor,
      ":miCosto" => $costo,
      ":miPrecio_venta" => $precio_venta,
      ":miStock" => $stock,
      ":miObs" => $obs
    ));

    header("location:index.php");
  }
  ?>

  <p>&nbsp;</p>
  <form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <table width="25%" border="0" align="center">
      <tr>
        <td></td>
        <td><label for="id"></label>
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        </td>
      </tr>
      <tr>
        <td>Codigo</td>
        <td><label for="codigo"></label>
          <input type="text" name="codigo" id="codigo" value="<?php echo $codigo ?>">
        </td>
      </tr>
      <tr>
        <td>Seccion</td>
        <td><label for="seccion"></label>
          <input type="text" name="seccion" id="seccion" value="<?php echo $seccion ?>">
        </td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><label for="nombre"></label>
          <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>">
        </td>
      </tr>
      <tr>
        <td>Proveedor</td>
        <td><label for="proveedor"></label>
          <input type="text" name="proveedor" id="proveedor" value="<?php echo $proveedor ?>">
        </td>
      </tr>
      <tr>
        <td>Precio de costo</td>
        <td><label for="costo"></label>
          <input type="text" name="costo" id="costo" value="<?php echo $costo ?>">
        </td>
      </tr>
      <tr>
        <td>Precio_venta</td>
        <td><label for="precio_venta"></label>
          <input type="text" name="precio_venta" id="precio_venta" value="<?php echo $precio_venta ?>">
        </td>
      </tr>
      <tr>
        <td>Stock</td>
        <td><label for="stock"></label>
          <input type="text" name="stock" id="stock" value="<?php echo $stock ?>">
        </td>
      </tr>
      <tr>
        <td>Observaciones</td>
        <td><label for="obs"></label>
          <input type="text" name="obs" id="obs" value="<?php echo $obs ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>