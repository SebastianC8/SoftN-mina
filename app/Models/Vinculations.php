<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vinculations extends Model
{
    protected $table = 'vinculations';
    protected $primaryKey = 'idVinculations';
    public $timestamps = false;
    protected $fillable =
    ['employees_id', 'arl_id', 'eps_id',
     'compensationfound_id', 'pensions_id', 'layoffs_id',
     'date_linking_arl', 'date_linking_eps', 'date_linking_pension',
    'date_linking_layoffs', 'date_linking_foundCompensation'];
}
