<?php
	$id = $_REQUEST['id'];

    include ("conexion.php");

    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db("examen");

    mysql_query("UPDATE productos SET nombre='$nombre' WHERE id_producto='$id'");
?>