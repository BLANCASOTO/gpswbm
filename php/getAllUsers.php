<?php
	include ("conexion.php");
	    
	$connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
	    
	mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
	    @mysql_query("SET NAMES 'utf8'");

	$sql_query = "SELECT U.id_usuario AS id,U.nombre,U.email,U.contrasena,TU.tipo_usuario AS tipo
  FROM usuarios U, tipos_usuarios TU
  WHERE TU.id_tipo_usuario = U.fk_tipo_usuarios;";

	$result = mysql_query($sql_query);

	$rows = array();
	while($r = mysql_fetch_assoc($result)) {
	  $rows[] = $r;
	}
	print json_encode($rows);
?>
