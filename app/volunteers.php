<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class volunteers extends Model
{
    protected $fillable = [
        'name',
        'mail',
        'phone',
        'university',
        'major',
        'acyear',
        'committee',
        'past-vol-work',
        'why-join',
        'facebook',
        'comments'
    ];

}
