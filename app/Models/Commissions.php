<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commissions extends Model
{
    protected $primaryKey='idCommissions';
    public $timestamps = false;
    protected $fillable = ['nameCommission', 'status'];
}
