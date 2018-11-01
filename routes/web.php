<?php

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();


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
//Ruta para ir a editar cesantías
Route::post('layoffs_update','LayoffsController@update');
//Ruta para mapear cesantías en el modal 
Route::get('layoffs/{id}/show','LayoffsController@show');
//Cambiar estado de las cesantías
Route::get('/layoffs/cambiarEstado/{id}/{estado}','LayoffsController@changeStatus');
//Ruta para ir a home de la aplicación
Route::get('/home', 'HomeController@index')->name('home');
//Ruta para editar una empresa.
Route::get('company/{id}/show','CompanyController@show');
//Ruta para actualizar la información de una empresa.
Route::post('companyUpdate', 'CompanyController@update');
//Ruta para la vista principal de tipo de documento.
Route::get('documentType', ['as' => 'documentType.index', 'uses' => 'DocumentTypeController@index']);
//Ruta para registrar un tipo de documento.
Route::post('documentType', ['as' => 'documentType.store', 'uses' => 'DocumentTypeController@store']);
//Ruta para editar un tipo de documento.
Route::get('documentType/{id}/show', 'DocumentTypeController@show');
//Ruta para actualizar un tipo de documento.
Route::post('documentType_update', 'DocumentTypeController@update');
//Ruta para la vista principal de EPS.
Route::get('EPS', ['as' => 'EPS.index', 'uses' => 'EPSController@index']);
//Ruta para registrar una EPS.
Route::post('EPS', ['as' => 'EPS.store', 'uses' => 'EPSController@store']);
//Ruta para editar una EPS.
Route::get('EPS/{id}/show', 'EPSController@show');
//Ruta para acutalizar una EPS.
Route::post('EPS_update', 'EPSController@update');
//Ruta para cambiar de estado una EPS.
Route::get('/EPS/estado/{id}/{estado}', 'EPSController@changeStatus');
//Ruta para la vista principal de vacaciones.
Route::get('holidays', ['as' => 'holidays.index', 'uses' => 'HolidaysController@index']);
//Ruta para registrar unas vacaciones.
Route::post('holidays', ['as' => 'holidays.store', 'uses' => 'HolidaysController@store']);
//Ruta para editar unas vacaciones.
Route::get('holidays/{id}/show', 'HolidaysController@show');
//Ruta para actualizar unas vacaciones.
Route::post('holidays_update', 'HolidaysController@update');
//Ruta para cambiar el estado de unas vacaciones.
Route::get('/holidays/estado/{id}/{estado}', 'HolidaysController@changeStatus');
//Ruta para la vista principal de Estado civil.
Route::get('maritalStatus', ['as' => 'maritalStatus.index', 'uses' => 'MaritalStatusController@index']);
//Ruta para registrar un estado civil.
Route::post('maritalStatus', ['as' => 'maritalStatus.store', 'uses' => 'MaritalStatusController@store']);
//Ruta para editar un estado civil.
Route::get('maritalStatus/{id}/show', 'MaritalStatusController@show');
//Ruta para actualizar un estado civil.
Route::post('maritalStatus_update', 'MaritalStatusController@update');
//Ruta para cambiar de estado un estado civil.
Route::get('/maritalStatus/estado/{id}/{estado}', 'MaritalStatusController@changeStatus');
//Ruta para la vista principal de horas extras.
Route::get('overtimes', ['as' => 'overtimes.index', 'uses' => 'OvertimesController@index']);
//Ruta para registrar un estado civil.
Route::post('overtimes', ['as' => 'overtimes.store', 'uses' => 'OvertimesController@store']);
//Ruta para ir a núcleo familiar
Route::get('nucleusfamily', ['as' => 'nucleusfamily.index', 'uses' => 'NucleusfamilyController@index']);
//Ruta para registrar personas del núcleo familiar
Route::post('nucleusfamily', ['as' => 'nucleusfamily.store', 'uses' => 'NucleusfamilyController@store']);
//Ruta para consultar por cédula núcleo familiar
Route::get('nucleusfamily/{id}/show', 'NucleusfamilyController@show');
//Ruta para ir o listar los parentesco
Route::get('relationships', ['as' => 'relationships.index', 'uses' => 'RelationshipsController@index']);
//Ruta para ir a crear parentesco
Route::post('relationships', ['as' => 'relationships.store', 'uses' => 'RelationshipsController@store']);
//Ruta para consultar parentesco
Route::get('relationships/{id}/show', 'RelationshipsController@show');
//ruta para editar un parentesco
Route::post('relationships_update','RelationshipsController@update');



 




