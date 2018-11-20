<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompensationFound extends Model
{
    protected $table = 'compensationfound';
    protected $primaryKey = 'idCompensationFound';
    public $timestamps = false;
    protected $fillable = ['description','percentage'];
}
