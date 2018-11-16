<?php

namespace App\Http\Controllers;

use DB;
use App\Bonus;
use App\Models\Company;
use App\Models\Employees;
use App\Models\RatesJob;
use App\Models\TypeContract;
use App\Models\Contracts;
use App\Models\ARL;
use App\Models\MaritalStatus;
use App\Models\Area;
use App\Models\CompensationFound;
use App\Models\Holidays;
use App\Models\EPS;
use App\Models\Pensions;
use App\Models\layoffs;
use App\Models\DocumentType;
use Illuminate\Http\Request;

class ContractsController extends Controller
{

    public function index(){
        $contract = Contracts::join('typecontract', 'typecontract.idtypeContract', 'contracts.typeContract_id')->
        join('company', 'company.idCompany', 'contracts.company_id')->get();
        // dd($contract);
        return view('contracts.index', compact('contract'));
    }

    public function create(){
        $type_contract = TypeContract::all();
        $rates_job = RatesJob::all();
        $bonus = Bonus::all();
        $company = Company::all();
        return view('contracts.create', compact('bonus','company', 'rates_job', 'type_contract'));
    }

    public function show($id){
        $contract = Contracts::join('ratesjob', 'ratesjob.idRatesJob', 'contracts.ratesJob_id')->where('idcontracts', $id)->first();
        return response()->json($contract);
    }

    public function update(Request $request){

    }

    public function changeStatus($id, $status){

    }

    public function getEmployee($id){
        $employee = Employees::where('document', $id)->first();
        return response()->json($employee);
    }
}
