<?php

namespace App\Models;

use App\Models\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'episode_number',
        'youtube_url',
        'thumbnail',
        'is_free',
        'is_premium',
        'is_published',
        'author'
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new PublishedScope);
    }
}
