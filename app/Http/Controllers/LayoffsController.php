<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\layoffs;
use App\Http\Requests;
// use App\Http\Request\CreateAreasRequest;
use Illuminate\Database\Eloquent\Model;



class LayoffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layoffs= layoffs::all();
        return view('layoffs.index',compact('layoffs'));
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
        $funciona= layoffs::create([
            'descriptionLayoffs'=>$request['descriptionLayoffs'],
            'valueLayoffs' =>$request['valueLayoffs']
        ]);
        if($funciona){
            swal()->message('Felicidades', 'La cesantía se registró correctamente.','success');        
        }
        else{
            swal()->message('Error', 'La cesantía no se registró.','success');        
        }
        return redirect()->route('layoffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $layoffs= layoffs::findOrFail($id);
        return response()->json($layoffs);
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $layoffss=layoffs::where('idLayoffs', $request['idLayoffs_edit'])->
        update([
            'descriptionLayoffs' => $request['descriptionLayoffsE'], 
            'valueLayoffs' => $request['valueLayoffs']
        ]);
        if($layoffss){
            swal()->message('Felicidades', 'La cesantía se actualizó correctamente.','success');        
        }else{
            swal()->message('Error', 'La cesantía no se pudo actualizar.','success');        

        }
        return redirect()->route('layoffs.index');
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

    public function changeStatus($id,$status){
        $layoffs=layoffs::where('idLayoffs',$id)->update(["status"=>$status]);
        swal()->message('Felicidades', 'El estado de la cesantía se ha cambiado correctamente.','success');
        return redirect()->route('layoffs.index');


    }
}
