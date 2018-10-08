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
        if($request->input('txt_idBonuses')===0)
        {
            Bonus::create($request->all());
            return redirect()->route('bonus.create');
        }
        else
        {
            $this->update($request);
        }
    }

    public function show($id)
    {
        $bonus = Bonus::findOrfail($id);
        return response()->json($bonus);
    }

    public function edit($id)
    {

    }

    public function update(CreateBonusRequest $request)
    {

    }

    public function destroy($id)
    {

    }
}
