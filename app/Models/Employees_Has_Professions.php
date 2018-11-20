<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees_Has_Professions extends Model
{
    protected $table = 'employees_has_professions';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['employees_id', 'professions_id'];
}
