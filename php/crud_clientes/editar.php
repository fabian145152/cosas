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
    $nombre = $_GET["nombre"];
    $direccion = $_GET["direccion"];
    $telef = $_GET["telef"];
    $celu = $_GET["celu"];
    $barrio = $_GET["barrio"];
    $cp = $_GET["cp"];
    $correo = $_GET["correo"];
  } else {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telef = $_POST["telef"];
    $celu = $_POST["celu"];
    $barrio = $_POST["barrio"];
    $cp = $_POST["cp"];
    $correo = $_POST["correo"];


    $sql = "UPDATE clientes SET nombre=:miNombre, 
                                 direccion=:miDireccion, 
                                 telef=:miTelef,
                                 celu=:miCelu,
                                 barrio=:miBarrio,
                                 cp=:miCp,
                                 correo=:miCorreo
                            WHERE id=:miId";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(
      ":miId" => $id,
      ":miNombre" => $nombre,
      ":miDireccion" => $direccion,
      ":miTelef" => $telef,
      ":miCelu" => $celu,
      ":miBarrio" => $barrio,
      ":miCp" => $cp,
      ":miCorreo" => $correo,
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
        <td>Nombre</td>
        <td><label for="nombre"></label>
          <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>">
        </td>
      </tr>
      <tr>
        <td>Direccion</td>
        <td><label for="direccion"></label>
          <input type="text" name="direccion" id="direccion" value="<?php echo $direccion ?>">
        </td>
      </tr>
      <tr>
        <td>Telefono</td>
        <td><label for="telef"></label>
          <input type="text" name="telef" id="telef" value="<?php echo $telef ?>">
        </td>
      </tr>
      <tr>
        <td>Celular</td>
        <td><label for="celu"></label>
          <input type="text" name="celu" id="celu" value="<?php echo $celu ?>">
        </td>
      </tr>
      <tr>
        <td>Barrio</td>
        <td><label for="barrio"></label>
          <input type="text" name="barrio" id="barrio" value="<?php echo $barrio ?>">
        </td>
      </tr>
      <tr>
        <td>CP</td>
        <td><label for="cp"></label>
          <input type="text" name="cp" id="cp" value="<?php echo $cp ?>">
        </td>
      </tr>
      <tr>
        <td>Correo</td>
        <td><label for="correo"></label>
          <input type="text" name="correo" id="correo" value="<?php echo $correo ?>">
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