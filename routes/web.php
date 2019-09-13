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
Route::resource('/gastos', 'GastoController');
Route::resource('/ingresos', 'IngresoController');
/*
Route::get('/contactos', function () {
    return view('contactos');
});
Route::get('/gastos', function () {
    return view('gastos');
});
Route::get('/ingresos', function () {
    return view('ingresos');
});

*/
