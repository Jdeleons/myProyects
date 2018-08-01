<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
	 {
		 $users = [
			 'juan',
			 'pedro',
			 'jose',
			 'miguel',
			 '<script>alert("clicker")</script>'
		 ];
		 return view('users')
		 			->with('users', $users)
					->with('title', 'Listado de Usuarios');
	 }

	 public function show($id){
		 return "Mostrando detalle del usuario: {$id}";
	 }

	 public function create(){
		 return 'crear nuevo usuario';
	 }
}
