<?php

namespace App\Models;

use App\Models\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'slug',
        'job_title',
        'profile_photo_path',
        'company_name',
        'company_website',
        'email',
        'social_links',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new PublishedScope);
    }
}
