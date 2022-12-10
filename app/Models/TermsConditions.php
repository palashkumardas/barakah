<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermsConditions extends Model
{
    
    protected $fillable = [
        'title',
        'description',
        'picture',
        'status',
    ];
}
