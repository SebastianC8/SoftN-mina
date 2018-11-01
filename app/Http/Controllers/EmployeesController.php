<?php

namespace App\Http\Controllers;

use App\Bonus;
use App\Models\ARL;
use App\Models\MaritalStatus;
use App\Models\Area;
use App\Models\CompensationFound;
use App\Models\Holidays;
use App\Models\EPS;
use App\Models\Pensions;
use App\Models\layoffs;
use App\Models\Employees;
use App\Models\DocumentType;
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

    public function create()
    {
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
        return view('employees.create', compact('documentTypes', 'layoffs', 'pension', 'eps', 'holidays', 'cf', 'area', 'marital_st', 'arl', 'bonus'));
    }

    public function store(CreateEmployeesRequest $request){
        $employee = $request->all();
        Employees::create($employee);
        swal()->message('Felicidades', 'El empleado ha sido registrado correctamente.', 'success');
        return redirect()->route('employees.create');
    }

    public function show($id){
        $employee = Employees::join('maritalstatus', 'maritalstatus.idMaritalStatus', 'maritalStatus_id')->
        join('eps', 'eps.idEPS', 'EPS_id')
        ->findOrFail($id);
        return response()->json($employee);
    }

    public function edit(){
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
        return view('employees.edit', compact('documentTypes', 'layoffs', 'pension', 'eps', 'holidays', 'cf', 'area', 'marital_st', 'arl', 'bonus'));
    }
}
