<?php

namespace App\Http\Controllers;

use App\Models\Overtimes;
use Illuminate\Http\Request;

class OvertimesController extends Controller
{
    public function index(){
        return view('overtimes.index');
    }

    public function store(Request $request){
        $overtimes = $request->all();
        Overtimes::create($overtimes);
        swal()->message('Felicidades', 'La hora extra ha sido registrada correctamente.','success');
        return redirect()->route('overtimes.index');
    }
}
