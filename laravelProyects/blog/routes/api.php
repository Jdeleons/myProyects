<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
	//list articles
	Route::get('articles', 'ArticleController@index');

	//list Singler articles
	Route::get('article/{id}', 'ArticleController@show');

	//create new article
	Route::post('article', 'ArticleController@store');

	//UPDATE ARTICLE
	Route::put('article', 'ArticleController@store');

	//Delete ARTICLE
	Route::delete('article/{id}', 'ArticleController@destroy');

});
