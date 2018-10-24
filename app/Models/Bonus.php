<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    protected $primaryKey='idBonus';
    public $timestamps = false;
    protected $fillable = ['descriptionBonus', 'valueBonus','status'];
}
