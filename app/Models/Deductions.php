<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deductions extends Model
{
    protected $table = 'deductions';
    protected $primaryKey = 'idDeductions';
    public $timestamps = false;
    protected $fillable = ['nameDeduction'];
}
