<!doctype html>
<html>

<head>

  <meta charset="utf-8">
  <title>Documento sin título</title>

</head>

<body>

  <form action="insertar_registros_perfiles.php" method="get">

    <p>
      <label>Usuario:
        <input type="text" name="usu">
      </label>
      <br>
      <label>Contraseña:
        <input type="text" name="con">
      </label>
    </p>
    <p>Perfil:
      <label for="perfil"></label>
      <select name="perfil" id="perfil">
        <option>administrador</option>
        <option>usuario</option>
      </select>
    </p>
    <p>
      <input type="submit" name="enviando" value="Registro">
    </p>

  </form>
  <p>Todo empieza en esta pagina</p>
  <p>Las paginas no tienen que tener la opcion de seleccionar en el registro administrador o usuario, esto lo tiene que hacer el administrador del sistema</p>
  <p>Ver que el formulario_login_perfiles.php apunta a pagina_datos_perfiles.php, que es la que lee la BBDD y selecciona el perfilcargado y abre la pagina correspondiente</p>
</body>

</html>