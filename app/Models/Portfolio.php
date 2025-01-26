<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'greetings',
        'name',
        'jobTitle',
        'motto',
        'aboutHeader',
        'aboutContent',
    ];
}
