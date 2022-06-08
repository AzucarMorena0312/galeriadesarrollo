<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../css/formulario.css">
</head>
<body>    
    <header class="titulo">
        <h1>Registro de Imagenes</h1>
    </header>
    <main>
        <form id="formulario">
        <div id="divNuevo"><button class="btnNuevo" id="btnNuevo">Ver Listado de Imagenes</button></div>
            <fieldset>
                <legend>Información de Imagen</legend>
                 <!-- <div class="error"></div>  -->
                <div class="form-field"> 
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" autocomplete="off" required>
                    <small></small>
                </div>
                <div class="form-field"> 
                    <label for="autor">Autor: </label>
                    <input type="text" name="autor" id="autor" autocomplete="off" required>
                    <small></small>
                </div>
                <div class="form-field"> 
                    <label for="imagen">Subir Imagen: </label>
                    <input type="file" name="imagen" id="imagen" required>
                    <small></small>
                </div>
                <div class="form-field"> 
                    <label for="descripcion">Descripción: </label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
                    <small></small>
                </div>
                
                <div class="form-field">
                <input type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
    </main>
    <script src="../js/insertar.js" type="module"></script> 

<?php
	include ("../basico/footer.php");
?>