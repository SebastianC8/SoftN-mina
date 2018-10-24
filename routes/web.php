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
    return view('layout');
});

//Ruta para la creación de bonus (primas).
Route::get('bonus/create', ['as' => 'bonus.create', 'uses' => 'BonusController@create']);
//Ruta para registrar un bonus (primas).
Route::post('bonus', ['as' => 'bonus.store', 'uses' => 'BonusController@store']);
//Ruta para listar todos los bonus.
Route::get('bonus', ['as' => 'bonus.index', 'uses' => 'BonusController@index']);
//Ruta para editar bonus.
Route::get('bonus/{id}/show', 'BonusController@show');
//Ruta para ir a areas
Route::get('areas',['as'=>'areas.index','uses'=>'AreasController@index']);
//Ruta para crear areas
Route::post('areas', ['as' => 'areas.store', 'uses' => 'AreasController@store']);
//Ruta para mapear area en el modal 
Route::get('area/{area}/show','AreasController@show');
//Ruta para editar area
Route::post('area/update', ['as'=>'areas.update','uses'=>'AreasController@update']);
//Ruta para cambiar estado a un área.
Route::get('/area/estado/{id}/{estado}', 'AreasController@changeStatus');
