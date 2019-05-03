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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD

Route::resource('tipo-equipamentos', 'TipoEquipamentoController');

Route::get('/tipo-equipamentos/create', ['as' => 'tipo-equipamentos.create', 'uses' => 'TipoEquipamentoController@create']);

Route::post('/tipo-equipamentos/store', ['as' => 'tipo-equipamentos.store', 'uses' => 'TipoEquipamentoController@store']);	
=======
Route::get('/123', 'TipoEquipamentoController@create')->name('123');
>>>>>>> e6b81be5a1e719f13f5914f3986a53ca84d1f1f1
