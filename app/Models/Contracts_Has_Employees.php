<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracts_Has_Employees extends Model
{
    protected $table = 'contracts_has_employees';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['contracts_id','employees_id'];
}
