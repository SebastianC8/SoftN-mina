<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    protected $table = "maritalstatus";
    protected $primaryKey = "idMaritalStatus";
    public $timestamps = false;
    protected $fillable = ['nameMaritalStatus'];
}
