<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = 'payroll';
    protected $primaryKey = 'idPayroll';
    public $timestamps = false;
    protected $fillable = [
        'salaryEmployee', 'daysWorked',
        'epsEmployee', 'epsCompany',
        'arlCompany','layoffs',
        'pensionEmployee', 'pensionCompany',
        'helpTransport',
        'totalAdditions','totalDeductions', 'total_Overtimes',
        'netPay', 'bonuses_id'
    ];
}
