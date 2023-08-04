<?php

namespace App\Models;

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
        $query->whereNotNull('published_at');
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
