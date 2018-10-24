<?php

namespace App\Http\Controllers;

use App\Models\Commissions;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class CommissionsController extends Controller
{
    public function index(){
        $commissions = Commissions::all();
        return view('commission.index', compact('commissions'));
    }

    public function store(Request $request){
        $response = $request->all();
        Commissions::create($response);
        return redirect()->route('commissions.create');
    }

    public function show($id){
        $commission = Commissions::findOrfail($id);
        return response()->json($commission);
    }

    public function update(Request $request){
        $commission = Commissions::where('idCommissions', $request['idCommission_mdl'])->
        update([
            'nameCommission' => $request['nameComissionMdl']
        ]);
        return redirect()->route('commissions.create');
    }

    public function changeStatus($id, $status){
        $commission = Commissions::findOrFail($id)->update(["status" => $status]);
        return redirect()->route('commissions.create');
    }
}
