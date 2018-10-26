<?php

Route::get('/', function () {
    return view('auth/login');
});

 // Authentication Routes...
 Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
 Route::post('login', 'Auth\LoginController@login');
 Route::post('logout', 'Auth\LoginController@logout')->name('logout');

 // Registration Routes...
 Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
 Route::post('register', 'Auth\RegisterController@register');

 // Password Reset Routes...
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset');


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
Route::get('company/create', ['as' => 'company.create', 'uses' => 'CompanyController@create']);
//Ruta para la vista de listar empresas.
Route::get('company', ['as' => 'company.index', 'uses' => 'CompanyController@index']);
//Ruta para registrar una empresa.
Route::post('company', ['as' => 'company.store', 'uses' => 'CompanyController@store']);
//Ruta para ir a cesantías.
Route::get('layoffs',['as'=>'layoffs.index','uses'=>'LayoffsController@index']);
//Ruta para registrar cesantías
Route::post('layoffs', ['as' => 'layoffs.store', 'uses' => 'LayoffsController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
