<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salary';
    protected $primaryKey = 'idsalary';
    public $timestamps = false;
    protected $fillable = ['salaryBase', 'valueHour', 'days_worked', 'contract_id'];
}
