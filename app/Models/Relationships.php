<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relationships extends Model
{

    protected $table='relationships';
    protected $primaryKey='idRelationship';
    public $timestamps=false;
    public $incrementing = true;
    protected $fillable=['nameRelationship'];   
}
