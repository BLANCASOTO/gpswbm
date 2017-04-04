<!DOCTYPE html>
<?php
  include ("php/conexion.php");

  $conexion = mysql_connect($puerto,$usuario,$contrasena);
  mysql_select_db($db_name);

?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Ruta</title>
    <link rel="icon" type="image/ico" href="images/logo.ico" />
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
            <li><a href="agregar_usuario.php">Agregar Usuario</a></li>
            <li><a href="acerca_de.php">Acerca de</a></li>
          </ul>
        <form class="navbar-form navbar-right" action="busca_usuario.php" role="search">
          <input type="text" name="parametro" id="parametro" class="form-control" placeholder="Buscar">
          <button type="submit" class="btn btn-default">Buscar</button>
        </form>
      </div>   
    </nav>
    <div class="container">
      <div class="well well-lg">
        <form role="form" name="form_agrega_ruta" action="php/agrega_ruta.php?id_usuario=<?php echo $id_usuario ?>">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del usuario">
            <p class="help-block">Asegurese que el nombre sea menor a  30 caracteres.</p>
          </div>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="correo electronico">
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <label>Tipo de usuario</label>
            <select class="form-control" name="tipo_usuario" id="tipo_usuario" >

              <?php
                $query = "SELECT * FROM tipos_usuarios";
                $result = mysql_query($query);
                while ( $registro = mysql_fetch_array($result)) {
              ?>

              <option><?php echo $registro[1]?></option>

              <?php
                }
              ?>

            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
      </div>
    </div>
  </body>
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</html>