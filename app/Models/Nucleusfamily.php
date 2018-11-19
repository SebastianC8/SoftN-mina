<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nucleusfamily extends Model
{
    protected $table='nucleusfamily';   
    protected $primaryKey='idNucleusFamily';
    public $timestamps = false;
    protected $fillable = ['name','lastName','age','address','phone','email','relationShip_id','documentType_id','document'];
}
