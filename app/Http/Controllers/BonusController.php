<?php

namespace App\Http\Controllers;

use App\Bonus;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateBonusRequest;
use Illuminate\Database\Eloquent\Model;


class BonusController extends Controller
{
    public function index() //Función para retornar la vista de crear bonus.
    {
        return view('bonus.create');
    }

    public function create() //Función para listar todos los bonus.
    {
        $bonuses = Bonus::all();
        return view('bonus.create', compact('bonuses'));
    }

    public function store(CreateBonusRequest $request) //Función para registrar bonus.
    {

        if($request->input('txt_idBonuses')===null)
        {
            Bonus::create([
                'descriptionBonus' => $request['descriptionBonus'],
                'valueBonus' => $request['valueBonus']
            ]);
            return redirect()->route('bonus.create');
        }
        else
        {
            BonusController::update($request);
            return redirect()->route('bonus.create')->with('alert', 'El registro se ha actualizado correctamente.');
        }
    }

    public function show($id) //Función para cargar el modal de bonus para la respectiva actualización.
    {
        $bonus = Bonus::findOrfail($id);
        return response()->json($bonus);
    }

    public function edit($id)
    {

    }

    public function update(Request $request) //Función para actualizar los bonus.
    {
        $bonus = Bonus::where('idBonus', $request['txt_idBonuses'])->
        update([
            'descriptionBonus' => $request['descriptionBonus'],
            'valueBonus' => $request['valueBonus']
        ]);
    }

    public function destroy($id)
    {

    }
}
