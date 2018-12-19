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
//Ruta para actualizar bonus.
Route::put('bonus/{id}', ['as' => 'bonus.update', 'uses' => 'BonusController@update']);
//Ruta para cambiar de estado un bonus.
Route::get('/bonus/estado/{id}/{estado}', 'BonusController@changeStatus');

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
//Ruta para registrar una hora extra.
Route::post('overtimes', ['as' => 'overtimes.store', 'uses' => 'OvertimesController@store']);
//Ruta para editar una hora extra.
Route::get('overtimes/{id}/show', 'OvertimesController@show');
//Ruta para actualizar una hora extra.
Route::post('overtimes_update', 'OvertimesController@update');
//Ruta para cambiar el estado de unas vacaciones.
Route::get('/overtimes/estado/{id}/{estado}', 'OvertimesController@changeStatus');

//Ruta para la vista principal de pensiones.
Route::get('pensions', ['as' => 'pensions.index', 'uses' => 'PensionsController@index']);
//Ruta para registrar una pensión.
Route::post('pensions', ['as' => 'pensions.store', 'uses' => 'PensionsController@store']);
//Ruta para editar una pensión.
Route::get('pensions/{id}/show', 'PensionsController@show');
//Ruta para actualizar una pensión.
Route::post('pensions_update', 'PensionsController@update');
//Ruta para cambiar de estado una pensión.
Route::get('/pensions/estado/{id}/{estado}', 'PensionsController@changeStatus');

//Ruta para la vista principal de profesiones.
Route::get('professions', ['as' => 'professions.index', 'uses' => 'ProfessionsController@index']);
//Ruta para registrar una profesión.
Route::post('professions', ['as' => 'professions.store', 'uses' => 'ProfessionsController@store']);
//Ruta para editar una profesión.
Route::get('professions/{id}/show', 'ProfessionsController@show');
//Ruta para actualizar una profesión.
Route::post('professions_update', 'ProfessionsController@update');
//Ruta para cambiar de estado una profesión.
Route::get('/professions/estado/{id}/{estado}', 'ProfessionsController@changeStatus');

//Ruta para la vista principal de cargos.
Route::get('rateJobs', ['as' => 'rateJobs.index', 'uses' => 'RatesJobController@index']);
//Ruta para el registro de un cargo.
Route::post('rateJobs', ['as' => 'rateJobs.store', 'uses' => 'RatesJobController@store']);
//Ruta para editar un cargo.
Route::get('rateJobs/{id}/show', 'RatesJobController@show');
//Ruta para actualizar un cargo.
Route::post('rateJobs_update', 'RatesJobController@update');
//Ruta para cambiar de estado un cargo.
Route::get('/rateJobs/estado/{id}/{estado}', 'RatesJobController@changeStatus');

//Ruta para la vista principal de resoluciones.
Route::get('resolutions', ['as' => 'resolutions.index', 'uses' => 'ResolutionsController@index']);
//Ruta para el registro de una resolución.
Route::post('resolutions', ['as' => 'resolutions.store', 'uses' => 'ResolutionsController@store']);
//Ruta para editar una resolución.
Route::get('resolutions/{id}/show', 'ResolutionsController@show');
//Ruta para actualizar una resolución.
Route::post('resolutions_update', 'ResolutionsController@update');
//Ruta para cambiar de estado una resolución.
Route::get('/resolutions/estado/{id}/{estado}', 'ResolutionsController@changeStatus');

//Ruta para la vista principal de tipo de contrato.
Route::get('typeContract', ['as' => 'typeContract.index', 'uses' => 'TypeContractController@index']);
//Ruta para el registro de un tipo de contrato.
Route::post('typeContract', ['as' => 'typeContract.store', 'uses' => 'TypeContractController@store']);
//Ruta para editar un tipo de contrato.
Route::get('typeContract/{id}/show', 'TypeContractController@show');
//Ruta para actualizar un tipo de contrato.
Route::post('typeContract_update', 'TypeContractController@update');
//Ruta para cambiar de estado un tipo de contrato.
Route::get('/typeContract/estado/{id}/{estado}', 'TypeContractController@changeStatus');

//Ruta para la vista principal de fondo de compensación.
Route::get('compensationFound', ['as' => 'compensationFound.index', 'uses' => 'CompensationFoundController@index']);
//Ruta para el registro de un fondo de compensación.
Route::post('compensationFound', ['as' => 'compensationFound.store', 'uses' => 'CompensationFoundController@store']);
//Ruta para editar un fondo de compensación.
Route::get('compensationFound/{id}/show', 'CompensationFoundController@show');
//Ruta para actualizar un fondo de compensación.
Route::post('compensationFound_update', 'CompensationFoundController@update');

