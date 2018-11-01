<?php

namespace App\Http\Controllers;

use App\Models\RatesJob;
use Illuminate\Http\Request;

class RatesJobController extends Controller
{
    public function index(){
        $ratesJob = RatesJob::all();
        return view('rateJobs.index', compact('ratesJob'));
    }

    public function store(Request $request){
        $rateJobs = $request->all();
        RatesJob::create($rateJobs);
        swal()->message('Felicidades', 'El cargo fue registrado correctamente.','success');
        return redirect()->route('rateJobs.index');
    }

    public function show($id){
        $rateJobs = RatesJob::findOrFail($id);
        return response()->json($rateJobs);
    }

    public function update(Request $request){
        $rateJobs = RatesJob::where('idRatesJob', $request['idRatesJob'])->
        update([
            'nameJob' => $request['nameJob_edit'],
            'ratesValue' => $request['ratesValue_edit']
        ]);
        swal()->message('Felicidades', 'El cargo ha sido actualizado correctamente.','success');
        return redirect()->route('rateJobs.index');
    }

    public function changeStatus($id, $status){
        $rateJobs = RatesJob::where('idRatesJob', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado del cargo se ha cambiado correctamente.','success');
        return redirect()->route('rateJobs.index');
    }
}
