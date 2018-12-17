<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use Illuminate\Http\Request;

class EPSController extends Controller
{
    public function index(){
        $eps = Eps::all();
        return view('eps.index', compact('eps'));
    }

    public function store(Request $request){
        $eps= Eps::create([
            'nameEPS' => $request['nameEPS'],
            'percentage'=> $request['percentageEPS'],
            'eps_employeer' => $request['percentage_employeer']
        ]);
        swal()->message('Felicidades', 'La EPS se registró correctamente.','success');
        return redirect()->route('EPS.index');

    }

    public function show($id){
        $eps = Eps::findOrFail($id);
        return response()->json($eps);
    }

    public function update(Request $request){
        $eps = Eps::where('idEPS', $request['idEPS_edit'])->
        update([
            'nameEPS' => $request['nameEPS_edit'],
            'percentage'=> $request['percentageEPSEdit'],
            'eps_employeer' => $request['percentage_employeer_edit']
        ]);
        swal()->message('Felicidades', 'La EPS se actualizó correctamente.','success');
        return redirect()->route('EPS.index');
    }

    public function changeStatus($id, $status){
        $eps = Eps::where('idEPS', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado de la EPS se ha cambiado correctamente.','success');
        return redirect()->route('EPS.index');
    }
}
