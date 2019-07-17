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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('bands/', 'BandController@index')->name('bands.index');

Route::get('bands/show', 'BandController@show')->name('bands.show');


Route::group(["middleware" => "auth"], function(){

	Route::get('bands/create', 'BandController@create')->name('bands.create');

	Route::get('bands/check', 'BandController@check')->name('bands.check');

	Route::get('bands/edit', 'BandController@edit')->name('bands.edit');

	Route::post('bands/store', 'BandController@store')->name('bands.store');

	Route::put('bands/update', 'BandController@update')->name('bands.update');

	Route::post('bands/delete', 'BandController@delete')->name('bands.delete');

});