<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Commissions;
use App\Models\Deductions;
use App\Models\Contracts_Has_Employees;
use App\Models\Overtimes;
use App\Models\Vinculations;
use App\Models\Payroll;
use App\Models\Salary;
use App\Models\Company;
use App\Models\Payroll_Has_Employees;
use App\Models\Payroll_Has_Commissions;
use App\Models\Payroll_Has_Deductions;
use App\Models\Payroll_Has_Overtimes;
use App\Http\Controllers\Controller;
use Softon\SweetAlert\Facades\SWAL;
use SebastianBergmann\CodeUnitReverseLookup\Wizard;

class PayrollController extends Controller
{
    //Vista principal de nómina
    public function index(){
        $additions = Commissions::all();
        $deductions = Deductions::all();
        $overtimes = Overtimes::all();
        return view('payroll.index', compact('additions', 'deductions', 'overtimes'));
    }

    //Consultar el valor correspondiente a un tipo de adición específico.
    public function get_value_addition($id){
        $value_addition = Commissions::findOrFail($id);
        return response()->json($value_addition);
    }

    //Consultar el valor correspondiente a un tipo de deducción específico.
    public function get_value_deduction($id){
        $value_deduction = Deductions::findOrFail($id);
        return response()->json($value_deduction);
    }

    //Consultar el valor correspondiente a un tipo de hora extra específico.
    public function get_value_overtime($id){
        $overtime = Overtimes::findOrFail($id);
        return response()->json($overtime);
    }

    //Consultar el salario de un empleado con su número de documento.
    public function get_salary($document){
        $salary = Salary::join('contracts', 'contracts.idcontracts', 'salary.contract_id')->
        join('contracts_has_employees', 'contracts.idcontracts', 'contracts_has_employees.id')->
        join('employees', 'employees.idemployees', 'contracts_has_employees.employees_id')->
        where('employees.document', $document)->first();
        return response()->json($salary);
    }

    //Actualizar los días trabajados por un empleado.
    public function daysWorked_update(Request $request){
        $days_worked = Salary::where('idsalary', $request['id_salary'])->
        update([
            'days_worked' => $request['days_worked_mdl']
        ]);
        swal()->message('Felicidades', 'Los días trabajados por el empleado han sido actualizados correctamente.', 'success');
        return redirect()->route('payroll.index');
    }

