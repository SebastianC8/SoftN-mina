<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelEducative extends Model
{
    protected $table = 'level_educative';
    protected $primaryKey = 'id_levelEducative';
    public $timestamps = false;
    protected $fillable = ['description_levelEducative'];
}
