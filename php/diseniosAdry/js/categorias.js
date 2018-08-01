$(document).ready(function(){
  $('#tablaCategoriaLoad').load("../vistas/categorias/tablaCategorias.php");

  $('#btnAgregaCategoria').click(function(){

    vacios = validarFormVacio('frmCategorias');
    if (vacios > 0) {
        alertify.alert("Debes de llenar todos los campos!!");
        return false;
    }

    datos = $('#frmCategorias').serialize();
    $.ajax({
      type: "POST",
      data: datos,
      url: "../procesos/categoria/agregaCategoria.php",
      success:function(r){

            if (r == 1) {
					 $('#frmCategorias')[0].reset();
					 $('#tablaCategoriaLoad').load("../vistas/categorias/tablaCategorias.php");
                alertify.success("Categoria agregada");
            }else {
                 alertify.error("Error al agregar categoria");
            }
      }
    });
  });
});

function agregaDato( idCategoria,categorias){
	$('#idCategoria').val(idCategoria);
	$('#CategoriaUpdate').val(categorias);
}


$(document).ready(function(){
	$('#btnGuardarUpdate').click(function(){

		datos = $('#frmCategoriaUpdate').serialize();
		$.ajax({
			type: "POST",
			data: datos,
			url: "../procesos/categoria/actualizarCategoria.php",
			success:function(r){
				if (r==1) {
//					$('#frmCategorias')[0].reset();
					$('#tablaCategoriaLoad').load("../vistas/categorias/tablaCategorias.php");

					alertify.success("Categoria Actualizada");
				} else {
					alertify.error("La categoria no se pudo actualizar");
				}
			}
		});
	});
});

function eliminarCategoria(idCategoria){
		alertify.confirm("Deseas eliminar esta categoria",
		function(){
				$.ajax({
					type: "POST",
					data: "idCategoria=" + idCategoria,
					url: "../procesos/categoria/eliminarCategoria.php",
					success:function(r){
						if (r==1) {
							$('#tablaCategoriaLoad').load("../vistas/categorias/tablaCategorias.php");

							alertify.success("categoria eliminada");
						} else {
							alertify.error("No se puedo eliminar la categoria");
						}
					}
				});
		},
		function(){
			alertify.error("eliminacion cancelada");
		}
	);
}
