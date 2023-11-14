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

    public function getCoverAttribute(){
        $cover = $this->cover_image ? asset('images/posts/' . $this->cover_image) : 'https://placehold.co/600x400';
        
        return $cover;
    }
}
