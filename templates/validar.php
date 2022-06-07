<?php 
    session_start();
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];

    if($nombre === "jonathan" && $pass === "12_dsT"){
        $_SESSION['nombre'] = $nombre;
        echo json_encode(array('exito'=> 1));
    } else{
        echo json_encode(array('exito'=> 0));
    }

?>