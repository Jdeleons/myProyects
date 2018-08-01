<?php
      session_start();
      if (isset($_SESSION['usuario'])) {


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categorias</title>

    <?php
          require_once 'menu.php';
     ?>
  </head>
  <body>
    <div class="container">
      <h1>Categorias</h1>
       <div class="row">
           <div class="col-sm-4">
               <form id="frmCategorias">
                    <label for="">Categoria</label>
                    <input type="text" class="form-control input-sm" name="Categoria" id="Categoria"><p></p>

                    <span class="btn btn-primary" id="btnAgregaCategoria">Agregar</span>
               </form>
           </div>

           <div class="col-sm-6">
              <div id="tablaCategoriaLoad">

              </div>
           </div>
       </div>
    </div>

	 <!-- Modal -->
    <div class="modal fade" id="actualizaCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Actualiza Categorias</h4>
          </div>
          <div class="modal-body">
                <form id="frmCategoriaUpdate">
                  <input type="text" hidden id="idCategoria" name="idCategoria">
                  <label for="">Categoria</label>
                  <input type="text" name="CategoriaUpdate" id="CategoriaUpdate" class="form-control input-sm">
                  <p></p>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnGuardarUpdate" class="btn btn-warning" data-dismiss="modal">Guardar</button>

          </div>
        </div>
      </div>
    </div>


  </body>
</html>
<?php
}else {
  header('location:../index.php');
}
 ?>
