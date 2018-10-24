<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table='areas';
    protected $primaryKey='idAreas';
    public $timestamps= false;
    protected $fillable=['nameArea','bossArea','estado'];
}
