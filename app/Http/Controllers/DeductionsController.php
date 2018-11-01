<?php

namespace App\Http\Controllers;

use App\Models\Deductions;
use Illuminate\Http\Request;

class DeductionsController extends Controller
{
    public function index()
    {
        $deductions = Deductions::all();
        return view('deductions.index', compact('deductions'));
    }

    public function store(Request $request)
    {
        $deductions = $request->all();
        Deductions::create($deductions);
        swal()->message('Felicidades', 'La deducción ha sido registrada correctamente.', 'success');
        return redirect()->route('deductions.index');
    }

    public function show($id)
    {
        $deductions = Deductions::findOrFail($id);
        return response()->json($deductions);
    }

    public function update(Request $request)
    {
        $deductions = Deductions::where('idDeductions', $request['idDeductions'])->
        update([
            'nameDeduction' => $request['nameDeduction_edit']
        ]);
        swal()->message('Felicidades', 'La deducción ha sido actualizada correctamente.', 'success');
        return redirect()->route('deductions.index');
    }

    public function changeStatus($id, $status)
    {
        $deductions = Deductions::where('idDeductions', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado de la deducción se ha cambiado correctamente.','success');
        return redirect()->route('deductions.index');
    }
}
