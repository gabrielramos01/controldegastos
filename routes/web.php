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
    return view('home');
});

Route::get('/contacto','ContactoController@index')->name('contacto');
Route::post('/contacto', 'ContactoController@store');
Route::resource('/personas', 'PersonaController');
Route::resource('/gastos', 'GastoController');
Route::resource('/ingresos', 'IngresoController');
Route::resource('/tipogasto', 'TipogastoController');
Route::resource('/ahorro', 'AhorroController');
Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'Auth\SocialController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialController@handleProviderCallback');