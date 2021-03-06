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

/*
 * home
 * */
Route::group(['prefix' => '/'], function() {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showEventos']);
});


/*
 * admin
 * */
Route::group(['prefix' => '/admin'], function() {
    Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);
    Route::get('/relatorio', ['as' => 'admin.relatorio', 'uses' => 'AdminController@relatorioInscritos']);

    Route::group(['prefix' => '/cadastro'], function() {
        Route::get('/usuario', ['as' => 'admin.cadastro.usuario.grid', 'uses' => 'UsuarioController@grid']);
        Route::get('/evento', ['as' => 'admin.cadastro.evento.grid', 'uses' => 'EventoController@grid']);
    });
});