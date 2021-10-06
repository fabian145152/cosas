<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pagina_1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootbox.min.js"></script>

</head>

<body>
  <?php

  include("coneccion.php");

  $tamagno_pagina = 8;  //cantidad de registros por pagina



  //--------------Sigue aca desde abajo de todo--------------
  if (isset($_GET["pagina"])) {
    //con el isset que se ejecute una vez pulsado el promernumero, porque si no ma da que la variable pagina no esta definida.
    if ($_GET["pagina"] == 1) {

      header("Location:index.php");
    } else {
      $pagina = $_GET["pagina"];
    }
  } else {
    $pagina = 1;
  }
  //---------------------------------------------------------

  $empezar_desde = ($pagina - 1) * $tamagno_pagina;

  //si pulso el 3 pagina =3 con el metodo get, 3-1=2 y 2*3 =6
  //guardo en la variable el numero 6 para que lo sustituya en el limit
  //limit 6, 3 

  $sql_total = "SELECT * FROM proveedores";

  /*
Para paginar agrego LIMIT, 2 parametros primer registro y cantidad de registros.
Lo primero que necesito es saber cuantos registros tiene la tabla
y en cuantas paginas lo va a dividir.
Creo variable $tamagno_pagina


*/

  $resultado = $base->prepare($sql_total);
  $resultado->execute(array());
  $num_filas = $resultado->rowCount();    //cuenta la cantidad de filas
  $total_paginas = ceil($num_filas / $tamagno_pagina);  //me dice la cantidad de paginas que voy a tener
  //el ceil me da un numero entero

  //--------------------Fin Paginacion-----------------


  $registros = $base->query("SELECT * FROM proveedores LIMIT $empezar_desde,$tamagno_pagina")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    $nombre = $_POST["nombre"];
    $calle = $_POST["calle"];
    $numero = $_POST["numero"];
    $barrio = $_POST["barrio"];
    $cp = $_POST["cp"];
    $telefono = $_POST["telef"];
    $celular = $_POST["celu"];
    $correo = $_POST["mail"];


    $sql = "INSERT INTO proveedores (nombre, calle, numero, barrio, cp, telefono, celular, correo) 
    VALUES (:nombre, :calle, :numero, :barrio, :cp, :telefono, :celular, :mail)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(
      ":nombre" => $nombre,
      ":calle" => $calle,
      ":numero" => $numero,
      ":barrio" => $barrio,
      ":cp" => $cp,
      ":telefono" => $telefono,
      ":celular" => $celular,
      ":mail" => $correo
    ));
    header("location:index.php");
  }


  ?>


  <h1>PROVEEDORES<span class="subtitulo"> Listado</span></h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <a href="../welcome.php">Salir</a>
    <div class="container-fluid">
      <table class="table table-striped table-hover">
        <tr>
          <td class="primera_fila">Id</td>
          <td class="primera_fila">Nombre</td>
          <td class="primera_fila">Calle</td>
          <td class="primera_fila">Numero</td>
          <td class="primera_fila">Barrio</td>
          <td class="primera_fila">CP</td>
          <td class="primera_fila">Telefono</td>
          <td class="primera_fila">Celular</td>
          <td class="primera_fila">Correo</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>

        </tr>
        <!-- Esta parte es para que las lineas se repitan -->
        <?php
        //--------------------------------------------------------------------------
        // Esta parte es del READ
        foreach ($registros as $persona) :
          /*
            Este es el array donde tengo almacenados todos los objetos de mi BBDD
            $persona es una variable cualquiera
            */
          //-----------------------------------------------------------------------
        ?>

          <tr>
            <td><?php echo $persona->id ?></td>
            <td><?php echo $persona->nombre ?></td>
            <td><?php echo $persona->calle ?></td>
            <td><?php echo $persona->numero ?></td>
            <td><?php echo $persona->barrio ?></td>
            <td><?php echo $persona->cp ?></td>
            <td><?php echo $persona->telefono ?></td>
            <td><?php echo $persona->celular ?></td>
            <td><?php echo $persona->correo ?></td>


            <td class="bot"><a href="borrar.php?id=<?php echo $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

            <td class='bot'><a href="editar.php?id=<?php echo $persona->id ?> 
                                                           & nombre=<?php echo $persona->nombre ?> 
                                                           & calle=<?php echo $persona->calle ?> 
                                                           & numero=<?php echo $persona->numero ?>
                                                           & barrio=<?php echo $persona->barrio ?>
                                                           & cp=<?php echo $persona->cp ?>
                                                           & telefono=<?php echo $persona->telefono ?>
                                                           & celular=<?php echo $persona->celular ?>
                                                           & correo=<?php echo $persona->correo ?>">
                <input type='button' name='up' id='up' value='Actualizar'></a></td>
          </tr>
        <?php
        // READ-------------------------------------------------------------------------------------
        endforeach;
        //Otra forma de hacerlo es concatenando todo para que quede php dentro de cada linea de html
        //------------------------------------------------------------------------------------------

        ?>
        <tr>
          <td></td>
          <td><input type='text' name='nombre' size='10' class='centrado'></td>
          <td><input type='text' name='calle' size='10' class='centrado'></td>
          <td><input type='text' name='numero' size='10' class='centrado'></td>
          <td><input type='text' name='barrio' size='10' class='centrado'></td>
          <td><input type='text' name='cp' size='10' class='centrado'></td>
          <td><input type='text' name='telef' size='10' class='centrado'></td>
          <td><input type='text' name='celu' size='10' class='centrado'></td>
          <td><input type='text' name='mail' size='10' class='centrado'></td>
          <td class='bot'><input type='submit' name='cr' id='cr' value='Agregar'></td>
        </tr>
        <td></td>
        <td>
          <?php
          // --------------------------------------------------------
          //aca empieza la parte de abajo con los numeros y saltos de pagina
          //echo "<br>";
          for ($i = 1; $i <= $total_paginas; $i++) {
            echo "<a href='?pagina=" . $i .  "'>" . $i . "</a> ";
            //$i tiene que ser un link y lo paso por la url
          }
          echo  "<br>" . $num_filas . " Registros";
          ?>
              
        </td>

      </table>
    </div>

    <p>&nbsp;</p>
</body>

</html>