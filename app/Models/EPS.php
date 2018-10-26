<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    protected $table = "eps";
    protected $primaryKey = "idEPS";
    public $timestamps = false;
    protected $fillable = ['nameEPS'];
}
