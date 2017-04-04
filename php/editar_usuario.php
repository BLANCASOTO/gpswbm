<?php
	$id_us = $_POST['id_usuario'];
	$nombre_us = $_POST['nombre'];
	$email_us = $_POST['email'];
	$contrasena_us = $_POST['contrasena'];

    include ("conexion.php");

    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db($db_name);

    mysql_query("UPDATE usuarios SET nombre='$nombre' WHERE id_usuario='$id_usuario'");
    mysql_query("UPDATE usuarios SET email='$email' WHERE id_usuario='$id_usuario'");
    mysql_query("UPDATE usuarios SET contrasena='$contrasena' WHERE id_usuario='$id_usuario'");

    header("Location: ../usuario.php?id='$id_usuario'");
?>