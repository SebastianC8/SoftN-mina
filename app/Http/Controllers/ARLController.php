<?php

namespace App\Http\Controllers;

use App\Models\ARL;
use Illuminate\Http\Request;

class ARLController extends Controller
{
    public function index(){
        $arl = ARL::all();
        return view('arl.index', compact('arl'));
    }

    public function store(Request $request){
        $arl = $request->all();
        ARL::create($arl);
        swal()->message('Felicidades', 'La ARL se registró correctamente.','success');
        return redirect()->route('arl.index');
    }

    public function show($id){
        $arl = ARL::findOrFail($id);
        return response()->json($arl);
    }

    public function update(Request $request)
    {
        $arl = ARL::where('idARL', $request['idARL'])->
        update([
            'nameARL' => $request['nameARL_edit']
        ]);
        // dd($arl);
        swal()->message('Felicidades', 'La ARL ha sido actualizada correctamente.', 'success');
        return redirect()->route('arl.index');
    }

    public function changeStatus($id, $status){
        $arl = ARL::where('idARL', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado de la ARL se ha cambiado correctamente.', 'success');
        return redirect()->route('arl.index');
    }
}
