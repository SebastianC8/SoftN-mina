<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pensions extends Model
{
    protected $table = 'pensions';
    protected $primaryKey = 'idPensions';
    public $timestamps = false;
    protected $fillable = ['namePensions','percentage_pension', 'percentage_employer'];
}
