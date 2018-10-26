<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $table = 'document_types';
    protected $primaryKey ='idDocumentType';
    public $timestamps = false;
    protected $fillable = ['descriptionDocument','codeDiferent'];
}
