<?php
	include ("conexion.php");

	$id_usuario = $_REQUEST['id_usuario'];
	    
	$connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
	    
	mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
	    @mysql_query("SET NAMES 'utf8'");

	$sql_query = "SELECT U.id_usuario,R.id_rutas, R.nombre, R.origen_n, R.origen_s, R.destino_n, R.destino_s, R.avisar_num, M.medida, U.nombre
          FROM rutas R, medidas M, usuarios U, aux_usuarios_rutas A
          where 
          U.id_usuario = A.fk_usuario and 
          M.id_medida = R.fk_medida;";

	$result = mysql_query($sql_query);

	$rows = array();
	while($r = mysql_fetch_assoc($result)) {
	  $rows[] = $r;
	}
	print json_encode($rows);
?>
