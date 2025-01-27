<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'github',
        'technologies',
        'picture',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
