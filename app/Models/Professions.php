<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professions extends Model
{
    protected $table = 'professions';
    protected $primaryKey = 'idProfession';
    public $timestamps = false;
    protected $fillable = ['nameProfession'];
}
