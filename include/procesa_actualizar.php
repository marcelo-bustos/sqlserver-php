<?php

    $id	    = (isset($_POST['id'])) ? $_POST['id'] : '';
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
    $edad   = (isset($_POST['edad'])) ? $_POST['edad'] : "";
    $fecha  = (isset($_POST['fecha'])) ? $_POST['fecha'] : "";

    include_once "../conexion/conexion.php";

    // $sentencia = $base_de_datos->prepare("UPDATE mascotas SET nombre = '$nombre', edad = '$edad' WHERE id = '$id'");
    // $resultado = $sentencia->execute([$nombre, $edad]);

    $sentencia = $base_de_datos->prepare("UPDATE mascotas SET nombre = ?, edad = ?, fecha = ? WHERE id = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $fecha, $id]);

    if ($resultado){
        echo 1;
    }
    else{
        echo 0;
    }

?>