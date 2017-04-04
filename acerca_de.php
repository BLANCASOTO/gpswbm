<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Agregar Registro</title>
	    <link rel="icon" type="image/ico" href="images/logo.ico" />
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	    <link href="starter-template.css" rel="stylesheet">
  	</head>
	<body>
	    <nav role="navigation" class="navbar navbar-inverse">
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
	      <div class="jumbotron text-center">
	        <h1>GPS Warning - BM</h1>
	        <img src="images/logo.png" class="img-rounded" alt="Cinque Terre" width="100" height=auto>
	        <p>Ver 0.1</p> 
	        <p>Blanca Flor Guzman Soto</p>
	        <p>Margarito Ruiz Robles</p> 
	      </div>
	    </nav>
	</body>
</html>