$(document).ready(function(){
	$('#entrarSistema').click(function(){

	vacios = validarFormVacio('fmrLogin');
	if (vacios > 0) {
		alert("Debe de llenar todos los campos !!!");
		return false;
	}
    
    datos = $('#fmrLogin').serialize();
	$.ajax({
		type: "post",
		data: datos,
		url: "./procesos/regLogin/login.php",
		success:function(r){
			//alert(r);

			if (r == 1) {
				window.location = "./vistas/inicio.php";
			} else {
				alert("No se puedo acceder");
			}

		}
	 });
	});
});