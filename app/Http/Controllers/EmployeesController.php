<?php

namespace App\Http\Controllers;

use DB;
use DataTables;
use App\Bonus;
use App\Models\Vinculations;
use App\Models\Resolutions;
use App\Models\LevelEducative;
use App\Models\Contracts;
use App\Models\ARL;
use App\Models\Company;
use App\Models\Professions;
use App\Models\MaritalStatus;
use App\Models\Area;
use App\Models\CompensationFound;
use App\Models\Holidays;
use App\Models\EPS;
use App\Models\Pensions;
use App\Models\layoffs;
use App\Models\Employees;
use App\Models\DocumentType;
use App\Models\TypeContract;
use App\Models\RatesJob;
use App\Models\Contracts_Has_Employees;
use App\Models\Employees_Has_LevelEducative;
use App\Models\Employees_Has_Professions;
use App\Http\Requests\CreateEmployeesRequest;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        $employees = Employees::join('document_types', 'document_types.idDocumentType', 'employees.documentType_id')->
        join('maritalstatus', 'maritalstatus.idMaritalStatus', 'maritalStatus_id')
        ->get();
        return view('employees.index', compact('employees'));
    }

    public function view()
    {
        $professions = Professions::all();
        $resolution = Resolutions::all();
        $level_educative = LevelEducative::all();
        $bonus = Bonus::all();
        $arl = ARL::all();
        $marital_st = MaritalStatus::all();
        $area = Area::all();
        $cf = CompensationFound::all();
        $holidays = Holidays::all();
        $eps = EPS::all();
        $pension = Pensions::all();
        $layoffs = layoffs::all();
        $documentTypes = DocumentType::where('codeDiferent', 0)->get();
        $type_contract = TypeContract::all();
        $rates_job = RatesJob::all();
        $company = Company::all();
        return view('contracts.contracts_has_employees',compact('documentTypes', 'layoffs', 'pension', 'eps', 'holidays', 'cf', 'area', 'marital_st', 'arl', 'bonus', 'type_contract', 'professions', 'rates_job','company', 'level_educative','resolution'));
    }

    public function store(Request $request){
        DB::transaction(function () use($request) {
        $valueEmployees = Employees::create([
            'documentType_id' => $request['documentType_id'],
            'document' => $request['document'],
            'nameEmployee' => $request['nameEmployee'],
            'lastName' => $request['lastName'],
            'birthDate' => $request['birthDate'],
            'address' => $request['address'],
            'email' => $request['email'],
            'Phone' => $request['Phone'],
            'numberSons' => $request['numberSons'],
            'entryDate' => $request['entryDate'],
            'holidays_id' => $request['holidays_id'],
            'maritalStatus_id' => $request['maritalStatus_id'],
            'area_id' => $request['area_id']
        ]);
        $valueContracts = Contracts::create([
            'descriptionContract' => $request['descriptionContract'],
            'typeContract_id' => $request['typeContract_id'],
            'dateStart' => $request['dateStart'],
            'dateEnd' => $request['dateEnd'],
            'hoursDaily' => $request['hoursDaily'],
            'bonus_id' => $request['bonus_id'],
            'company_id' => $request['company_id'],
            'ratesJob_id' => $request['ratesJob_id'],
            'workDay' => $request['workDay'],
            'resolution_idResolution' => $request['resolution_idResolution'],
            'payment_period' => $request['payment_period'],
            'attachment_contract' => $request['attachment_contract']
        ]);
        $valueVinculations = Vinculations::create([
            'employees_id' => $valueEmployees->idemployees,
            'arl_id' => $request['arl_id'],
            'eps_id' => $request['eps_id'],
            'compensationfound_id' => $request['compensationfound_id'],
            'pensions_id' => $request['pensions_id'],
            'layoffs_id' => $request['layoffs_id'],
            'date_linking_arl' => $request['date_linking_arl'],
            'date_linking_eps' => $request['date_linking_eps'],
            'date_linking_pension' => $request['date_linking_pension'],
            'date_linking_layoffs' => $request['date_linking_layoffs'],
            'date_linking_foundCompensation' => $request['date_linking_foundCompensation']
        ]);

        if($request->hasFile('attachment_contract')){
            $valueContracts->attachment_contract = $request->file('attachment_contract')->store('public');
        }
        $valueContracts->save();

        $employee_id = $valueEmployees->idemployees;
        $contract_id = $valueContracts->idcontracts;

        Contracts_Has_Employees::create([
            'contracts_id' => $contract_id,
            'employees_id' => $employee_id
            ]);

        foreach($request['level_educative_id'] as $key => $value) {
            Employees_Has_LevelEducative::create([
                'employees_id' => $valueEmployees->idemployees,
                'level_educative_id' => $request['level_educative_id'][$key],
                'profesion_id'  => $request['professions_id'][$key],
                'yearStart' => $request['yearStart_val'][$key],
                'yearEnd' => $request['yearEnd_val'][$key]
            ]);
        }
    });
        swal()->message('Felicidades', 'El empleado y su respectivo contrato han sido registrados correctamente.', 'success');
        return redirect()->route('employees.create');
    }

    public function show($id){
        $employee = Employees::join('maritalstatus', 'maritalstatus.idMaritalStatus', 'maritalStatus_id')
        ->findOrFail($id);
        return response()->json($employee);

    }

    public function edit($id){
        $bonus = Bonus::pluck('descriptionBonus', 'idBonus');
        $arl = ARL::pluck('nameARL', 'idARL');
        $marital_st = MaritalStatus::pluck('nameMaritalStatus', 'idMaritalStatus');
        $area = Area::pluck('nameArea', 'idAreas');
        $cf = CompensationFound::pluck('description', 'idCompensationFound');
        $holidays = Holidays::pluck('descriptionHolidays', 'idHolidays');
        $eps = EPS::pluck('nameEPS', 'idEPS');
        $pension = Pensions::pluck('namePensions', 'idPensions');
        $layoffs = layoffs::pluck('descriptionLayoffs', 'idLayoffs');
        $documentTypes = DocumentType::where('codeDiferent', '=' , 0)->pluck('descriptionDocument', 'idDocumentType');
        $employees = Employees::find($id);
        return view('employees.edit', compact('documentTypes', 'layoffs', 'pension', 'eps', 'holidays', 'cf', 'area', 'marital_st', 'arl', 'bonus', 'employees'));
    }

    public function update(Request $request){
        $employees = Employees::where('idemployees', $request['idemployees'])->
        update([
            'documentType_id' => $request['documentType_id_edit'],
            'document' => $request['document_edit'],
            'nameEmployee' => $request['nameEmployee_edit'],
            'lastName' => $request['lastName_edit'],
            'birthDate' => $request['birthDate_edit'],
            'address' => $request['address_edit'],
            'email' => $request['email_edit'],
            'Phone' => $request['Phone_edit'],
            'numberSons' => $request['numberSons_edit'],
            'entryDate' => $request['entryDate_edit'],
            'holidays_id' => $request['holidays_id_edit'],
            'maritalStatus_id' => $request['maritalStatus_id_edit'],
            'area_id' => $request['areas_id_edit']
        ]);
        swal()->message('Felicidades', 'La información del empleado ha sido actualizada correctamente.', 'success');
        return redirect()->route('employees.index');
    }

    public function changeStatus($id, $status){
        $employees = Employees::where('idemployees', $id)->update(["statusEmployee" => $status]);
        swal()->message('Felicidades', 'El estado del empleado ha sido cambiado correctamente.','success');
        return redirect()->route('employees.index');
    }

    public function getVinculations(){
        $employee = Vinculations::join('employees', 'employees.idemployees', 'vinculations.employees_id')->
        join('arl', 'arl.idARL', 'vinculations.arl_id')->
        join('eps', 'eps.idEPS', 'vinculations.eps_id')->
        join('compensationfound', 'compensationfound.idCompensationFound', 'vinculations.compensationfound_id')->
        join('pensions', 'pensions.idPensions', 'vinculations.pensions_id')->
        join('layoffs', 'layoffs.idLayoffs', 'vinculations.layoffs_id')->get();
        return view('employees.vinculations', compact('employee'));
    }

    public function get_employee_(){
        $employee = Employees::join('document_types', 'document_types.idDocumentType', 'employees.documentType_id')
        ->get();
        return view('employees.level_educative', compact('employee'));
    }

    public function get_lvl_Educative($id){
        $employee = Employees_Has_LevelEducative::join('level_educative', 'level_educative.id_levelEducative', 'employees_has_leveleducative.level_educative_id')
        ->join('professions', 'professions.idProfession', 'employees_has_leveleducative.profesion_id')
        ->where('employees_has_leveleducative.employees_id', $id)->get();
        return response()->json($employee);
    }
}
