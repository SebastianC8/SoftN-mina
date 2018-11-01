<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeContract extends Model
{
    protected $table = 'typecontract';
    protected $primaryKey = 'idtypeContract';
    public $timestamps = false;
    protected $fillable = ['descriptionType'];
}
