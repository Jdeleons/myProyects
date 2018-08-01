<?php



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
		return 'Hola mundo';
});

Route::get('/usuarios', function(){
	return 'Usuarios';
});

Route::get('/usuarios/new', function(){
	return 'crear nuevo usuario';
});

Route::get('/usuarios/{id}', function($id){
	return "Mostrando detalle del usuario: {$id}";
})->where('id','\d+');

Route::get('/saludo/{name}/{nickname?}', function($name,$nickname=null){
	if ($nickname) {

		return "Bienvenido {$name}, tu apodo es {$nickname}";
	}else {
		return "Bienvenido {$name}, no tienes apodo:";
	}
});
