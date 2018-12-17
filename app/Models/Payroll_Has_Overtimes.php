<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll_Has_Overtimes extends Model
{
    protected $table = 'payroll_has_overtime';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['payroll_id', 'overtime_id', 'quantityHours', 'valueHour'];
}