//Ruta para la vista principal de deducciones.
Route::get('deductions', ['as' => 'deductions.index', 'uses' => 'DeductionsController@index']);
//Ruta para el registro de una deducción.
Route::post('deductions', ['as' => 'deductions.store', 'uses' => 'DeductionsController@store']);
//Ruta para editar una deducción.
Route::get('deductions/{id}/show', 'DeductionsController@show');
//Ruta para actualizar una deducción.
Route::post('deductions_update', 'DeductionsController@update');
//Ruta para cambiar de estado una deducción.
Route::get('/deductions/estado/{id}/{estado}', 'DeductionsController@changeStatus');

//Ruta para la vista principal de ARL.
Route::get('arl', ['as' => 'arl.index', 'uses' => 'ARLController@index']);
//Ruta para el registro de una ARL.
Route::post('arl', ['as' => 'arl.store', 'uses' => 'ARLController@store']);
//Ruta para editar una ARL.
Route::get('arl/{id}/show', 'ARLController@show');
//Ruta para actualizar una ARL.
Route::post('arl_update', 'ARLController@update');
//Ruta para cambiar de estado una ARL.
Route::get('/arl/estado/{id}/{estado}', 'ARLController@changeStatus');

//Ruta para registrar contratos
Route::get('contract_employees', ['as' => 'employees.create', 'uses' => 'EmployeesController@view']);
//Ruta para la vista de listar empleados.
Route::get('employees', ['as' => 'employees.index', 'uses' => 'EmployeesController@index']);
//Ruta para registrar un empleado.
Route::post('employees', ['as' => 'employees.store', 'uses' => 'EmployeesController@store']);
//Ruta para obtener información de un empleado.
Route::get('employees/{id}/show', 'EmployeesController@show');
//Ruta para editar la información de un empleado.
Route::get('employees/edit/{id}', 'EmployeesController@edit');
//Ruta para actualizar una empleado.
Route::post('employees_update', 'EmployeesController@update');
//Ruta para cambiar el estado de un empleado.
Route::get('/employees/estado/{id}/{estado}', 'EmployeesController@changeStatus');
//Ruta para la vista de empleados x vinculaciones
Route::get('employees/vinculations', ['as' => 'employees.vinculations', 'uses' => 'EmployeesController@getVinculations']);
//Ruta para la vista de empleados x nivel educativo.
Route::get('employees/level_educative', ['as' => 'employees.level_educative', 'uses' => 'EmployeesController@get_employee_']);
//Ruta para consultar los niveles educativos de un empleado.
Route::get('employees/{id}/get_lvl', 'EmployeesController@get_lvl_Educative');


//Ruta para la vista crear contratos.
Route::get('contracts/create', ['as' => 'contracts.create', 'uses' => 'ContractsController@create']);
//Ruta para la vista de listar contratos.
Route::get('contracts', ['as' => 'contracts.index', 'uses' => 'ContractsController@index']);
//Ruta para registrar un contrato.
Route::post('contracts', ['as' => 'contracts.store', 'uses' => 'ContractsController@store']);
//Ruta para obtener información de un contrato.
Route::get('contracts/{id}/show', 'ContractsController@show');


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

Route::post('levelEducative/store', ['as' => 'level_Educative.store', 'uses' => 'Employees_Has_LevelEducative_Controller@store']);
//Ruta para ir a consultar fecha de ingreso del empleado.
Route::get('HolidaysController/{id}/show', 'HolidaysController@traerFechaIngreso');
//Ruta para guardas las vacaciones con documento
Route::post('diasfestivos', ['as' => 'diasfestivos.vacaciones', 'uses' => 'HolidaysController@guardarVaciones']);

//Ruta para la vista de nómina
Route::get('payroll', ['as' => 'payroll.index', 'uses' => 'PayrollController@index']);
//Ruta para guardar la nómina
Route::post('payroll', ['as' => 'payroll.store', 'uses' => 'PayrollController@store']);
//Ruta para consultar el valor de un tipo de adición.
Route::get('payroll/{id}/get_value_addition', 'PayrollController@get_value_addition');
//Ruta para consultar el valor de un tipo de deducción.
Route::get('payroll/{id}/get_value_deduction', 'PayrollController@get_value_deduction');
//Ruta para consultar el valor de una hora extra.
Route::get('payroll/{id}/get_value_overtime', 'PayrollController@get_value_overtime');
//Ruta para consultar el salario de un empleado.
Route::get('payroll/{document}/get_salary', 'PayrollController@get_salary');
//Ruta para actualizar los días trabajados de un empleado.
Route::post('days_worked_update', 'PayrollController@daysWorked_update');
//Ruta para generar PDF del comprobante de pago al empleado.
Route::get('payroll/{id}/pdf', 'PayrollController@getPDF');
