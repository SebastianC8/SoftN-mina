<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll_Has_Commissions extends Model
{
    protected $table = 'payroll_has_commissions';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['payroll_id', 'commission_id', 'value_commission'];
}
