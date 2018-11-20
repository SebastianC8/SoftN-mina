<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompensationFound;

class CompensationFoundController extends Controller
{
    public function index(){
        $compensationFound = CompensationFound::all();
        return view('compensationFound.index', compact('compensationFound'));
    }

    public function store(Request $request){
        $foundCompensation =
        CompensationFound::create([
                
            'description'=> $request['description'],
            'percentage'=>  $request['percentageFound']

        ]);
        swal()->message('Felicidades', 'El fondo de compensación ha sido registrado correctamente.', 'success');
        return redirect()->route('compensationFound.index');
    }

    public function show($id){
        $compensationFound = CompensationFound::findOrFail($id);
        return response()->json($compensationFound);
    }

    public function update(Request $request){
        $compensationFound = CompensationFound::where('idCompensationFound', $request['idCompensationFound'])->
        update([
            'description' => $request['description_edit'],
            'percentage'=>  $request['percentageFound_edit']
        ]);
        swal()->message('Felicidades', 'El fondo de compensación ha sido actualizado correctamente.', 'success');
        return redirect()->route('compensationFound.index');
    }
}
