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

  $sql_total = "SELECT * FROM stock_productos";

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


  $registros = $base->query("SELECT * FROM stock_productos LIMIT $empezar_desde,$tamagno_pagina")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    $codigo = $_POST["codigo"];
    $seccion = $_POST["seccion"];
    $nombre = $_POST["nombre"];
    $proveedor = $_POST["proveedor"];
    $costo = $_POST["costo"];
    $precio_venta = $_POST["precio_venta"];
    $stock = $_POST["stock"];
    $obs = $_POST["obs"];


    $sql = "INSERT INTO stock_productos (codigo, seccion, nombre, proveedor, costo, precio_venta, stock, obs) 
    VALUES (:codigo, :seccion, :nombre, :proveedor, :costo, :precio_venta, :stock, :obs)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(
      ":codigo" => $codigo,
      ":seccion" => $seccion,
      ":nombre" => $nombre,
      ":proveedor" => $proveedor,
      ":costo" => $costo,
      ":precio_venta" => $precio_venta,
      ":stock" => $stock,
      ":obs" => $obs
    ));
    header("location:index.php");
  }


  ?>


  <h1>STOCK DE PRODUCTOS<span class="subtitulo"> Listado</span></h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <a href="../welcome.php">Salir</a>
    <div class="container-fluid">
      <table class="table table-striped table-hover">
        <tr>
          <td class="primera_fila">Id</td>
          <td class="primera_fila">Codigo</td>
          <td class="primera_fila">Seccion</td>
          <td class="primera_fila">Nombre</td>
          <td class="primera_fila">Proveedor</td>
          <td class="primera_fila">Costo</td>
          <td class="primera_fila">Precio de Venta</td>
          <td class="primera_fila">Stock</td>
          <td class="primera_fila">obs</td>
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
            <td><?php echo $persona->codigo ?></td>
            <td><?php echo $persona->seccion ?></td>
            <td><?php echo $persona->nombre ?></td>
            <td><?php echo $persona->proveedor ?></td>
            <td><?php echo $persona->costo ?></td>
            <td><?php echo $persona->precio_venta ?></td>
            <td><?php echo $persona->stock ?></td>
            <td><?php echo $persona->obs ?></td>


            <td class="bot"><a href="borrar.php?id=<?php echo $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

            <td class='bot'><a href="editar.php?id=<?php echo $persona->id ?> 
                                                           & codigo=<?php echo $persona->codigo ?> 
                                                           & seccion=<?php echo $persona->seccion ?> 
                                                           & nombre=<?php echo $persona->nombre ?>
                                                           & proveedor=<?php echo $persona->proveedor ?>
                                                           & costo=<?php echo $persona->costo ?>
                                                           & precio_venta=<?php echo $persona->precio_venta ?>
                                                           & stock=<?php echo $persona->stock ?>
                                                           & obs=<?php echo $persona->obs ?>">
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
          <td><input type='text' name='codigo' size='10' class='centrado'></td>
          <td><input type='text' name='seccion' size='10' class='centrado'></td>
          <td><input type='text' name='nombre' size='10' class='centrado'></td>
          <td><input type='text' name='proveedor' size='10' class='centrado'></td>
          <td><input type='text' name='costo' size='10' class='centrado'></td>
          <td><input type='text' name='precio_venta' size='10' class='centrado'></td>
          <td><input type='text' name='stock' size='10' class='centrado'></td>
          <td><input type='text' name='obs' size='10' class='centrado'></td>
          <td class='bot'><input type='submit' name='cr' id='cr' value='Agregar'></td>
        </tr>
        <td>

        </td>
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

  </form>
  </td>

  </table>
  </div>

  <p>&nbsp;</p>
</body>

</html>