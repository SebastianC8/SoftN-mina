<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees_Has_LevelEducative extends Model
{
    protected $table = 'employees_has_leveleducative';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['employees_id', 'level_educative_id', 'profesion_id','yearStart', 'yearEnd'];
}
