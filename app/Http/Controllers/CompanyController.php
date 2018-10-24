<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CreateCompanyRequest;
use Softon\SweetAlert\Facades\SWAL;

class CompanyController extends Controller
{
    public function index(){
        $documentTypes = DocumentType::where('codeDiferent', 1)->get();
        $companies = Company::join('document_types','document_types.idDocumentType', 'company.documentType_id')->orderBy('codeCompany','DESC')->get();
        return view('company.index', compact('companies','documentTypes'));
    }

    public function create(){
        $company = Company::all();
        return view('company.create', compact('company'));
    }

    public function store(CreateCompanyRequest $request)
    {
        $company = Company::create($request->all());

        if($request->hasFile('imgCompany')){
            $company->imgCompany = $request->file('imgCompany')->store('public');
        }

        $company->save();
        swal()->message('Felicidades','La empresa ha sido registrada correctamente.','success');
        return redirect()->route('company.create');
    }

    public function show($id){
        $company = Company::findOrFail($id);
        return response()->json($company);
    }

    public function update(Request $request){
        $company = Company::where('idCompany', $request['mdl_idCompany'])->
        update([
            'documentType_id' => $request['mdl_documentType'],
            'codeCompany' => $request['mdl_codCompany'],
            'companyName' => $request['mdl_nameCommission'],
            'numberEmployees' => $request['mdl_numberEmployees']
        ]);
    }
}
