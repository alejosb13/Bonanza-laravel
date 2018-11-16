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

// Route::get('/{accion}', function($accion){
// 	return view('accion');
// });

Route::get('/agregar/{tipo}','DregistroController@MostrarLista');
Route::post('/agregar/guardar','DregistroController@GuardarRegistro');

Route::get('/modificar/{tipo}','DregistroController@ModificarRegistro')->name('ModificarRegistro');

Route::delete('/eliminar/{tipo}/{id}','DregistroController@EliminarRegistro')->name('EliminarRegistro');

Route::get('/editar/{tipo}/{id}','DregistroController@EditarRegistro')->name('EditarRegistro');
Route::put('/editar/{tipo}/{numero}/guardar','DregistroController@GuardarModificacion')->name('GuardarModificacion');

