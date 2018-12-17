<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll_Has_Deductions extends Model
{
    protected $table = 'payroll_has_deductions';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['payroll_id', 'deductions_id', 'value_deduction'];
}
