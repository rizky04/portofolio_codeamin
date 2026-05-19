<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'thumbnail',
        'demo_url', 'github_url', 'category', 'status', 'sort_order',
    ];

    protected static function booted(): void
    {
        static::creating(function (Project $project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->orderBy('sort_order');
    }
}
