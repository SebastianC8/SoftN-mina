<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $table = "contracts";
    protected $primaryKey = "idcontracts";
    public $timestamps = false;
    protected $fillable = ['descriptionContract', 'typeContract_id', 'dateStart', 'dateEnd', 'hoursDaily', 'bonus_id', 'company_id', 'ratesJob_id', 'workDay', 'resolution_idResolution', 'payment_period', 'attachment_contract'];
}
