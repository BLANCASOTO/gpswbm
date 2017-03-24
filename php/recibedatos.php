<?php
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$existencias = $_POST['existencias'];
	$precio_compra = $_POST['precio_compra'];
	$precio_venta = $_POST['precio_venta'];

	include ("conexion.php");

	mysql_connect($puerto,$usuario,$contrasena);
	mysql_select_db("examen");

	mysql_query("INSERT INTO usuarios(nombre,email,contrasena,tipo) VALUES('$nombre','$email','$contrasena','$tipo')");

	echo $pag_index
?>