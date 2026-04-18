<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $fillable = ['name', 'price', 'duration', 'features'];

    protected $casts = [
        'features' => 'array',
    ];
}
