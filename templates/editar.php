<?php
    require 'conexion.php';

    if(isset($_POST)){
        $id = $_POST['idp'];
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $imagen = $_FILES['imagen'];
        $descripcion = $_POST['descripcion'];

        if($imagen['size'] == 0){
            $query = "update galeria set nombre = ?, autor = ?, descripcion = ? where id = ?";
            $sentencia = $conn->prepare($query);
            $sentencia->bind_param('sdsd', $nombre, $autor, $descripcion, $id);
            if($sentencia->execute()){
                echo "Editado";
            } else{
                echo "Error";
            }
        } else{
            $query = "update galeria set nombre = ?, autor = ?, descripcion = ?, imagen = ? where id = ?";
            $sentencia = $conn->prepare($query);
            $sentencia->bind_param('sdssd', $nombre, $autor, $descripcion, $imagen['name'], $id);
            if($sentencia->execute()){
                move_uploaded_file($imagen['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/galeriadesarrollo/upload/'.$imagen['name']);
                echo "Editado";
            } else{
                echo "Error";
            }
            
        }

        
    }

?>