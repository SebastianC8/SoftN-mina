<?php

namespace App\Http\Controllers;

use App\Models\Resolutions;
use Illuminate\Http\Request;

class ResolutionsController extends Controller
{
    public function index()
    {
        $resolutions = Resolutions::all();
        return view('resolutions.index', compact('resolutions'));
    }

    public function store(Request $request)
    {
        $resolution = $request->all();
        Resolutions::create($resolution);
        swal()->message('Felicidades', 'La resolución fue registrada correctamente.','success');
        return redirect()->route('resolutions.index');
    }

    public function show($id)
    {
        $resolution = Resolutions::findOrFail($id);
        return response()->json($resolution);
    }

    public function update(Request $request)
    {
        $resolution = Resolutions::where('idResolution', $request['idResolution'])->
        update([
            'nameResolution' => $request['nameResolution_edit']
        ]);
        swal()->message('Felicidades', 'La resolución ha sido actualizada correctamente.', 'success');
        return redirect()->route('resolutions.index');
    }

    public function changeStatus($id, $status){
        $resolutions = Resolutions::where('idResolution', $id)->update(["status" => $status]);
        swal()->message('Felicidades', 'El estado de la resolución se ha cambiado correctamente.', 'success');
        return redirect()->route('resolutions.index');
    }
}
