<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'idemployees';
    public $timestamps = false;
    protected $fillable = [
        'documentType_id', 'document', 'nameEmployee',
        'lastName', 'birthDate', 'address',
        'email', 'Phone', 'numberSons',
        'entryDate', 'holidays_id',
        'pensions_id', 'EPS_id',
        'maritalStatus_id', 'area_id'
    ];
}
