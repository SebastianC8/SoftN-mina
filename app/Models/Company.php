<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey='idCompany';
    public $timestamps = false;
    protected $fillable = ['documentType_id','codeCompany', 'companyName', 'imgCompany', 'numberEmployees','sizeCompany'];

}
