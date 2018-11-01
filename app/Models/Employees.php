<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'idemployees';
    public $timestamps = false;
    protected $fillable = [
        'documentType_id', 'document', 'numberSons',
        'entryDate', 'birthDate', 'levelEducative',
        'nameEmployee', 'lastName', 'address',
        'email', 'Phone', 'layoffs_id',
        'pensions_id', 'EPS_id', 'holidays_id',
        'compenstionFound_id', 'areas_id', 'maritalStatus_id',
        'ARL_id', 'bonus_idBonus'
    ];
}