    //Registrar la nómina de un empleado.
    public function store(Request $request){

        DB::transaction(function () use($request) {
        $acum_additions = 0;
        $acum_deductions = 0;
        $acum_overtimes = 0;
        $salary_employee = $request['salary_employee'];
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
        $value_hour_employee = 0;
        $quantity_hours_employee = 0;
        $dayws_worked_employee = 0;

        //Consultar las vinculaciones del empleado.
        $vinculations = Vinculations::join('eps','eps.idEPS','vinculations.eps_id')->
        join('arl', 'arl.idARL', 'vinculations.arl_id')->
        join('type_risk', 'type_risk.id_type_risk', 'arl.job_id')->
        join('layoffs', 'layoffs.idLayoffs', 'vinculations.layoffs_id')->
        join('compensationfound', 'compensationfound.idCompensationFound', 'vinculations.compensationfound_id')->
        join('pensions', 'pensions.idPensions', 'vinculations.pensions_id')->
        join('employees', 'employees.idemployees', 'vinculations.employees_id')->
        where('employees.document', $request['document_employee'])->first();

        //Consultar la tabla salarios con el fin de traer el salario mínimo legal vigente y el auxilio de transporte.
        $salary = Salary::join('contracts', 'contracts.idcontracts', 'salary.contract_id')->
        join('contracts_has_employees', 'contracts_has_employees.contracts_id', 'contracts_has_employees.contracts_id')->
        where('contracts_has_employees.employees_id', $request['employee_id'])->first();

        //Valida si el salario de un empleado es menor a 2 salarios
        //minimos legales vigentes para asignar o no el valor del auxilio de transporte.
        if($salary_employee[0] <= $salary->minimum_salary * 2){
            $help_transport = $salary->help_transport;
        }else{
            $help_transport = 0;
        }

        //Acumula el valor de todas las adiciones sobre el salario del empleado.
        if($request['value_addition'] != null)
        {
            foreach ($request['value_addition'] as $key => $value) {
                $acum_additions += $value;
            }
        }

        //Acumula el valor de todas las deducciones sobre el salario del empleado.
        if($request['value_deduction'] != null)
        {
            foreach ($request['value_deduction'] as $key => $value) {
                $acum_deductions += $value;
            }
        }

        //Acumula el valor de todas las horas extras sobre el salario del empleado.
        if($acum_overtimes != null)
        {
            $acum_overtimes = $request['input_total_overtimes'];
        }

        //Cálculo del salario parcial.
        $net_pay = $salary_employee[0] + $acum_additions + $acum_overtimes + $help_transport - $acum_deductions;
        //Este cálculo se hace porque las deducciones de EPS y pensión se hacen sin auxilio de transporte.
        $net_pay_parcial = $salary_employee[0] + $acum_additions + $acum_overtimes - $acum_deductions;

        //Cálculo de porcentajes para empleado y empleador en seguridad social.
        $eps_employee = ($net_pay_parcial * $vinculations->percentage)/100;
        $eps_employer = ($net_pay_parcial * $vinculations->eps_employeer)/100;
        $pension_employee = ($net_pay_parcial * $vinculations->percentage_pension)/100;
        $pension_employer = ($net_pay_parcial * $vinculations->percentage_employer)/100;
        $arl = ($salary->minimum_salary * $vinculations->value_risk)/100;

        //Cálculo de porcentajes para prestaciones sociales.
        //--Cesantías por 1 mes.
        $layoffs = ($net_pay * 1)/12;

        //¡IMPORTANTE!
        //******************FALTAN LOS CÁLCULOS DE PRIMA, CESANTÍAS, INTERESES DE LAS CESANTÍAS Y VACACIONES****/

        //Salario total a pagar al empleado.
        $salary_total = $net_pay - $eps_employee - $pension_employee;

        //Registro en tabla 'Payroll'
        $payroll = Payroll::create([
            'salaryEmployee' => $salary_employee[0],
            'daysWorked' => $days_worked,
            'epsEmployee' => $eps_employee,
            'epsCompany' => $eps_employer,
            'arlCompany' => $arl,
            'layoffs' => $layoffs,
            'pensionEmployee' => $pension_employee,
            'pensionCompany' => $pension_employer,
            'helpTransport' => $help_transport,
            'totalAdditions' => $acum_additions,
            'totalDeductions' => $acum_deductions,
            'total_Overtimes' => $acum_overtimes,
            'netPay' => $salary_total
        ]);

        //Capturar ID del último registro.
        $id_payroll = $payroll->idPayroll;

        //Registrar en tabla de detalle Payroll_Has_Employees
        $payroll_employees = Payroll_Has_Employees::create([
            'payroll_id' => $id_payroll,
            'employees_id' => $request['employee_id'][0]
        ]);

        //Registrar en tabla de detalle Payroll_Has_Commissions
        if($request['commission_id'] != null){
            foreach($request['commission_id'] as $key => $value){
                Payroll_Has_Commissions::create([
                    'payroll_id' => $id_payroll,
                    'commission_id' => $request['commission_id'][$key],
                    'value_commission' => $request['value_addition'][$key]
                ]);
            }
        }

        //Registrar en tabla de detalle Payroll_Has_Deductions
        if($request['deductions_id'] != null){
            foreach($request['deductions_id'] as $key => $value){
                Payroll_Has_Deductions::create([
                    'payroll_id' => $id_payroll,
                    'deductions_id' => $request['deductions_id'][$key],
                    'value_deduction' => $request['value_deduction'][$key]
                ]);
            }
        }

        //Registrar en tabla de detalle Payroll_Has_Overtimes
        if($request['overtime_id'] != null){
            foreach($request['overtime_id'] as $key => $value){
                Payroll_Has_Overtimes::create([
                    'payroll_id' => $id_payroll,
                    'overtime_id' => $request['overtime_id'][$key],
                    'quantityHours' => $request['quantity_hours'][$key],
                    'valueHour' => $request['value_overtime'][$key]
                ]);
            }
        }
        });
        // $this->getPDF($request['document_employee']);
        swal()->message('Felicidades', 'La nómina del empleado ha sido registrada correctamente.', 'success');
        return redirect()->route('payroll.index');
        }

        //Generar PDF de nómina. Faltar organizar consulta para obtener el último registro de nómina del empleado y organizar filtros.
        //Los filtros serán por fecha, mes, empleado, etc...
        public function getPDF($id){
            $payroll = Payroll_Has_Employees::join('payroll', 'payroll.idPayroll', 'payroll_has_employees.payroll_id')->
            join('employees', 'employees.idemployees', 'payroll_has_employees.employees_id')->
            where('employees.document', $id)->first();

            $company = Contracts_Has_Employees::join('contracts', 'contracts.idcontracts', 'contracts_has_employees.contracts_id')->
            join('employees', 'employees.idemployees', 'contracts_has_employees.employees_id')->
            join('company', 'company.idCompany', 'contracts.company_id')->
            where('employees.document', $id)->first();

            $pdf = PDF::loadView('payroll.pdf_pay', compact('payroll','company'));
            return $pdf->download('comprobante.pdf');
        }

}
