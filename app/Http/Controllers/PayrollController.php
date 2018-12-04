<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Commissions;
use App\Models\Deductions;
use App\Models\Overtimes;
use App\Http\Controllers\Controller;

class PayrollController extends Controller
{
    public function index(){
        $additions = Commissions::all();
        $deductions = Deductions::all();
        $overtimes = Overtimes::all();
        return view('payroll.index', compact('additions', 'deductions', 'overtimes'));
    }

    public function get_value_addition($id){
        $value_addition = Commissions::findOrFail($id);
        return response()->json($value_addition);
    }

    public function get_value_deduction($id){
        $value_deduction = Deductions::findOrFail($id);
        return response()->json($value_deduction);
    }

    public function get_value_overtime($id){
        $overtime = Overtimes::findOrFail($id);
        return response()->json($overtime);
    }

    public function get_salary(){
        $salary =
    }

    public function store(Request $request){
        dd($request->all());
    }
}
