<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RatesJob extends Model
{
    protected $table = 'ratesjob';
    protected $primaryKey = 'idRatesJob';
    public $timestamps = false;
    protected $fillable = ['nameJob', 'ratesValue'];
}
