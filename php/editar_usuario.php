<?php
	$id_usuario = $_REQUEST['id_usuario'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$contrasena = $_POST['contrasena'];

    include ("conexion.php");

    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db("examen");

    mysql_query("UPDATE usuarios SET nombre='$nombre' WHERE id_usuario='$id_usuario'");
    mysql_query("UPDATE usuarios SET email='$email' WHERE id_usuario='$id_usuario'");
    mysql_query("UPDATE usuarios SET contrasena='$contrasena' WHERE id_usuario='$id_usuario'");

    header("Location: ../usuario.php?id_usuario='$id_usuario'");
?>