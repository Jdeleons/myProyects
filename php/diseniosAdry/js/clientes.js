$(document).ready(function(){

	$('#tablaClienteLoad').load('../vistas/clientes/tablaClientes.php');
 	$('#btnAgregaCliente').click(function(){

	vacios = validarFormVacio('frmClientes');
	if (vacios > 0) {
		alertify.alert("Debes de llenar todos los campos!!");
		return false;
	}
	datos = $('#frmClientes').serialize();
	$.ajax({
			type: "POST",
			data: datos,
			url:	"../procesos/clientes/agregarCliente.php",
			success:function(r){
				if (r==1) {
					alertify.success("Cliente Almacenado");
				} else {
					alertify.error("No se pudo Insertar Cliente");
				}
			}
	});
 });
});

function agregaDatosCliente(idcliente){

	$.ajax({
		type:"POST",
		data:"idcliente=" + idcliente,
		url:"../procesos/clientes/obtenDatosCliente.php",
		success:function(r){
			dato=jQuery.parseJSON(r);
			$('#idclienteU').val(dato['id_cliente']);
			$('#nombreU').val(dato['nombre']);
			$('#apellidosU').val(dato['apellido']);
			$('#direccionU').val(dato['direccion']);
			$('#emailU').val(dato['email']);
			$('#telefonoU').val(dato['telefono']);
			$('#rfcU').val(dato['nit']);

		}
	});
}

$(document).ready(function(){
	$('#btnAgregarClienteU').click(function(){
		datos=$('#frmClientesU').serialize();

		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/clientes/actualizaCliente.php",
			success:function(r){

				if(r==1){
					$('#frmClientes')[0].reset();
					$('#tablaClienteLoad').load('../vistas/clientes/tablaClientes.php');
					alertify.success("Cliente actualizado con exito :D");
				}else{
					alertify.error("No se pudo actualizar cliente");
				}
			}
		});
	});
});


function eliminarCliente(idcliente){
	alertify.confirm('¿Desea eliminar este cliente?', function(){
		$.ajax({
			type:"POST",
			data:"idcliente=" + idcliente,
			url:"../procesos/clientes/eliminarCliente.php",
			success:function(r){
				if(r==1){
					$('#frmClientes')[0].reset();
					$('#tablaClienteLoad').load('../vistas/clientes/tablaClientes.php');
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
