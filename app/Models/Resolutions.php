<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resolutions extends Model
{
    protected $table = 'resolution';
    protected $primaryKey = 'idResolution';
    public $timestamps = false;
    protected $fillable = ['nameResolution'];
}
