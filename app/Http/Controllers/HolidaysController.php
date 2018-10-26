<?php

namespace App\Http\Controllers;

use App\Models\Holidays;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    public function index(){
        $holidays = Holidays::all();
        return view('holidays.index', compact('holidays'));
    }

    public function store(Request $request){
        $holidays = $request->all();
        Holidays::create($holidays);
        swal()->message('Felicidades', 'Las vacaciones se han registrado correctamente.','success');
        return redirect()->route('holidays.index');
    }

    public function show($id){
        $holidays = Holidays::findOrFail($id);
        return response()->json($holidays);
    }

    public function update(Request $request){
        $holidays = Holidays::where('idHolidays', $request['idHolidays'])->
        update([
             'descriptionHolidays'=> $request['descriptionHolidays_edit'],
             'dateStart'=> $request['dateStart_edit'],
             'dateEnd'=> $request['dateEnd_edit']
        ]);
        swal()->message('Felicidades', 'Las vacaciones se han actualizado correctamente.','success');
        return redirect()->route('holidays.index');
    }

    public function changeStatus($id, $status){
        $holidays = Holidays::where('idHolidays', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado de las vacaciones se ha cambiado correctamente.','success');
        return redirect()->route('holidays.index');
    }
}
