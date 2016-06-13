<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('/admin', 'AdminController');
Route::resource('/admin/empresa', 'EmpresaController');
Route::resource('/admin/cadastro/anuncio', 'AnunciosController');
Route::resource('/admin/cadastro/banner', 'BannersController');
Route::resource('/admin/cadastro/planos', 'PlanosController');
Route::resource('/admin/cadastro/postagen', 'PostagensController');
Route::resource('/admin/cadastro/servicos', 'ServicosController');
Route::resource('/admin/cadastro/usuarios', 'UsuarioController');

 Route::get('/', 'HomeController@index');




// Route::get('/', function () {
//     return ('teste');
// });

Route::get('/admin/home', 'admin/HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
