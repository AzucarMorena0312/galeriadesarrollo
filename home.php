<?php
	include ("basico/cabecera.php");
?>

    <div id="divNuevo">
		<button class="btnNuevo" id="btnNuevo">Ingresar Nueva imagen</button>

        <?php
    	session_start();
    	if(!isset($_SESSION['nombre'])){
    	    header('location: ../index.php');
    	}
    	//echo "<h1>Bienvenido ". $_SESSION['nombre']." <h1>";
    	echo "<button  class='btnNuevo'> <a href='templates/logout.php'> Cerrar Sesion  </a> </button>";
	?>

    </div>
	
    <main>
    </main>
    <div class="modal_bg">
        <div class="modal">
            <div class="cabecera_modal">
                <h2>Editar Imagen</h2>
            </div>
            <div class="forma_modal">
                <form id="fm_modal">
                <label for="name">Nombre: </label>
                <input type="hidden" name="idp" id="modal_idp" value="">
                <input type="text" name="nombre" id="modal_nombre"><br>
                <label for="autor">Autor: </label>
                <input type="text" name="autor" id="modal_autor"><br>
                <label for="imagen">Subir Imagen: </label>
                <span>Imagen Actual: <span id="img_actual">imagen1.jpeg</span></span>
                <span class="indicacion">Puede subir una nueva imagen si lo requiere</span>
                <input type="file" name="imagen" id="modal_imagen">
                <br>
                <label for="descripcion">Descripción: </label>
                <textarea name="descripcion" id="modal_descripcion" cols="30" rows="10"></textarea>
                <div class="botones">
                    <button class="btnEditar" id="btnEditar" onclick="Editar(event)">Editar</button><button class="btnCancelar" id="btnCancelar">Cancelar</button>
                </div>    
                </form>
                
            </div>            
        </div>        
    </div>

    <script src="../galeriadesarrollo/js/crud.js"></script>
	
<?php
	include ("basico/footer.php");
?>