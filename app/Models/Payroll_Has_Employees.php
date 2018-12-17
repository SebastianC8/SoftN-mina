<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll_Has_Employees extends Model
{
    protected $table = 'payroll_has_employees';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['payroll_id', 'employees_id'];
}
