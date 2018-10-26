<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentType;
use Softon\SweetAlert\Facades\SWAL;

class DocumentTypeController extends Controller
{
    public function index()
    {
        $documentTypes = DocumentType::all();
        return view('documentType.index', compact('documentTypes'));
    }

    public function store(Request $request){
        $dt = $request->all();
        DocumentType::create($dt);
        swal()->message('Felicidades', 'El tipo de documento se registró correctamente.','success');
        return redirect()->route('documentType.index');
    }

    public function show($id)
    {
        $dt = DocumentType::findOrFail($id);
        return response()->json($dt);
    }

    public function update(Request $request){
        $dt = DocumentType::where('idDocumentType', $request['idDocumentType_edit'])->
        update([
            'descriptionDocument' => $request['descriptionDocument_edit'],
            'codeDiferent' => $request['codeDiferent_edit']
        ]);
        swal()->message('Felicidades', 'El registro se actualizó correctamente.','success');
        return redirect()->route('documentType.index');
    }
}
