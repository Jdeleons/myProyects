$(document).ready(function(){
	$('#btnVentas').click(function(){
		EsconderSeccionVentas();
		$('#idVentas').load('Ventas/ventasDeProductos.php');
		$('#idVentas').show();
	});

	$('#btnMostrar').click(function(){
		EsconderSeccionVentas();
		$('#idMostrar').load('Ventas/ventasHechas.php');
		$('#idMostrar').show();
	});
});

function EsconderSeccionVentas(){
	$('#idVentas').hide();
	$('#idMostrar').hide();
}
