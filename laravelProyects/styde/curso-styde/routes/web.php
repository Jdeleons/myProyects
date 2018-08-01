<?php



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
		return 'Hola mundo';
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/new', 'UserController@create');

Route::get('/usuarios/{id}', 'UserController@show')->where('id','\d+');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');
