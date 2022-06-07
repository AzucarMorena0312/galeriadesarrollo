<?php
    require 'conexion.php';

    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $imagen = $_FILES['imagen'];
    $descripcion = $_POST['descripcion'];

    $query = "insert into galeria(nombre, autor, descripcion, imagen) values(?, ?, ?, ?)";

    // Sentencias preparadas
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("sdss", $nombre, $autor, $descripcion, $imagen['name']);
    $sentencia->execute();

    move_uploaded_file($imagen['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/galeriadesarrollo/upload/'.$imagen['name']);

    echo "Ok";
    
?>