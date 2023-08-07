<?php

namespace App\Models;

use App\Enums\PostType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

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

    public function publish(Carbon $publishDate = null): void
    {
        $this->update([
            'published_at' => $publishDate ?? now(),
        ]);
    }

    public function unpublish(): void
    {
        $this->update([
            'published_at' => null,
        ]);
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', now());
    }

    public function scopeUnpublished($query)
    {
        $query->whereNull('published_at');
    }

    public function relatedPosts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'related_posts', 'post_id', 'related_post_id');
    }
}
