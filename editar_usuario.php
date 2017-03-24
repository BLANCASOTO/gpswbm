<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar usuario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav role="navigation" class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="todos_usuarios.php" class="navbar-brand">GPS-Warning BM</a>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="todos_usuarios.php">Inicio</a></li>
              <li><a href="agregar_ruta.php">Agregar Ruta</a></li>
              <li><a href="acerca_de.php">Acerca de</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search">
            <input type="text" class="form-control" placeholder="Buscar">
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
        </div>            
    </nav>
    <?php
      $id = $_REQUEST['id'];
      $query="SELECT U.id_usuario,U.nombre,U.email,U.contrasena,TU.tipo_usuario
      FROM usuarios U, tipos_usuarios TU
      where '$id' = U.id_usuario and
      TU.id_tipo_usuario=U.fk_tipo_usuarios";

      include ("php/conexion.php");

      $conexion = mysql_connect($puerto,$usuario,$contrasena);
      mysql_select_db($db_name);
      $result = mysql_query($query);
      $registro = mysql_fetch_array($result)

    ?>
    <div class="container">
      <div class="jumbotron">
        <h1><?php echo $registro[1]; ?></h1>
        <table border="0px" class="table">
          <tr>
            <td>
            <form action="php/editar_usuario.php?id_usuario=<?php echo $registro[0]; ?>" >
              <div class="form-group">
                <div class="col-xs-3">
                  <input type="email" id="nombre" name="nombre" class="form-control" placeholder="<?php echo $registro[1]; ?>">
                </div>
                <div class="col-xs-3">
                  <input type="text" id="email" name="email" class="form-control" placeholder="<?php echo $registro[2]; ?>">
                </div>
                <div class="col-xs-3">
                  <input type="text" id="contrasena" name="contrasena" class="form-control" placeholder="<?php echo $registro[3]; ?>">
                </div>
              </div>
            </td>
            <td>
              <p class="text-right">
                <button type="submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-ok"></span>
                </button>
                </form>
                <button type="submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              </p>
            </td>
          </tr>
        </table>   
      </div>
    </div>

    <div class="container">
      <div class="row">

        <?php
          include ("php/conexion.php");

          $conexion = mysql_connect($puerto,$usuario,$contrasena);
          mysql_select_db($db_name);

          $query = "SELECT R.id_rutas, R.nombre, R.origen_n, R.origen_s, R.destino_n, R.destino_s, R.avisar_num, M.medida, U.nombre
          FROM rutas R, medidas M, usuarios U, aux_usuarios_rutas A
          where '$id' = U.id_usuario and
          U.id_usuario = A.fk_usuario and 
          M.id_medida = R.fk_medida";

          $result = mysql_query($query);

          while ( $registro = mysql_fetch_array($result)) {
        ?>

        <div class="col-sm-4">
          <div class="panel panel-default">
            <button onclick="window.location.href='editar.php?id=<?php echo $registro[0];?>'" class="btn btn-default btn-block">
              <h3><?php echo $registro[1]?></h3>
            </button>
            <p>origen: <?php echo $registro[2]?>°,<?php echo $registro[3]?>° </p>
            <p>destino: <?php echo $registro[4]?>°,<?php echo $registro[5]?>° </p>
            <p><?php echo $registro[6]?> <?php echo $registro[7]?> antes</p>
            <p>propietario: <?php echo $registro[8]?></p>
          </div>
        </div>

        <?php
          }
        ?>

      </div>
    </div>
  </body>
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
  
</html>