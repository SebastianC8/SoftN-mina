<?php

namespace App\Http\Controllers;

use App\Models\Overtimes;
use Illuminate\Http\Request;

class OvertimesController extends Controller
{
    public function index(){
        $overtimes = Overtimes::all();
        return view('overtimes.index', compact('overtimes'));
    }

    public function store(Request $request){
        $overtimes = $request->all();
        Overtimes::create($overtimes);
        swal()->message('Felicidades', 'La hora extra ha sido registrada correctamente.','success');
        return redirect()->route('overtimes.index');
    }

    public function show($id){
        $overtimes = Overtimes::findOrFail($id);
        return response()->json($overtimes);
    }

    public function update(Request $request){
        $overtimes = Overtimes::where('idOvertime', $request['idOvertime'])->
        update([
            'descriptionOvertime' => $request['descriptionOvertime_edit'],
            'percent' => $request['percent_edit']
        ]);
        swal()->message('Felicidades', 'La hora extra ha sido actualizada correctamente.','success');
        return redirect()->route('overtimes.index');
    }

    public function changeStatus($id, $status){
        $overtimes = Overtimes::where('idOvertime', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado de la hora extra se ha cambiado correctamente.','success');
        return redirect()->route('overtimes.index');
    }
}
