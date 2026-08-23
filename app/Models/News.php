<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'news_category_id',
        'content',
        'image',
        'collection',
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'collection' => 'array'
    ];

    public function news_category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    protected static function booted(): void
    {
        static::saving(function ($news) {
            if (
                $news->status === 'published' &&
                is_null($news->published_at)
            ) {
                $news->published_at = now();
            }

            if ($news->status !== 'published') {
                $news->published_at = null;
            }
        });
    }
}
