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
    $calle = $_GET["calle"];
    $numero = $_GET["numero"];
    $barrio = $_GET["barrio"];
    $cp = $_GET["cp"];
    $telefono = $_GET["telefono"];
    $celular = $_GET["celular"];
    $correo = $_GET["correo"];
  } else {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $calle = $_POST["calle"];
    $numero = $_POST["numero"];
    $barrio = $_POST["barrio"];
    $cp = $_POST["cp"];
    $telefono = $_POST["telefono"];
    $celular = $_POST["celular"];
    $correo = $_POST["correo"];


    $sql = "UPDATE proveedores SET nombre=:miNombre, 
                                 calle=:miCalle, 
                                 numero=:miNumero,
                                 barrio=:miBarrio,
                                 cp=:miCp,
                                 telefono=:miTelefono,
                                 celular=:miCelular,
                                 correo=:miCorreo
                                WHERE id=:miId";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(
      ":miId" => $id,
      ":miNombre" => $nombre,
      ":miCalle" => $calle,
      ":miNumero" => $numero,
      ":miBarrio" => $barrio,
      ":miCp" => $cp,
      ":miTelefono" => $telefono,
      ":miCelular" => $celular,
      ":miCorreo" => $correo
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
        <td>Calle</td>
        <td><label for="calle"></label>
          <input type="text" name="calle" id="calle" value="<?php echo $calle ?>">
        </td>
      </tr>
      <tr>
        <td>Numero</td>
        <td><label for="numero"></label>
          <input type="text" name="numero" id="numero" value="<?php echo $numero ?>">
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
        <td>Telefono</td>
        <td><label for="telefono"></label>
          <input type="text" name="telefono" id="telefono" value="<?php echo $telefono ?>">
        </td>
      </tr>
      <tr>
        <td>Celular</td>
        <td><label for="celular"></label>
          <input type="text" name="celular" id="celular" value="<?php echo $celular ?>">
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