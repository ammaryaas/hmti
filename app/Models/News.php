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
        'content',
        'content',
        'image',
        'status',
        'published_at',
    ];

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
