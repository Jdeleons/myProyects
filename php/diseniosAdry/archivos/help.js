$.('#').click(function(){

  datos = $('#').serialize();
  $.ajax({
      type: "POST",
      data: datos,
      url: "../procesos/",
      success:function(r){

      }
  });
});


function validarFormVacio(formulario){
      datos=$('#' + formulario).serialize();
      d=datos.split(&);
      vacios = 0;
      for (var i = 0; i < d.length; i++) {
        controles = d[i].split("=");
        if (controles[1]=="A" || controles[1]=="") {
            vacios ++;
        }

      }
      return vacios;
}
