<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookiesPolicy extends Model
{
    protected $fillable = [
        'title',
        'description',
        'picture',
        'status',
    ];
}
