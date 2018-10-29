<?php

namespace App\Http\Controllers;

use App\Models\Professions;
use Illuminate\Http\Request;

class ProfessionsController extends Controller
{
    public function index(){
        $professions = Professions::all();
        return view('professions.index', compact('professions'));
    }

    public function store(Request $request){
        $professions = $request->all();
        Professions::create($professions);
        swal()->message('Felicidades', 'La profesión fue registrada correctamente.','success');
        return redirect()->route('professions.index');
    }

    public function show($id){
        $professions = Professions::findOrFail($id);
        return response()->json($professions);
    }

    public function update(Request $request){
        $professions = Professions::where('idProfession', $request['idProfession_edit'])->
        update([
            'nameProfession' => $request['nameProfession_edit']
        ]);
        swal()->message('Felicidades', 'La profesión ha sido actualizada correctamente.','success');
        return redirect()->route('professions.index');
    }
}
