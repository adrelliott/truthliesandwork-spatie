<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'job_title',
        'company_name',
        'phone',
        'website',
        'twitter',
        'linkedin',
        'links',
    ];

    protected $casts = [
        'links' => 'array',
    ];

    public function interviews(): BelongsToMany
    {
        return $this->belongsToMany(Interview::class, 'contact_interview_pivot');
    }
}
