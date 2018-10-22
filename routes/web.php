<?php

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
Route::get('bonus/{id}/show',  'BonusController@show');
//Ruta para actualizar bonus.
Route::put('bonus/{id}', ['as' => 'bonus.update', 'uses' => 'BonusController@update']);
//Ruta para cambiar de estado un bonus.
Route::get('/bonus/estado/{id}/{estado}', 'BonusController@changeStatus');

//Ruta para la vista principal de Comisiones.
Route::get('commissions', ['as' => 'commissions.create', 'uses' => 'CommissionsController@index']);
//Ruta para registrar un comisión.
Route::post('commissions', ['as' => 'commissions.store', 'uses' => 'CommissionsController@store']);
//Ruta para editar una comisión.
Route::get('commissions/{id}/show', 'CommissionsController@show');
//Ruta para actualizar una comisión.
Route::post('commissionsUpdate',  'CommissionsController@update');
//Ruta para cambiar de estado una comisión.
Route::get('/commissions/estado/{id}/{estado}', 'CommissionsController@changeStatus');

//Ruta para la vista crear de empresas.
Route::get('company/create', 'CompanyController@create');
