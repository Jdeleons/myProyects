$(document).ready(function(){
  $('#tablaUsuarioLoad').load('../vistas/usuarios/tablaUsuarios.php');
  $('#btnAgregaUsuario').click(function(){

    vacios = validarFormVacio('frmUsuarios');
    if (vacios > 0) {
        alertify.alert("Debes de llenar todos los campos!!!");
        return false;
    }
    datos = $('#frmUsuarios').serialize();
    $.ajax({
      type: "POST",
      data: datos,
      url: '../procesos/regLogin/registrarAdmin.php',
      success:function(r){
              if (r == 1) {
					  $('#frmUsuarios')[0].reset();
					  $('#tablaUsuarioLoad').load('../vistas/usuarios/tablaUsuarios.php');
                 alertify.alert("Usuario registrado correctamente");
              }else {
                 alertify.error("Error al registrar usuario");
              }
      }
    });
  });
});

function agregaDatosUsuario(idusuario){

	$.ajax({
	  type:"POST",
	  data:"idUsuario=" + idusuario,
	  url:"../procesos/usuarios/obtenerDatosUsuario.php",
	  success:function(r){
		 dato=jQuery.parseJSON(r);

		 $('#idUsuario').val(dato['id_usuario']);
		 $('#NombreU').val(dato['nombre']);
		 $('#ApellidoU').val(dato['apellido']);
		 $('#UsuarioU').val(dato['email']);
	  }
	});
 }

 function eliminarUsuario(idusuario){
	  alertify.confirm('¿Desea eliminar este usuario?', function(){
		 $.ajax({
			type:"POST",
			data:"idUsuario=" + idusuario,
			url:"../procesos/usuarios/eliminarUsuario.php",
			success:function(r){

			  if(r==1){
			  $('#tablaUsuarioLoad').load('../vistas/usuarios/tablaUsuarios.php');
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

 $(document).ready(function(){
     $('#btnGuardarU').click(function(){

       datos = $('#frmUsuarioU').serialize();
       $.ajax({
         type: "post",
         data: datos,
         url: "../procesos/usuarios/modificarUsuario.php",
         success:function(r){
 //            $('#frmRegistro')[0].reset();
             $('#tablaUsuarioLoad').load('../vistas/usuarios/tablaUsuarios.php');

           if (r==1) {
               alertify.success('Datos Modificados Correctamente');
           }else{
               alertify.erro('Error al Modificar Usuario');
           }
         }

       });
     });
   });
