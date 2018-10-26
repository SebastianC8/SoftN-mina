<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Requests;
// use App\Http\Request\CreateAreasRequest;
use Illuminate\Database\Eloquent\Model;
use Datatables;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        return view('areas.create', compact('areas'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**g
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $funciona= Area::create([
            'nameArea' => $request['nameArea'],
            'bossArea' => $request['bossArea']
        ]);

            return redirect()->route('areas.index');


        // DB::table('areas')->insert([
        //     "nameArea"=>$request->input('descriptionArea'),
        //     "bossArea"=>$request->input('valueEncargadoArea')
        // ]);

        // return redirect()->route('areas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area= Area::findOrfail($id);
        return response()->json($area);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area= Area::findOrfail($id);
        return view('areas.update',compact('area'));

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
        $area= Area::findOrfail($request['txt_idareas']);
        $area->update($request->all());
        return redirect()->route('areas.index');

    }


    public function destroy($id, $status)
    {

    }

    public function changeStatus($id, $status){
        $area = Area::where('idAreas',$id)->update(["status" => $status]);
        return redirect()->route('areas.index');
    }
}
