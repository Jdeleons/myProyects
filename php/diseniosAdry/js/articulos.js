$(document).ready(function(){
  $('#tablaArticulosLoad').load("../vistas/articulos/tablaArticulos.php");
  $('#btnAgregaArticulo').click(function(){

    vacios = validarFormVacio('frmArticulos');
    if (vacios > 0) {
       alertify.alert("Debes de llenar todos los campos!!");
       return false;
    }

	var formData = new FormData(document.getElementById('frmArticulos'));

    $.ajax({
		url: "../procesos/articulos/agregaArticulo.php",
		type: "POST",
		dataType: "html",
		data: formData,
		cache: false,
		contentType: false,
		processData: false,

      success:function(r){

			if(r == 1){
			$('#frmArticulos')[0].reset();
	 		$('#tablaArticulosLoad').load("../vistas/articulos/tablaArticulos.php");
				alertify.success("Agregado con exito :D");
			}else{
				alertify.error("Fallo al subir el archivo :(");
			}
      }
    });
  });
});

function agregaDatosArticulo(idarticulo){
	$.ajax({
		type:"POST",
		data:"idart=" + idarticulo,
		url:"../procesos/articulos/obtenDatosArticulo.php",
		success:function(r){

			dato=jQuery.parseJSON(r);
			$('#idArticulo').val(dato['id_producto']);
			$('#categoriaSelectU').val(dato['id_categoria']);
			$('#nombreU').val(dato['nombre']);
			$('#descripcionU').val(dato['descripcion']);
			$('#cantidadU').val(dato['cantidad']);
			$('#precioU').val(dato['precio']);

		}
	});
}

$(document).ready(function(){
	$('#btnActualizaarticulo').click(function(){

		datos=$('#frmArticulosU').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/articulos/actualizaArticulos.php",
			success:function(r){
				if(r==1){
					$('#tablaArticulosLoad').load("../vistas/articulos/tablaArticulos.php");
					alertify.success("Actualizado con exito :D");
				}else{
					alertify.error("Error al actualizar :(");
				}
			}
		});
	});
});

function eliminaArticulo(idArticulo){
	alertify.confirm('¿Desea eliminar este articulo?', function(){
		$.ajax({
			type:"POST",
			data:"idarticulo=" + idArticulo,
			url:"../procesos/articulos/eliminarArticulo.php",
			success:function(r){
				if(r==1){
					$('#tablaArticulosLoad').load("../vistas/articulos/tablaArticulos.php");
					alertify.success("Eliminado con exito!!");
				}else{
					alertify.error("No se pudo eliminar :(");
				}
			}
		});
	}, function(){
		alertify.error('Cancelo !')
	});
}
