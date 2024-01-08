<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations;

    protected $fillable = ['title', 'content'];

    public array $translatable = ['title', 'content'];

    protected $casts = ['title' => 'array', 'content' => 'array'];
}
