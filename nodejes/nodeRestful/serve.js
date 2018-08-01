' uso estricto ';
const Hapi = require ('hapi');

// Crea un servidor con un host y puerto
const  server = new Hapi . Servidor ();
servidor. conexión ({
    host: ' localhost ',
    puerto: 8000
});

// Agregue el
servidor de ruta . ruta ({
    método: ' GET ',
    ruta: ' / helloworld ',
    manejador : función (solicitud, respuesta) { respuesta de
    devolución ('hello world');
}
});

servidor. start ((err) => {
   if (err) {
     throw err;
   }
  console . log ('Servidor ejecutando en:', server.info.uri);
});
