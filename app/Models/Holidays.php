<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    protected $table = 'holidays';
    protected $primaryKey = 'idHolidays';
    public $timestamps = false;
    protected $fillable = ['descriptionHolidays', 'dateStart', 'dateEnd','idEmployee'];
}
