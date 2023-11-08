<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $dates = [
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}