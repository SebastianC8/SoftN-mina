<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentType;
use App\Models\Relationships;
use App\Models\Nucleusfamily;
use DB;





class NucleusfamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentTypes = DocumentType::where('codeDiferent', 0)->get();
        $relationships=Relationships::all();
        return view('nucleusfamily.create',compact('relationships','documentTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::statement('Call funcionar'); PROCEDIMIENTOS ALMACENADOS SIN PARÁMETROS

        $respuesta=Nucleusfamily::create([            
            'name'=>$request['name'],
            'lastName'=>$request['lastName'],
            'age'=>$request['age'],
            'documentType_id'=>$request['documentType_id'],
            'document'=>$request['document'],
            'address'=>$request['address'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'relationShip_id'=>$request['relationShip_id']

        ]);        
      if($respuesta){
        swal()->message('Felicidades', 'El parentezco se registró correctamente.','success');          
      }
      else{
        Alert::error('Error', 'No se pudo registrar');

      }
      return redirect()->route('nucleusfamily.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respuesta=Nucleusfamily::where('document',$id)->first();
        return response()->json($respuesta);
        // return redirect()->route('nucleusfamily.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
