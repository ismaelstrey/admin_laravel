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

Route::get('/', function () {
    return view('admin.Paginas.index');
});
Route::get('/admin/pagina/formulario', function () {
    return view('admin.Paginas.formulario');
});
Route::get('/admin/cadastro/anuncio', function () {
    return view('admin.Cadastro.anuncio');
});
Route::get('/admin/cadastro/banner', function () {
    return view('admin.Cadastro.banner');
});
Route::get('/admin/cadastro/planos', function () {
    return view('admin.Cadastro.planos');
});
Route::get('/admin/cadastro/postagen', function () {
    return view('admin.Cadastro.postagen');
});
Route::get('/admin/cadastro/servicos', function () {
    return view('admin.Cadastro.servicos');
});
Route::get('/admin/cadastro/usuarios', function () {
    return view('admin.Cadastro.usuario');
});

Route::get('/home', 'HomeController@index');


