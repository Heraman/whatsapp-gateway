<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
        
#[Fillable(['name', 'price', 'duration', 'features'])]
class Plans extends Model
{
    // protected $fillable = ['name', 'price', 'duration', 'features'];

    protected $casts = [
        'features' => 'array',
    ];
}
