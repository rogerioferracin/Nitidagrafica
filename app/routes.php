<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('home');
});

Route::controller('paginas', 'PaginaController');

/**
 * ROUTES ADMIN
 */

Route::get('/admin/', function()
{
    return View::make('/admin/home');
});

Route::controller('admin/categoria', 'CategoriaController');
Route::controller('admin/conteudo', 'ConteudoController');
