<?php

namespace App\Models;

use Spatie\Tags\HasTags;
use App\Models\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Episode extends Model
{
    use HasFactory, SoftDeletes, HasTags;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'episode_number',
        'youtube_id',
        'megaphone_id',
        'thumbnail',
        'is_premium',
        'author'
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new PublishedScope);
    }

    public function guests(): BelongsToMany
    {
        return $this->belongsToMany(Guest::class);
    }
}
