<?php

namespace App\Models;

use App\Enums\PostType;
use App\Traits\CanBePublished;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, CanBePublished;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'post_type' => PostType::class,
    ];

    public function relatedPosts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'related_posts', 'post_id', 'related_post_id');
    }

    public function interviews(): BelongsToMany
    {
        return $this->belongsToMany(Interview ::class);
    }
}
