<?php

namespace App\Http\Controllers;

use App\Models\Employees_Has_LevelEducative;
use Illuminate\Http\Request;

class Employees_Has_LevelEducative_Controller extends Controller
{
    public function store(Request $request){
            foreach($request['level_educative_id_mdl'] as $key => $value){
                Employees_Has_LevelEducative::create([
                    'employees_id' => $request['employee_id'],
                    'level_educative_id' => $request['level_educative_id_mdl'][$key],
                    'profesion_id' => $request['professions_id_mdl'][$key],
                    'yearStart' => $request['yearStart_mdl'][$key],
                    'yearEnd' => $request['yearEnd_mdl'][$key]
                ]);
            }

        swal()->message('Felicidades', 'Los niveles educativos se le han asignado correctamente al empleado.', 'success');
        return redirect()->route('employees.index');
    }
}
