<?php
Route::get('/', 'ShareController@index')->name('home');
Route::resource('shares', 'ShareController');