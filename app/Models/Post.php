<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'body', 'cover_image',
        'category', 'tags', 'status', 'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getTagsAttribute(mixed $value): array
    {
        if (is_array($value)) return $value;
        if (empty($value)) return [];
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : [];
    }

    public function setTagsAttribute(mixed $value): void
    {
        $this->attributes['tags'] = is_array($value) ? json_encode($value) : $value;
    }

    protected static function booted(): void
    {
        static::creating(function (Post $post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderByDesc('published_at');
    }
}
