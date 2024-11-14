<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
    ];


    // Model methods --------
    public function summary(int $lenght = 50): string
    {
        return Str::of($this->content)->limit($lenght);
    }
}
