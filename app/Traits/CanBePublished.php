<?php
namespace App\Traits;

use Carbon\Carbon;

trait CanBePublished
{
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

    public function scopePublished($query): void
    {
        $query->where('published_at', '<=', now());
    }

    public function scopeUnpublished($query): void
    {
        $query->whereNull('published_at');
    }
}