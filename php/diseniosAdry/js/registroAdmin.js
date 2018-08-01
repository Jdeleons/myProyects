$(document).ready(function(){

  $('#Registro').click(function(){

    vacios = validarFormVacio('fmrAdmin');
    if (vacios > 0) {
        alert("Debes de llenar los campos vacios");
        return false;
    }

    datos = $('#fmrAdmin').serialize();
    $.ajax({
        type: "POST",
        data: datos,
        url: "./procesos/regLogin/registrarAdmin.php",
        success:function(r){

              if (r == 1) {
                   alert("agregado con exito");
              } else {
                   alert("Fallo al agregar");
              }
        }
    });
  });
});
