<?php

namespace App\Http\Controllers;

use App\Models\TypeContract;
use Illuminate\Http\Request;

class TypeContractController extends Controller
{
    public function index()
    {
        $typeContracts = TypeContract::all();
        return view('typeContract.index', compact('typeContracts'));
    }

    public function store(Request $request)
    {
        $typeContract = $request->all();
        TypeContract::create($typeContract);
        swal()->message('Felicitaciones', 'El tipo de contrato ha sido registrado correctamente.', 'success');
        return redirect()->route('typeContract.index');
    }

    public function show($id)
    {
        $typeContract = TypeContract::findOrFail($id);
        return response()->json($typeContract);
    }

    public function update(Request $request)
    {
        $typeContract = TypeContract::where('idtypeContract', $request['idtypeContract'])->
        update([
            'descriptionType' => $request['descriptionType_edit']
        ]);
        swal()->message('Felicitaciones', 'El tipo de contrato ha sido actualizado correctamente.', 'success');
        return redirect()->route('typeContract.index');
    }

    public function changeStatus($id, $status)
    {
        $typeContact = TypeContract::where('idtypeContract', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado del tipo de contrato se ha cambiado correctamente.','success');
        return redirect()->route('typeContract.index');
    }
}
