<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Overtimes extends Model
{
    protected $table = "overtime";
    protected $primaryKey = "idOvertime";
    public $timestamps = false;
    protected $fillable = ['descriptionOvertime', 'percent'];
}
