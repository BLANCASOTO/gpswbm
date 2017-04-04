<?php

    $lg_usuario = $_POST['lg_usuario'];
    $lg_contrasena = $_POST['lg_contrasena'];

    include ("conexion.php");

    mysql_connect($puerto,$usuario,$contrasena);
    mysql_select_db($db_name);

    $query = "SELECT fk_tipo_usuarios FROM usuarios
    WHERE '$lg_usuario' = nombre
    AND '$lg_contrasena' = contrasena";

    $result = mysql_query($query);
    $registro = mysql_fetch_array($result);

    switch ($registro[0]) {
        case '1':
            /*echo 'acceso correcto';*/
            echo ('agregado');
            break;
        case '2':
            echo 'estandar';
            break;
        case '3':
            echo 'invitado';
            break;        
        default:
            echo ('error');
            break;
    }
?>
