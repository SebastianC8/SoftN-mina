<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layoffs extends Model
{
    protected $table='layoffs';
    protected $primaryKey='idLayoffs';
    public $timestamps=false;
    protected $fillable=['descriptionLayoffs','valueLayoffs'];
}
