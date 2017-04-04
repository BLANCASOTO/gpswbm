<?php
    $id_usuario = $_REQUEST['id_usuario'];

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $tipo_usuario = $_POST['tipo_usuario'];

    $fk_tipo_usuarios = '0';

    switch ($tipo_usuario) {
        case 'Administrador':
            $fk_tipo_usuarios = '1';
            break;
        case 'Estandar':
            $fk_tipo_usuarios = '2';
            break;
        case 'Invitado':
            $fk_tipo_usuarios = '3';
            break;        
    }

    include ("conexion.php");

    mysql_connect($puerto,$usuario,$contrasena);
    mysql_select_db("examen");

    mysql_query("INSERT INTO usuarios(nombre,email,contrasena,fk_tipo_usuarios)
        VALUES ('$nombre','$email','$contrasena',$fk_tipo_usuarios");

    header("Location: ../todos_usuarios.php");
?>