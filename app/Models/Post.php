<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'published_at',
        'category_id',
    ];

    public array $translatable = ['title', 'content'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'array',
        'content' => 'array',
        'published_at' => 'timestamp',
        'category_id' => 'integer',
    ];

//    public array $translatable = ['title', 'content'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
