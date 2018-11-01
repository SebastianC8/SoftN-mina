<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relationships;
use App\Models\DocumentType;
use App\Models\Nucleusfamily;
use DB;


class RelationshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $documentTypes = DocumentType::where('codeDiferent', 0)->get();
        // $relationships=Relationships::all();
        // return view('.index',compact('relationships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
//    $respuesta= DB::statement('Call insertRelationships(?)',[$request['nameRelationship']]);   PROCEDIMIENTOS ALMACENADOS CON PARÁMETROS
        $respuesta=Relationships::create([            
        'nameRelationship'=>$request['nameRelationship']
         ]);

      if($respuesta){
        swal()->message('Felicidades', 'El parentezco se registró correctamente.','success');          
      }
      else{
        Alert::error('Error', 'No se pudo registrar');
    }
    return redirect()->route('nucleusfamily.index');

}


    public function show($id)
    {
        $respuesta = Relationships::findOrFail($id);
        return response()->json($respuesta);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request)
    {
    
        // PROCEDIMIENTOS ALMACENADOS CON PARÁMETROS        
        // $respuesta= DB::statement('Call insertRelationships(?,?)',[$request['nameRelationshipE'],$request['idRelationship']]);  
        
        $respuesta=relationships::where('idRelationship',$request['idRelationship'])->
        update([
            'nameRelationship'=>$request['nameRelationshipE']
        ]);
     if($respuesta){
        swal()->message('Felicidades', 'El parentezco se actualizó correctamente.','success');        
                    }
     else{
        swal()->message('Error', 'El parentezco no se pudo actualizar.','success');        
         }
     return redirect()->route('nucleusfamily.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
