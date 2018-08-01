<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
	 {
		 if(request()->has('empy')){
			 $users = [];
		 }else{
			 $users = [
				 'juan',
				 'pedro',
				 'jose',
				 'miguel',
			 ];

		 }

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
