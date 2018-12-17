<?php

namespace App\Http\Controllers;

use App\Models\Pensions;
use Illuminate\Http\Request;

class PensionsController extends Controller
{
    public function index(){
        $pensions = Pensions::all();
        return view('pensions.index', compact('pensions'));
    }

    public function store(Request $request){
        $pension= Pensions::create([
            'namePensions'=> $request['namePensions'],
            'percentage_pension'  => $request['percentagePension'],
            'percentage_employer' => $request['percentage_employer']
        ]);
        swal()->message('Felicidades', 'La pensión fue registrada correctamente.', 'success');
        return redirect()->route('pensions.index');
    }

    public function show($id){
        $pensions = Pensions::findOrFail($id);
        return response()->json($pensions);
    }

    public function update(Request $request){
        $pensions = Pensions::where('idPensions', $request['idPensions'])->
        update([
            'namePensions' => $request['namePensions_edit'],
            'percentage_pension'  =>$request['percentagePension_Edit'],
            'percentage_employer' => $request['percentage_employer_edit']
        ]);
        swal()->message('Felicidades', 'La pensión ha sido actualizada correctamente.','success');
        return redirect()->route('pensions.index');
    }

    public function changeStatus($id, $status){
        $pensions = Pensions::where('idPensions', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado de la pensión se ha cambiado correctamente.','success');
        return redirect()->route('pensions.index');
    }
}
