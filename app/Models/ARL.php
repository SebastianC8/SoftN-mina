<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ARL extends Model
{
    protected $table = 'arl';
    protected $primaryKey = 'idARL';
    public $timestamps = false;
    protected $fillable = ['nameARL', 'value_arl'];
}
