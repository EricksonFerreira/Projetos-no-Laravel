<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	Route::get('/', 'HomeController@index')->name('homes');


Auth::routes();

Route::group(['middleware'=>'auth'],function() {

	Route::get('equipamento/create', ['as'=>'equipamento.create', 'uses'=>'EquipamentoController@create']);
	Route::post('equipamento/store', ['as'=>'equipamento.store', 'uses'=>'EquipamentoController@store']);

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('tipo-equipamentos', 'TipoEquipamentoController');

	Route::get('/tipo-equipamentos/create', ['as' => 'tipo-equipamentos.create', 'uses' => 'TipoEquipamentoController@create']);

	Route::post('/tipo-equipamentos/store', ['as' => 'tipo-equipamentos.store', 'uses' => 'TipoEquipamentoController@store']);

	Route::get('/123', 'TipoEquipamentoController@create')->name('123');

	Route::get('/reserva/create', ['as' => 'reserva.create', 'uses' => 'ReservaController@create']);

	Route::post('/reserva/store', ['as' => 'reserva.store', 'uses' => 'ReservaController@store']);

});
