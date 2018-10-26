<?php

namespace App\Http\Controllers;

use App\Models\MaritalStatus;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    public function index(){
        $marital_status = MaritalStatus::all();
        return view('marital_status.index', compact('marital_status'));
    }

    public function store(Request $request){
        $marital_status = $request->all();
        MaritalStatus::create($marital_status);
        swal()->message('Felicidades', 'El estado civil fue registrado correctamente.','success');
        return redirect()->route('maritalStatus.index');
    }

    public function show($id){
        $marital_status = MaritalStatus::findOrFail($id);
        return response()->json($marital_status);
    }

    public function update(Request $request){
        $marital_status = MaritalStatus::where('idMaritalStatus', $request['idMaritalStatus'])->
        update([
            'nameMaritalStatus' => $request['nameMaritalStatus_edit']
        ]);
        swal()->message('Felicidades', 'El estado civil se ha actualizado correctamente.','success');
        return redirect()->route('maritalStatus.index');
    }

    public function changeStatus($id, $status){
        $marital_status = MaritalStatus::where('idMaritalStatus', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado del estado civil se ha cambiado correctamente.','success');
        return redirect()->route('maritalStatus.index');
    }
}
