<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Commissions;
use App\Models\Deductions;
use App\Models\Contracts_Has_Employees;
use App\Models\Overtimes;
use App\Models\Vinculations;
use App\Models\Payroll;
use App\Http\Controllers\Controller;
use Softon\SweetAlert\Facades\SWAL;

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

    public function get_salary($document){
        $salary = Contracts_Has_Employees::join('employees', 'employees.idemployees', 'contracts_has_employees.employees_id')->
        join('contracts', 'contracts.idcontracts', 'contracts_has_employees.contracts_id')->
        join('ratesjob', 'ratesjob.idRatesJob', 'contracts.ratesJob_id')->
        where('employees.document', $document)->first();
        return response()->json($salary);
    }

    public function store(Request $request){
        // dd($request->all());
        $acum_additions = 0;
        $acum_deductions = 0;
        $acum_overtimes = $request['input_total_overtimes'];
        $salary_employee = $request['salary_employee'];
        $days_worked = $request['days_worked'];
        $net_pay = 0;
        $help_transport = 0;
        $eps_employee = 0;
        $eps_employer = 0;
        $pension_employee = 0;
        $pension_employer = 0;
        $days_worked = $request['days_worked'][0];
        $layoffs = 0;
        $salary_total = 0;
        $net_pay_parcial = 0;

        //Consultar las vinculaciones del empleado.
        $vinculations = Vinculations::join('eps','eps.idEPS','vinculations.eps_id')->
        join('arl', 'arl.idARL', 'vinculations.arl_id')->
        join('layoffs', 'layoffs.idLayoffs', 'vinculations.layoffs_id')->
        join('compensationfound', 'compensationfound.idCompensationFound', 'vinculations.compensationfound_id')->
        join('pensions', 'pensions.idPensions', 'vinculations.pensions_id')->
        join('employees', 'employees.idemployees', 'vinculations.employees_id')->
        where('employees.document', $request['document_employee'])->first();

        dd($vinculations);

        if($salary_employee[0] <= 781242 * 2){
            $help_transport = 88211;
        }else{
            $help_transport = 0;
        }

        //Acumulado de adiciones al salario.
        foreach ($request['value_addition'] as $key => $value) {
            $acum_additions += $value;
        }
        //Acumulado de deducciones al salario.
        foreach ($request['value_deduction'] as $key => $value) {
            $acum_deductions += $value;
        }
        //Cálculo del salario total.
        $net_pay = $salary_employee[0] + $acum_additions + $acum_overtimes + $help_transport - $acum_deductions;
        $net_pay_parcial = $salary_employee[0] + $acum_additions + $acum_overtimes - $acum_deductions;

        dump("Salario del empleado: ".$salary_employee[0]);
        dump("Auxilio de transporte: ".$help_transport);
        dump("Total de adiciones: ".$acum_additions);
        dump("Total de deducciones: ".$acum_deductions);
        dump("Total de horas extras: ".$acum_overtimes);
        dump("Total a pagar al empleado: ".$net_pay);

        //Cálculo de porcentajes para empleado y empleador en seguridad social.
        $eps_employee = ($net_pay_parcial * $vinculations->percentage)/100;
        $eps_employer = ($net_pay_parcial * $vinculations->eps_employeer)/100;
        $pension_employee = ($net_pay_parcial * $vinculations->percentage_pension)/100;
        $pension_employer = ($net_pay_parcial * $vinculations->percentage_employer)/100;

        dump("Valor del empleado por EPS: ".$eps_employee);
        dump("Valor del empleador por EPS: ".$pension_employer);
        dump("Valor del empleado por pensión: ".$pension_employee);
        dump("Valor del empleador por pensión: ".$pension_employer);

        //Cálculo de porcentajes para prestaciones sociales.
        //--Cesantías por 1 mes.
        $layoffs = ($net_pay * 1)/12;

        //Salario total a pagar al empleado.
        $salary_total = $net_pay - $eps_employee - $pension_employee;

        $payroll = Payroll::create([
            'salaryEmployee' => $salary_employee,
            'daysWorked' => $days_worked,
            'epsEmployee' => $eps_employee,
            'epsCompany' => $eps_employer,
            'layoffs' => $layoffs,
            'pensionEmployee' => $pension_employee,
            'pensionCompany' => $pension_employer,
            'helpTransport' => $help_transport,
            'totalAdditions' => $acum_additions,
            'totalDeductions' => $acum_deductions,
            'total_Overtimes' => $acum_overtimes,
            'netPay' => $salary_total
        ]);
    }
}
